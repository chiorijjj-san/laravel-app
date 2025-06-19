#!/bin/bash


echo "Starting Deployment..."

# Ensure correct Git access
if [ ! -w .git/FETCH_HEAD ]; then
    echo "🚫 Permission denied: Cannot write to .git/FETCH_HEAD"
    echo "👉 Try: sudo chown -R $(whoami):$(whoami) /var/www"
    exit 1
fi

# Mark safe Git directory
git config --global --add safe.directory /var/www

# Pull latest code
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

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
