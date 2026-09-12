#!/bin/sh
set -e

php artisan config:clear
php artisan migrate --force
php artisan storage:link --force || true
php artisan config:cache
php artisan route:cache

# Certains builds Render ne rendent pas le chemin des vues disponible pendant
# le warm-up. Les vues restent compilées à la demande par Laravel.
if [ -d resources/views ]; then
    php artisan view:cache || echo "Warning: view cache skipped; Laravel will compile views on demand."
else
    echo "Warning: resources/views not found; skipping view cache."
fi

exec apache2-foreground
