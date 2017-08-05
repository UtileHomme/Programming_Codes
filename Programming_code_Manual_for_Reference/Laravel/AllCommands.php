<!-- To make the server run -->
php artisan serve

<!-- How to create a model along with a migration -->
php artisan make>model Post --migration

<!-- How to make a controller -->
php artisan make:controller PostController

<!-- How to make a resource controller -->
php artisan make:controller PostController --resource

<!-- How to check the routes list -->
php artisan route:list

<!-- Our routes files are in web.php -->

<!-- session data can be changed in confic/sessions.php
  the session file is stored in storage/framework/sessions
  the session time by default is 120 minutes
-->

<!-- Find out how to put all the routes under a middleware in laravel 5.4 -->
