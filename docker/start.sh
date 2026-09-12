#!/bin/sh
set -e

php artisan config:clear
php artisan migrate --force
php artisan storage:link --force || true
php artisan config:cache
php artisan route:cache

php artisan view:cache

exec apache2-foreground
