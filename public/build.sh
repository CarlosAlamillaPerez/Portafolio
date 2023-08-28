#!/bin/bash

# Instalar PHP 8.2
...

composer install
npm install
npm run prod

php artisan config:cache
php artisan view:cache 
php artisan route:cache