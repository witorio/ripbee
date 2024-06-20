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