#!/bin/bash

echo "Starting Deployment..."

cd /var/www/laravel-app || exit

# Pull latest code
git pull origin master

# Set permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Run Laravel commands
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "Deployment complete."
