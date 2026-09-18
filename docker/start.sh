#!/bin/sh

set -e

PORT="${PORT:-8080}"

export PORT

envsubst '${PORT}' \
    < /app/docker/nginx/default.conf.template \
    > /etc/nginx/conf.d/default.conf

php-fpm -D

exec nginx -g 'daemon off;'
