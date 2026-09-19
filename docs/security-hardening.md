# Production Security Hardening

This document describes the HTTP security headers and related production hardening applied to the portfolio.

## Security Headers

Security headers are configured in the production Nginx configuration.

### X-Content-Type-Options

```text
X-Content-Type-Options: nosniff
```

Prevents browsers from MIME-sniffing responses and interpreting resources as a different content type.

### X-Frame-Options

```text
X-Frame-Options: DENY
```

Prevents the portfolio from being embedded in frames or iframes, reducing exposure to clickjacking attacks.

The Content Security Policy also enforces the equivalent restriction through:

```text
frame-ancestors 'none'
```

### Referrer-Policy

```text
Referrer-Policy: strict-origin-when-cross-origin
```

Preserves useful referrer information for same-origin navigation while limiting information sent to external origins.

### Permissions-Policy

```text
Permissions-Policy: camera=(), microphone=(), geolocation=()
```

Disables browser capabilities that are not required by the portfolio.

### HTTP Strict Transport Security

```text
Strict-Transport-Security: max-age=31536000
```

Instructs browsers to use HTTPS for the portfolio after receiving the policy over a secure connection.

`includeSubDomains` and `preload` are intentionally not enabled because subdomains may host independent applications with their own deployment and security requirements.

## Content Security Policy

The production Content Security Policy is:

```text
default-src 'self';
script-src 'self';
style-src 'self';
img-src 'self' data:;
font-src 'self';
connect-src 'self';
object-src 'none';
base-uri 'self';
form-action 'self';
frame-ancestors 'none'
```

The policy follows a restrictive same-origin approach:

- JavaScript and stylesheets must originate from the portfolio itself.
- Images are restricted to the same origin and data URLs.
- Fonts must originate from the same origin.
- Network connections initiated by frontend code are restricted to the same origin.
- Browser plugins and embedded objects are disabled.
- The document base URL cannot be redirected to an external origin.
- Forms can only submit to the same origin.
- The site cannot be embedded in frames.

External GitHub, LinkedIn and project links are normal navigation links and therefore do not require additional CSP source permissions.

## Alpine.js and CSP

The portfolio uses Alpine.js for lightweight frontend interactions such as the mobile navigation menu.

The standard Alpine.js build evaluates expressions dynamically and requires `unsafe-eval` under a strict Content Security Policy.

To avoid weakening `script-src`, the portfolio uses the CSP-compatible Alpine build:

```text
@alpinejs/csp
```

This allows the application to keep:

```text
script-src 'self'
```

without enabling `unsafe-eval`.

## Static Assets

Vite-generated hashed assets under `/build/assets/` are served with:

```text
Cache-Control: public, max-age=31536000, immutable
```

Security headers are also explicitly applied to this Nginx location.

This duplication is intentional because defining `add_header` inside an Nginx location prevents inheritance of `add_header` directives from the parent server block.

## Request Host Preservation

The PHP-FPM configuration explicitly passes the original HTTP Host header:

```nginx
fastcgi_param HTTP_HOST $http_host;
```

Using `$http_host` preserves an explicit request port when present.

This is important for correct URL and Vite asset generation in environments where the application is accessed through a non-standard port, while production HTTPS traffic continues to use the externally supplied host information.

## Verification

Security changes are verified against the production-style Docker image before deployment.

Verification includes:

- Security headers on HTML responses.
- Security headers and immutable caching on Vite assets.
- Content Security Policy without `unsafe-eval`.
- No application-generated CSP violations in a clean browser session.
- Alpine.js mobile navigation functionality.
- English, Lithuanian and Russian routes.
- CV and Service Desk case-study pages.
- PHPUnit test suite.
- Laravel Pint.
- Production Vite build.
- Lighthouse accessibility, best-practices and SEO checks after deployment.

Browser extensions may inject their own scripts, styles or fonts. CSP violations caused exclusively by such extensions are not treated as application CSP failures and are verified against a clean browser profile or Incognito session.
