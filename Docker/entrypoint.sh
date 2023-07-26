#!/bin/bash

composer install
npm install

php artisan migrate
php artisan key:generate

npm run build
php artisan serve --port=$PORT --host=0.0.0.0 --env=.env

exec docker-php-entrypoint "$@"