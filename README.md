<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project's Name

Products Form Module (Módulo de formulario de productos - 5 tablas)

## About the Project

The objective of the Project is to create a form module for a store that sells products, tracking the products and having adittional functionality with the form, it has two components:

- Client Form
        - It can add a cliente
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

## Requirements for the Project

The next tecnology must be installed:

- Node.js
- Composer
- php8.2
- docker desktop

## How to Run the App

1. Download the ZIP file from the project

    ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/downloadZip.PNG)

2. Open the folder of the file in VScode

    ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/openVScode.PNG)

3. Create a file .env and copy:

    ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/createEnv.PNG)

        
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

        
4. Go to the folder in the Terminal

  ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/goTerminal.PNG)

5. Open the docker desktop

6. Write in the terminal the next command to create the database in docker

  ```
    docker compose up
  ```

7. Write in the terminal the next command

    If you have a database in docker
    ```
      npm install && composer update --ignore-platform-reqs && php artisan db:wipe && php artisan migrate && npm run build && php artisan serve
    ```
    
    If you don't have a database in docker
    
    ```
      npm install && composer update --ignore-platform-reqs && npm run build && php artisan serve
    ```

8. Go to the browser with ip 127.0.0.1:8000

    ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/runningCode.PNG)
    ![alt text](https://raw.githubusercontent.com/CarlosWCY/Modulo_Formulario_Laravel/main/images/indexPage.PNG)