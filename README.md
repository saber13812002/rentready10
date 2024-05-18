<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to start
 - install laravel herd or xampp
 - install git
 - install composer
 - ```composer i```
 - ```php artisan key:gen```
 - ```cp .env.example .env```
 - ```cd /storage/app``` 
 then 
```
 git clone https://github.com/saber13812002/rental-public.git public
 ```
 - ```php artisan st:link```
 - if .env file use sqlite you need to create database.sqlite in database folder
 - ```php artisan migrate```
 - ```php artisan db:seed```
 - ```php artisan serve```

in local env. when you run db:seed create admin user 

admin user for nova:

```admin@admin.com``` 

password:

```admin```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
