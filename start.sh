#!/bin/bash

# Railway startup script for Tijaniyah Muslim Pro
echo "Starting Tijaniyah Muslim Pro..."

# Set proper permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Generate key if not exists
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate
fi

# Run migrations if database is available
if [ ! -z "$DB_HOST" ]; then
    echo "Running database migrations..."
    php artisan migrate --force
fi

# Start the application
echo "Starting Laravel server..."
php artisan serve --host=0.0.0.0 --port=$PORT
