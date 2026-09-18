FROM node:20-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY resources ./resources
COPY vite.config.js ./

RUN npm run build


FROM php:8.2-fpm

WORKDIR /app

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        nginx \
        unzip \
        gettext-base \
        libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --optimize-autoloader \
    --no-scripts

COPY . .

COPY --from=frontend /app/public/build ./public/build

RUN composer dump-autoload --optimize \
    && php artisan package:discover --ansi \
    && mkdir -p storage/framework/cache \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chmod +x /app/docker/start.sh \
    && rm -f /etc/nginx/sites-enabled/default

CMD ["/app/docker/start.sh"]
