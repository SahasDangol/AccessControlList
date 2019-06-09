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

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=user
DB_PASSWORD=password
