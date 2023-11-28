# PRAXXYS BACKEND EXAM
## Introduction
Thank you for allowing me to show my skill with this exam! This is what i was able to acomplish with my available time (I just had my first born child this month).

I can say this is very familiar with me for i have been using AdminLTE for around 7 years now, being implemented with or without PHP Framwork.

For this instance, I have used [Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) and Vue from a CDN

## Requirements
PHP **8.1.0** is required to run Laravel 10

Please install [**Composer**](https://getcomposer.org/) to download the PHP libraries

Please install **NPM** to download JS Libraries

## Installation
Create your `.env` file in the root folder and update the database connection accordingly. You may copy `env.example` as template

Run `composer install` to download PHP libaries

Run `npm install` to download JS libaries

Run `php artisan passport:install` to install [**Laravel Passport**](https://laravel.com/docs/10.x/passport) for API Authentication


## Migration and Seeding
Run `php artisan migrate:refresh --seed` to generate and fill database

## Default Admin Account
username:`webmaster`

password:`webmaster`


## Added improvement
### Products Index
Added Image Column

Added Sort Options

### Products Edit
Added option to set primary image

