#!/bin/bash

echo "Starting Deployment..."

# Go to the Laravel project folder
cd /var/www/laravel-app || { echo "❌ Failed to cd into laravel-app"; exit 1; }

# Fix ownership of .git files to avoid Git permission errors
echo "🔧 Fixing .git folder ownership (if needed)..."
chown -R "$(christianjariol_dev):$(christianjariol_dev)" .git 2>/dev/null

# Mark the Git directory as safe
echo "✅ Marking /var/www as a safe Git directory..."
git config --global --add safe.directory /var/www

# Pull the latest code
echo "⬇️ Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

# Check if pull was successful
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "✅ No changes were pulled."
elif [[ "$GIT_OUTPUT" == *"Updating"* ]]; then
    echo "✅ Git pull completed with changes."
elif [[ "$GIT_OUTPUT" == *"Permission denied"* ]]; then
    echo "❌ Git pull failed: Permission denied. Make sure you own the .git folder."
    exit 1
else
    echo "⚠️ Git pull output didn't match known patterns — please check manually."
fi

# Set permissions for Laravel
echo "🔐 Setting Laravel storage & cache permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Clear Laravel caches
echo "🧹 Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "✅ Deployment complete."
