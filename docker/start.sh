#!/bin/sh
set -e

if [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is missing. Add a generated Laravel APP_KEY in Render environment variables."
    exit 1
fi

php -r '$key = getenv("APP_KEY"); $decoded = str_starts_with($key, "base64:") ? base64_decode(substr($key, 7), true) : $key; if ($decoded === false || strlen($decoded) !== 32) { fwrite(STDERR, "ERROR: APP_KEY must be a valid Laravel key containing exactly 32 bytes.\n"); exit(1); }'

php artisan config:clear
php artisan migrate --force
php artisan db:seed --class=AdminUserSeeder --force
php artisan storage:link --force || true
php artisan config:cache
php artisan route:cache

php artisan view:cache

exec apache2-foreground
