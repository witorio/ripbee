# Splikado
Sail Docker on MacOs

    ./vendor/bin/sail up
Sail Migrate on MacOs

    ./vendor/bin/sail artisan  migrate
Sail NPM on MacOs

    ./vendor/bin/sail npm install
    ./vendor/bin/sail npm run  dev
    

## First time setup

Create **.env** file

Configure Docker

    docker run  --rm  \
    -u "$(id -u):$(id -g)"  \
    -v "$(pwd):/var/www/html"  \
    -w /var/www/html  \
    laravelsail/php83-composer:latest \
    composer install  --ignore-platform-reqs


OTHER METHOD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Local env URLs
http://localhost:8001/ - adminer


## Initial requirements

Installed the following services:
- Docker or Podman
- php 8.3
- composer
- alias 'sail'


## Set alias "sail"
Edit file .zshrc and add to end:

```
code ~/.zshrc
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
source ~/.zshrc
```
Restart shell or paste in termnal:
```
source ~/.zshrc
```

## Clone dev repository

```
git clone --branch dev git@git.umw.edu.pl:webmasterka/ozika.git
```

## Create environment file
```
cp .env.example .env
```

## Install php dependencies
```
(php|php8.3) composer install
```

## Generate unique laravel key
```
(php|php8.3) artisan key:generate
```

## Run Sail (and create container if not exists)
```
sail up -d
```

## Update php dependencies with php build-in container
```
sail composer install
```

## Database migration
```
sail artisan migrate
```

## Install npm packages
```
sail npm install

```

## Build for development
```
sail npm run dev
```

## Shutdown Sail
```
sail down
```
