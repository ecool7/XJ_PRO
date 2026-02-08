# Xinji Website

Laravel 10 website for Xinji company.

## Requirements

- PHP 8.1 or higher
- Composer

## Installation

1. Install dependencies:
```bash
composer install
```

2. Copy environment file:
```bash
# Windows PowerShell
Copy-Item .env.example .env

# Linux/Mac
cp .env.example .env
```

3. Generate application key:
```bash
php artisan key:generate
```

4. Run the development server:
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Pages

- Main (`/`)
- About us (`/about-us`)
- News (`/news`)
- Contacts (`/contacts`)

## Color Scheme

- Green: #22c55e
- Black: #000000
- White: #ffffff

