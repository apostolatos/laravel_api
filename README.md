<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel simple Application

First of all we need to clone project:

`git clone https://github.com/apostolatos/laravel_api.git`

A folder `\laravel_api` is now created.

`cd laravel_api`

Then install our dependencies:

`composer install`

Now, we need to create a database which is named `laravel_api`

Copy **.env.example**

Change the name with .env and make your own settings in .env file.

- DB_HOST=localhost
- DB_PORT=3306
- DB_DATABASE=laravel_api
- DB_USERNAME=root
- DB_PASSWORD=password

Once the database is created, run the following console commands to install tables.

`php artisan migrate --seed`

Our database is all set!

# Run

`php -S 127.0.0.1:8000 -t public`
