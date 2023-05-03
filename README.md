<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project's Name

Products Form Module (Módulo de formulario de productos - 2 tablas)

## About the Project

The objective of the Project is to create a form module for a store that sells products, tracking the products and having adittional functionality with the form, it that has two components:

- Client Form
        - It can add a client
        - It can update a client
        - It can search a client
- Product Form
        - It can add a product
        - It can update a product
        - It can delete a product
        - It can search a product

## About the Team

The team is conformed by:

- Carlos Walter Corrales Yucra
- Rodrigo Bernardo Condori Gutierrez

## How to Run the App

1. Download the ZIP file from the project
![alt text](https://github.com/CarlosWCY/Modulo_Formulario_Laravel/tree/main/images/downloadZip.png?raw=true)


2. Having the DataBase running in docker
3. Open de folder of the file in VScode
4. Create a file .env and copy:

        ´´´
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:BzaGSu7IbnzQzLE+9zE4WSJHhvlPCxfQEoLwLKcDQuk=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

        ´´´
5. Go to the folder in the Terminal
6. Write in the terminal the next command

    If you have a database in docker
    ´´´
    npm install && composer update && php artisan db:wipe && php artisan migrate:refresh --seed && npm run build && php artisan serve
    ´´´
    If you don't have a database in docker
    ´´´
    npm install && composer update && npm run build && php artisan serve
    ´´´

7. Go to the browser with ip 127.0.0.1:8000
    ![alt text](https://img.freepik.com/vector-gratis/plantilla-formulario-registro-diseno-plano_23-2147971971.jpg?w=2000)