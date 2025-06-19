#!/bin/bash

echo "🚀 Starting Deployment..."

# Always run from the directory this script lives in
cd "$(dirname "$0")" || { echo "❌ Failed to cd into script directory"; exit 1; }

# Set HOME if it's not set (helps avoid Git errors in web server environments)
if [ -z "$HOME" ]; then
  export HOME=/tmp
  echo "🛠️  HOME not set — defaulting to /tmp"
fi

# Mark current directory as safe for Git
echo "✅ Marking current directory as a safe Git directory..."
git config --global --add safe.directory "$(pwd)"

# Pull the latest code
echo "⬇️ Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT <- This is the git result"

# Analyze pull result
if [[ "$GIT_OUTPUT" == *"Already up to date."* ]]; then
    echo "✅ No changes were pulled."
elif [[ "$GIT_OUTPUT" == *"Updating"* ]]; then
    echo "✅ Git pull completed with changes."
elif [[ "$GIT_OUTPUT" == *"Permission denied"* || "$GIT_OUTPUT" == *"cannot open '.git/FETCH_HEAD'"* ]]; then
    echo "❌ Git pull failed: Permission denied. Check .git ownership."
    echo "👉 Run: sudo chown -R $(whoami):$(whoami) .git"
    exit 1
else
    echo "⚠️ Git pull output didn’t match known patterns — please check manually."
fi

# Set Laravel permissions
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
