#!/bin/bash

# Instala dependencias de Composer
composer install --no-dev --optimize-autoloader

# Genera archivo statics.php
php artisan static:generate

# Genera assetos de producción 
npm run production