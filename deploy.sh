#!/bin/bash

echo "🚀 Starting Deployment..."

# Set HOME if missing (for git)
if [ -z "$HOME" ]; then
  export HOME=/tmp
  echo "🛠️  HOME not set — defaulting to /tmp"
fi

# Go to Laravel project
cd /var/www/laravel-app || { echo "❌ Could not cd into Laravel app"; exit 1; }

# Mark Git directory as safe
echo "✅ Marking current directory as a safe Git directory..."
git config --global --add safe.directory "$(pwd)"

# Pull the latest code
echo "⬇️ Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

# Handle result
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "✅ No changes were pulled."
elif [[ "$GIT_OUTPUT" == *"Updating"* ]]; then
    echo "✅ Git pull completed with changes."
elif [[ "$GIT_OUTPUT" == *"Permission denied"* ]]; then
    echo "❌ Git pull failed: Permission denied. Check .git folder ownership."
    exit 1
else
    echo "⚠️ Git pull output didn’t match known patterns — please check manually."
fi

# Return to Laravel folder in case git reset anything
cd /var/www/laravel-app || { echo "❌ Failed to cd back after git pull"; exit 1; }

# Set permissions
echo "🔐 Setting Laravel storage & cache permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Clear caches
echo "🧹 Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "✅ Deployment complete."
