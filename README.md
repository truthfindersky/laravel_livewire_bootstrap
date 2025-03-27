<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

This project is built using Laravel 12, Livewire, and Bootstrap 5 Admin template (sass) to create a dynamic and interactive web application.

### Scaffolding

```bash
composer create-project laravel/laravel .
composer require laravel/breeze --dev
php artisan breeze:install blade
composer require livewire/livewire
npm install
npm run dev
php artisan serve
http://127.0.0.1:8000/
```

### config/livewire.php

```bash
php artisan livewire:publish --config

remove
'layout' => 'components.layouts.app',
add
'layout' => 'layouts.app',
```

### Bootstrap

```bash
npm install -D sass-embedded

Add Sass file to app.js
import "../sass/app.scss";

resources/views/layouts/app.blade.php and resources/views/layouts/guest.blade.php
@vite(['resources/scss/styles.scss', 'resources/js/app.js'])

vite.config.js
input: ['resources/scss/styles.scss', 'resources/js/app.js'],

Change all .blade.php design from tailwindcss to bootstrap

You can also uninstall tailwindcss
npm uninstall tailwindcss postcss autoprefixer
rm -rf tailwind.config.js postcss.config.js
```
### Migration

```bash
php artisan migrate --seed
```
### Login
![Dashboard Screenshot](public/assets/images/screenshots/login.png)

### Products
<img src="public/assets/images/screenshots/product.png" alt="Dashboard Screenshot" style="border: 1px solid #000;">

