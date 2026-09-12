# Déploiement gratuit

## 1. Base PostgreSQL Neon

Créer un projet PostgreSQL sur Neon, puis relever les valeurs de connexion :

- `DB_HOST`
- `DB_PORT` (`5432`)
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

Ne pas utiliser le PostgreSQL gratuit de Render pour les données finales : il expire après 30 jours.

## 2. Service Render

1. Ouvrir Render et choisir **New > Blueprint**.
2. Connecter le dépôt GitHub `Nestor23rd/portfolio`.
3. Sélectionner `render.yaml`.
4. Renseigner les variables marquées `sync: false`.
5. Générer une clé locale avec `php artisan key:generate --show` et la mettre dans `APP_KEY`.
6. Mettre l’URL Render dans `APP_URL`.

Le conteneur lance automatiquement les migrations, le lien storage et les caches Laravel au démarrage.

## 3. Couvertures de projets

Le projet supporte un disque S3-compatible. En local, `PROJECT_MEDIA_DISK=public` utilise `storage/app/public`.

Pour Render, configurer un stockage externe puis remplacer :

```env
FILESYSTEM_DISK=s3
PROJECT_MEDIA_DISK=s3
AWS_ACCESS_KEY_ID=...
AWS_SECRET_ACCESS_KEY=...
AWS_DEFAULT_REGION=...
AWS_BUCKET=...
AWS_ENDPOINT=...
AWS_URL=...
AWS_USE_PATH_STYLE_ENDPOINT=true
```

Ne jamais placer ces valeurs dans Git ou dans `.env.example`.
