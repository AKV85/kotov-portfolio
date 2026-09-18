# Kotov Portfolio

Personal developer portfolio of **Andrej Kotov**, a PHP / Laravel Backend Developer.

The project is designed as a multilingual portfolio hub for presenting professional experience, technical skills and backend development projects through dedicated case studies.

The portfolio is built with Laravel and uses server-rendered Blade views with a lightweight frontend stack.

**Live website:** https://kotov.lt

## Features

- Multilingual interface in English, Lithuanian and Russian
- Locale-aware URLs and navigation
- Dedicated CV page
- Individual project case studies
- Service Desk project case study
- Responsive dark interface
- SEO-friendly localized metadata
- Canonical URLs and hreflang support
- Open Graph and Twitter metadata
- XML sitemap
- robots.txt
- Custom favicon
- Automated feature tests
- Continuous Integration with GitHub Actions
- Docker-based production deployment
- Production health endpoint

## Public Pages

The portfolio currently contains three main types of public pages.

### Home

Introduces the developer and provides an overview of:

- professional background
- backend development experience
- technologies and tools
- selected projects
- contact information

Available in:

```text
/
 /lt
 /ru
```

### CV

A multilingual CV containing:

- professional experience
- technical skills
- education and training
- languages
- earlier professional experience
- contact information

Available in:

```text
/cv
/lt/cv
/ru/cv
```

### Service Desk Case Study

A detailed case study of the Service Desk project covering:

- project architecture
- ticket workflow and backend logic
- audit history and notifications
- external integrations
- AI integration
- automated testing
- production and deployment approach
- technology stack

Available in:

```text
/projects/service-desk
/lt/projects/service-desk
/ru/projects/service-desk
```

## Localization

English is the default language.

Lithuanian and Russian pages use explicit locale prefixes:

```text
/lt/...
/ru/...
```

Laravel localization files are stored in:

```text
lang/en
lang/lt
lang/ru
```

The language switcher preserves the current page when changing locale.

Localized pages also provide locale-aware canonical URLs and `hreflang` links for:

- English
- Lithuanian
- Russian
- x-default

## Technology Stack

### Backend

- PHP
- Laravel 10
- Blade
- Laravel localization

### Frontend

- Tailwind CSS 4
- Alpine.js
- Vite 5

### Development

- Docker
- Laravel Sail
- Git

### Quality

- PHPUnit
- Laravel Pint
- Feature testing
- GitHub Actions CI

### Production

- Railway
- Docker
- Cloudflare DNS
- HTTPS
- Custom domain

## Automated Tests

The portfolio includes automated feature tests for the main public functionality.

Current coverage includes:

- Home pages in EN / LT / RU
- CV pages in EN / LT / RU
- Service Desk pages in EN / LT / RU
- localized public routes
- language switching
- locale-aware navigation
- unsupported locale handling
- SEO metadata
- canonical URLs
- hreflang links
- sitemap
- robots.txt
- favicon

Current test suite:

```text
29 tests passed
168 assertions
```

Run all tests with:

```bash
./vendor/bin/sail artisan test
```

Individual feature test suites can also be executed directly:

```bash
./vendor/bin/sail artisan test tests/Feature/HomePageTest.php
./vendor/bin/sail artisan test tests/Feature/CvPageTest.php
./vendor/bin/sail artisan test tests/Feature/ServiceDeskPageTest.php
./vendor/bin/sail artisan test tests/Feature/SeoTest.php
```

## Continuous Integration

GitHub Actions is used to validate changes on pushes to `main` and on pull requests.

The CI workflow:

- installs Composer dependencies
- prepares the Laravel environment
- installs frontend dependencies
- builds Vite production assets
- runs the PHPUnit test suite
- checks PHP formatting with Laravel Pint

The workflow configuration is located at:

```text
.github/workflows/ci.yml
```

## Local Development

### Requirements

The recommended local environment uses Docker and Laravel Sail.

You will need:

- Docker
- Git
- Composer

### Installation

Clone the repository:

```bash
git clone https://github.com/AKV85/kotov-portfolio.git
cd kotov-portfolio
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Start the application:

```bash
./vendor/bin/sail up -d
```

Generate the application key:

```bash
./vendor/bin/sail artisan key:generate
```

Run database migrations:

```bash
./vendor/bin/sail artisan migrate
```

Install frontend dependencies:

```bash
./vendor/bin/sail npm install
```

Start the Vite development server:

```bash
./vendor/bin/sail npm run dev
```

The application is then available at:

```text
http://localhost
```

## Production Deployment

The portfolio is deployed to **Railway** using the production `Dockerfile` included in the repository.

The production build:

1. installs frontend dependencies with `npm ci`
2. builds Vite production assets
3. installs production Composer dependencies
4. optimizes the Composer autoloader
5. runs Laravel package discovery
6. prepares Laravel runtime directories
7. starts the application on the port provided by Railway

The application uses the following production environment configuration:

```text
APP_ENV=production
APP_DEBUG=false
APP_URL=https://kotov.lt
LOG_CHANNEL=stderr
LOG_LEVEL=warning
```

`APP_KEY` is configured securely in the production environment and is not stored in the repository.

The custom domain is:

```text
https://kotov.lt
```

DNS is managed through **Cloudflare**, while the application itself is hosted on **Railway**.

Cloudflare provides authoritative DNS for the domain and directs `kotov.lt` to the Railway deployment. Existing DNS records for other services and email are maintained separately.

HTTPS is available on the production domain. Laravel is configured to trust the Railway proxy so forwarded HTTPS information is handled correctly.

### Production Health Check

The application exposes:

```text
/up
```

Production endpoint:

```text
https://kotov.lt/up
```

A healthy application returns:

```json
{
    "status": "ok"
}
```

### Production Verification

The production deployment is verified for:

- EN / LT / RU home pages
- EN / LT / RU CV pages
- EN / LT / RU Service Desk case study pages
- HTTPS
- production Vite assets
- locale switching
- canonical URLs
- hreflang links
- XML sitemap
- robots.txt
- favicon
- health endpoint

The sitemap is available at:

```text
https://kotov.lt/sitemap.xml
```

The robots file is available at:

```text
https://kotov.lt/robots.txt
```

## Production Build

Build frontend assets locally with:

```bash
./vendor/bin/sail npm run build
```

A production Docker image can also be built directly from the repository:

```bash
docker build -t kotov-portfolio .
```

## Code Formatting

Laravel Pint is used for PHP code formatting:

```bash
./vendor/bin/sail pint
```

Before committing changes, whitespace issues can also be checked with:

```bash
git diff --check
```

## Project Structure

The most relevant application directories and files are:

```text
app/Http/Middleware/       Locale and proxy handling
lang/                      EN / LT / RU translations
resources/views/           Blade layouts and pages
resources/views/pages/     Home and CV pages
resources/views/projects/  Project case studies
routes/                     Application routes
tests/Feature/              Feature and SEO tests
public/                     Public assets, robots.txt and favicon
.github/workflows/          CI configuration
Dockerfile                  Production container definition
```

## Documentation

Additional technical documentation:

- [Accessibility & Performance Review](docs/accessibility-performance-review.md) — production Lighthouse audit, accessibility review, frontend optimization and before/after performance results.

## Related Project

### Service Desk

Production-oriented Laravel application demonstrating backend architecture, ticket workflows, audit history, notifications, integrations, AI-assisted functionality and automated testing.

Repository:

https://github.com/AKV85/service-desk

Production:

https://desk.kotov.lt

The portfolio contains a dedicated multilingual case study describing the project in more detail.

## Links

**Portfolio**

https://kotov.lt

**GitHub**

https://github.com/AKV85

**LinkedIn**

https://www.linkedin.com/in/andrej-kotov-09664a21b

**Email**

a.kotov.laknojus@gmail.com

## Project Status

The portfolio is live in production at:

```text
https://kotov.lt
```

The current version includes the multilingual portfolio foundation, CV, Service Desk case study, SEO support, automated tests, Continuous Integration and reproducible Docker-based production deployment.

The project is designed to be extended with additional backend project case studies over time.

## Author

**Andrej Kotov**  
PHP / Laravel Backend Developer  
Klaipėda, Lithuania