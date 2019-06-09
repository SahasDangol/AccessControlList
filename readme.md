<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Acess Control List

ACL stands for Access Control List. ACL roles and permissions are very important if you are making big application in laravel 5.6. this tutorial will explain how to implement User Roles and Permissions(ACL) using spatie/laravel-permission composer package. So basically i will do it from scratch how to create permissions, roles, and users with assign roles etc.

## Installation Process

# Step 1: Clone Repo
   
https://github.com/EkloSahas/AccessControlList.git

# Step 2 : Install dependencies in the project Folder
 composer install

# Step 3 : Generate .env file
cp .env.example .env

# Step 4 : Generate APP_KEY
php artisan key:generate

# Step 5 : Database Setup in env file

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=your_database_name<br>
DB_USERNAME=user<br>
DB_PASSWORD=password

# Step 6 : Migrate and Seed

    #Migrate Tables
        php artisan migrate

    #Seed
        php artisan db:seed


# Step 7 : Run
    We have made one User as Admin through Seed which is,
        username : admin@gmail.com
        password : admin

    <b>#Run</b>
        php artisan serve
