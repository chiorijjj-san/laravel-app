#!/bin/bash

echo "Starting Deployment..."

# Force mark the repo directory Git complains about
echo "Marking /var/www as a safe Git directory"
git config --global --add safe.directory /var/www

# Go to the project directory
cd /var/www/laravel-app || { echo "Failed to cd into laravel-app"; exit 1; }

# Pull latest code
echo "Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

# Check pull status
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "No changes were pulled."
elif [[ "$GIT_OUTPUT" == *"Updating"* ]]; then
    echo "Git pull completed with changes."
else
    echo "Git pull output didn't match known patterns — check manually."
fi

# Set permissions
echo "Setting permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Run Laravel artisan commands
echo "Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "Deployment complete."
