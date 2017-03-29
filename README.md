# laravelspeed
Laravel Crud / Admin Generator





# How to install

1. Download

2. Add reference to package in composer.json psr-4

	"psr-4": {
            "App\\": "app/",
            "Muhammadinaam\\Laravelspeed\\": "packages/muhammadinaam/laravelspeed/src"
        }

3. Add service provider in confing/app.php

	Muhammadinaam\Laravelspeed\LaravelspeedServiceProvider::class,



4. Run command > php artisan vendor:publish --tag=laravelspeed --force