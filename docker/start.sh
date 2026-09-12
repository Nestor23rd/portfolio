#!/bin/sh
set -e

if [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is missing. Add a generated Laravel APP_KEY in Render environment variables."
    exit 1
fi

php artisan config:clear
php artisan migrate --force
php artisan storage:link --force || true
php artisan config:cache
php artisan route:cache

php artisan view:cache

exec apache2-foreground
