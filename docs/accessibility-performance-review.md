# Accessibility & Performance Review

## Overview

This document summarizes the accessibility and performance review performed for the production version of the Kotov Portfolio.

**Production website:** https://kotov.lt

The review covered:

- Lighthouse performance and accessibility audits
- Frontend JavaScript usage
- Keyboard navigation and focus visibility
- Semantic HTML and heading hierarchy
- Responsive behavior
- Document language for all supported locales
- Browser console errors
- Production frontend assets
- Layout stability
- Automated regression checks

## Audit Environment

The final Lighthouse audit was performed against the production website using:

- Lighthouse 13.4.1
- Mobile emulation
- Moto G Power
- Slow 4G throttling
- Initial page load
- Clean Chrome profile without browser extensions

Using a clean browser profile was important because an earlier audit was affected by browser extensions. That audit reported an accessibility issue involving an injected `button.send` element that did not exist in the application source.

After repeating the audit in a clean Chrome profile, the application received an Accessibility score of 100.

## Initial Performance Review

The clean production audit before frontend optimization produced the following results:

| Metric | Result |
| --- | ---: |
| Performance | 87 |
| Accessibility | 100 |
| Best Practices | 100 |
| SEO | 100 |
| First Contentful Paint | 1.6 s |
| Largest Contentful Paint | 1.7 s |
| Total Blocking Time | 480 ms |
| Cumulative Layout Shift | 0 |
| Speed Index | 1.9 s |

The main actionable frontend finding was unnecessary JavaScript.

The production JavaScript bundle transferred approximately **38.4 KiB**, while Lighthouse estimated approximately **27 KiB** as unused JavaScript.

Investigation showed that the default Laravel frontend bootstrap was importing Axios even though the portfolio did not perform Axios-based HTTP requests.

## Investigation

The original frontend entry point imported Laravel's default bootstrap file:

```js
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
```

The bootstrap file imported Axios globally:

```js
import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```

Axios was not used anywhere by the portfolio application.

Alpine.js, however, is required for the responsive mobile navigation.

## Implemented Improvement

The unused Axios dependency and Laravel Axios bootstrap were removed.

The frontend entry point was reduced to:

```js
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
```

The following changes were made:

- Removed the Axios dependency from `package.json`
- Updated `package-lock.json`
- Removed `resources/js/bootstrap.js`
- Removed the bootstrap import from `resources/js/app.js`
- Kept Alpine.js for the responsive navigation
- Explicitly initialized Alpine with `Alpine.start()`

The application was rebuilt and regression-tested before deployment.

## Results After Optimization

After deployment, a new Lighthouse audit was performed using the same clean browser environment.

| Metric | Before | After | Change |
| --- | ---: | ---: | ---: |
| First Contentful Paint | 1.6 s | 1.4 s | -0.2 s |
| Largest Contentful Paint | 1.7 s | 1.5 s | -0.2 s |
| Total Blocking Time | 480 ms | 230 ms | -250 ms |
| Cumulative Layout Shift | 0 | 0 | No change |
| Speed Index | 1.9 s | 1.5 s | -0.4 s |
| JavaScript transfer size | 38.4 KiB | 19.5 KiB | ~49% reduction |

The JavaScript transfer size was reduced by approximately half.

The `Reduce unused JavaScript` Lighthouse audit passed after the optimization.

JavaScript execution time was reduced to approximately **0.1 s**, while total main-thread work decreased to approximately **1.4 s**.

The final automated quality scores remained:

| Category | Score |
| --- | ---: |
| Accessibility | 100 |
| Best Practices | 100 |
| SEO | 100 |

## Accessibility Review

Automated Lighthouse checks were supplemented with manual accessibility testing.

### Keyboard Navigation

The production website was tested using keyboard navigation without a mouse.

Verified:

- Interactive elements can be reached using `Tab`
- Focus order follows the visual structure of the page
- Focus states are visibly identifiable
- Links can be activated using the keyboard
- Language navigation is keyboard accessible
- Mobile navigation can be focused and operated using the keyboard
- No focus traps were observed

### Semantic HTML

The application layout uses semantic landmark elements:

- `header`
- `nav`
- `main`
- `footer`

The primary portfolio pages each contain a single `h1`.

Subsequent content follows a consistent `h2` and `h3` hierarchy.

The following pages were reviewed:

- Home
- CV
- Service Desk case study

No significant heading hierarchy issues were found.

### Document Language

The production HTML document language was verified for every supported locale:

```text
https://kotov.lt     -> lang="en"
https://kotov.lt/lt  -> lang="lt"
https://kotov.lt/ru  -> lang="ru"
```

This provides the correct language information to browsers and assistive technologies.

## Responsive Review

The main production pages were manually reviewed across mobile, tablet and desktop viewport sizes.

Pages reviewed:

- Home
- CV
- Service Desk case study

Representative viewport sizes included:

- 375 × 667
- 390 × 844
- 768 × 1024
- 1440 × 900

No significant horizontal overflow, content clipping, navigation issues or broken layouts were observed.

## Layout Stability

The final Lighthouse audit reported:

```text
Cumulative Layout Shift: 0
```

No significant unexpected layout shifts were observed during manual testing.

## Browser Console Review

Production pages were checked using Chrome DevTools after hard reloads.

The main English, Lithuanian and Russian pages were reviewed.

No application-related browser console errors were observed.

## Production Asset Review

The final Lighthouse audit measured a total page transfer size of approximately **67 KiB**.

The main JavaScript asset transferred approximately **19.5 KiB** after removing Axios.

The generated Vite assets are minified and content-hashed.

The frontend therefore remains intentionally small, with JavaScript limited to functionality actually required by the portfolio.

## HTTP Caching and Compression

Production response headers were inspected separately.

The current Vite JavaScript and CSS assets do not receive explicit long-lived browser cache headers.

Lighthouse estimated approximately **25 KiB** of potential repeat-visit savings from improved asset cache lifetimes.

The main HTML response also does not currently use response compression.

These findings were not considered critical for the current portfolio because:

- Largest Contentful Paint is approximately 1.5 s
- Cumulative Layout Shift is 0
- Total page transfer size is approximately 67 KiB
- Lighthouse observed a server response time of approximately 218 ms
- Static frontend assets are already small and content-hashed

## Future Infrastructure Improvement

The current Railway deployment runs Laravel using:

```text
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
```

A future infrastructure improvement can replace the Laravel built-in server with a dedicated production web server such as Nginx or Caddy together with PHP-FPM.

That setup can provide:

- gzip or Brotli compression
- long-lived immutable caching for content-hashed Vite assets
- production-oriented static file serving
- more explicit control over HTTP response headers

This improvement is intentionally kept separate from the current accessibility and performance review because it changes the production serving architecture rather than application-level frontend behavior.

## Regression Verification

After the frontend optimization, the project was verified with:

```bash
./vendor/bin/sail artisan test
./vendor/bin/sail pint --test
npm run build
```

All checks passed.

The deployed application was then manually verified on the production domain.

## Summary

The review identified unnecessary frontend JavaScript as the primary actionable performance issue.

Removing the unused Axios dependency reduced the JavaScript transfer size by approximately **49%** and reduced Total Blocking Time from **480 ms to 230 ms** while preserving application functionality.

The production portfolio now has:

- Accessibility score of 100
- Best Practices score of 100
- SEO score of 100
- 1.5 s Largest Contentful Paint
- 0 Cumulative Layout Shift
- Significantly reduced Total Blocking Time
- Approximately half the previous JavaScript transfer size
- Keyboard-accessible navigation
- Visible keyboard focus states
- Correct document languages for EN, LT and RU
- Semantic page structure
- Responsive layouts across common viewport sizes
- No observed application-related browser console errors
- Passing automated tests, formatting checks and production frontend build

Remaining caching and compression opportunities are infrastructure-level improvements and can be addressed separately as part of a future production web server upgrade.