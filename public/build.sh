#!/bin/bash

set -x

# Instalar PHP 
echo "Installing PHP..."

# Composer
echo "Installing Composer..."
composer install

# NPM 
echo "Installing NPM dependencies..."
npm install
npm run prod

# Laravel
echo "Running Laravel post-install..."
php artisan config:cache
php artisan view:cache
php artisan route:cache