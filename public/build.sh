#!/bin/bash

# Instalar PHP 8.2
add-apt-repository ppa:ondrej/php
apt-get update
apt-get install -y php8.2

# Verificar versión instalada 
php -v

# Instalar extensiones necesarias
apt-get install -y \
  php8.2-common \
  php8.2-cli \
  php8.2-dev \
  php8.2-curl \
  php8.2-mbstring

# Instalar composer
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de Composer
composer install

# Ejecutar comandos de build de Laravel
npm install
npm run build