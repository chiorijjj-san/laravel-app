#!/bin/bash

echo "Starting Deployment..."

cd /var/www/laravel-app || { echo "Failed to cd into project directory"; exit 1; }

# Pull latest code and display output
echo "Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master)
echo "$GIT_OUTPUT"

# Check if pull was successful
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "No changes were pulled."
else
    echo "Git pull completed with changes."
fi

# Set permissions
echo "Setting permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Run Laravel commands
echo "Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "Deployment complete."
