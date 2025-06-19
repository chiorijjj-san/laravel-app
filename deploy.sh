#!/bin/bash

echo "🚀 Starting Deployment..."

# Set fallback HOME for git
if [ -z "$HOME" ]; then
  export HOME=/tmp
  echo "🛠️  HOME not set — defaulting to /tmp"
fi

# Define Laravel project path
PROJECT_PATH="/var/www/laravel-app"

# Enter Laravel project
cd "$PROJECT_PATH" || { echo "❌ Could not cd into $PROJECT_PATH"; exit 1; }

# Mark Git directory as safe
echo "✅ Marking current directory as a safe Git directory..."
git config --global --add safe.directory "$(pwd)"

# Pull the latest code
echo "⬇️ Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

# Git status check
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "✅ No changes were pulled."
elif [[ "$GIT_OUTPUT" == *"Updating"* ]]; then
    echo "✅ Git pull completed with changes."
elif [[ "$GIT_OUTPUT" == *"Permission denied"* ]]; then
    echo "❌ Git pull failed: Permission denied. Check file/folder ownership."
    exit 1
else
    echo "⚠️ Git pull output didn’t match known patterns — check manually."
fi

# Double-check we’re still in the Laravel app folder
cd "$PROJECT_PATH" || { echo "❌ Failed to cd into Laravel project after pull"; exit 1; }

# Ensure essential folders exist
if [ ! -d "storage" ] || [ ! -d "bootstrap/cache" ]; then
  echo "❌ Missing required Laravel folders."
  echo "👉 You might need to run: composer install && php artisan storage:link"
  exit 1
fi

# Set correct permissions
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
