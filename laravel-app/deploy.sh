#!/bin/bash

echo "Starting Deployment..."

cd /var/www/laravel-app || exit

# Pull latest code
git pull origin master

# Set permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Install dependencies (optional)
composer install --no-interaction --prefer-dist --optimize-autoloader

# Run Laravel commands
php artisan migrate --force
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "Deployment complete."
