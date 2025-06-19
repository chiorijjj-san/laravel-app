#!/bin/bash

echo "Starting Deployment..."

# Change to the directory where this script is located
cd "$(dirname "$0")" || { echo "Failed to change directory"; exit 1; }

# Mark repo as safe
CURRENT_DIR=$(pwd)
git config --global --add safe.directory "$CURRENT_DIR"

# Pull latest code
echo "Pulling latest code from Git..."
GIT_OUTPUT=$(git pull origin master 2>&1)
echo "$GIT_OUTPUT"
echo "$GIT_OUTPUT <- This is the git result"

# Check if pull was successful
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
