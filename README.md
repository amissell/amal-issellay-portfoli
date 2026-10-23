# Amal Issellay — Laravel Portfolio

A responsive single-page portfolio built with Laravel 13, Blade, semantic HTML, custom CSS, and a small vanilla JavaScript file. Profile and project content is edited in `resources/views/portfolio.blade.php`.

## Requirements

- PHP 8.3 or newer with the extensions required by Laravel (including cURL, DOM, Fileinfo, Mbstring, OpenSSL, PDO, Tokenizer, XML, and Ctype)
- Composer 2
- Node.js 20+ and npm (only needed if you choose to add or compile frontend assets; this site currently uses plain local CSS and JavaScript)

## Install and run locally

```sh
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Then open `http://127.0.0.1:8000`. This portfolio does not use a database, contact form, authentication, or Vite build step. The Laravel default SQLite configuration is not needed for the home page.

## Update content

Edit the text and project cards in `resources/views/portfolio.blade.php`. Update page title and metadata in `resources/views/layouts/app.blade.php`. The brand palette is declared at the top of `public/css/portfolio.css` using the three required custom properties. The mobile menu behavior is in `public/js/portfolio.js`.

Project summaries are based on Amal's supplied CV. The Must Négoce Invoices repository link is listed as supplied; other project repositories, live demos, and screenshots were not verified and are intentionally omitted. Cloud and DevOps topics are labeled as learning interests, with no completed projects claimed.

## CV privacy

The supplied CV is not copied into the public web root and there is no CV download link. To offer a download later, add a reviewed copy under `public/files/` only after deciding that you want that document publicly accessible, then add an explicit link in the hero.

## Frontend assets

CSS and JavaScript are served directly from `public/css/portfolio.css` and `public/js/portfolio.js`; no npm packages, external fonts, or icon libraries are required. The typography uses system font fallbacks.

## Deployment

Deploy to any host that supports Laravel 13 and PHP 8.3+. Point the web server document root to this project's `public/` directory (never the project root), configure a production `.env`, set `APP_ENV=production` and `APP_DEBUG=false`, run `php artisan key:generate` for the production environment, and ensure `storage/` and `bootstrap/cache/` are writable by PHP. Install production dependencies with `composer install --no-dev --optimize-autoloader`, then run `php artisan config:cache` and `php artisan route:cache`. Do not commit `.env` or expose the private CV. No public deployment has been performed.
