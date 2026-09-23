# Déploiement VPS — nestor.africodehub.net

Le DNS doit pointer `nestor.africodehub.net` vers `109.199.103.70` avec un enregistrement A. La configuration Namecheap visible dans la capture correspond à ce sous-domaine.

## 1. Préparer le serveur

```bash
sudo apt update
sudo apt install -y git certbot python3-certbot-nginx
sudo mkdir -p /opt/portfolio
sudo chown -R "$USER":"$USER" /opt/portfolio
cd /opt/portfolio
git clone <URL_DU_DEPOT> .
cp .env.production.example .env
nano .env
```

Dans `.env`, renseigner au minimum `APP_KEY`, `ADMIN_EMAIL`, `ADMIN_PASSWORD`, les paramètres SMTP et un mot de passe PostgreSQL fort. Générer la clé avec :

```bash
docker run --rm -it -w /app -v "$PWD":/app composer:2 php artisan key:generate --show
```

Pour le premier démarrage uniquement, mettre `RUN_DATABASE_SEED=true`. Après le premier démarrage, repasser cette valeur à `false` afin de ne pas réappliquer les données de démonstration.

## 2. Démarrer Laravel et PostgreSQL

```bash
docker compose up -d --build
docker compose ps
docker compose logs -f portfolio
```

Le conteneur Laravel écoute uniquement sur `127.0.0.1:8080`. PostgreSQL et les uploads sont conservés dans des volumes Docker persistants.

## 3. Configurer Nginx

```bash
sudo cp deploy/nginx/nestor.africodehub.net.conf /etc/nginx/sites-available/nestor.africodehub.net
sudo ln -s /etc/nginx/sites-available/nestor.africodehub.net /etc/nginx/sites-enabled/nestor.africodehub.net
sudo nginx -t
sudo systemctl reload nginx
```

## 4. Activer HTTPS

```bash
sudo certbot --nginx -d nestor.africodehub.net
sudo nginx -t
```

Après validation, l’application sera accessible sur :

```text
https://nestor.africodehub.net
```

## Mises à jour

```bash
cd /opt/portfolio
git pull
docker compose up -d --build
```
