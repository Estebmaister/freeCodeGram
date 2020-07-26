<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## List of commands to start

Install PHP
Install Composer
Install Node

```sh
composer global require laravel/installer
laravel new freeCodeGram
```

Edit php --init and uncomment extension=fileinfo

```sh
cd freeCodeGram
git init
php artisan serve
^C
composer require laravel/ui
php artisan ui:auth
php artisan ui:vue
npm i && npm run dev
nul >database/database.sqlite
```

Delete the DB\_... lines in .env file
Declare DB_CONNECTION=sqlite in .env file
Edit php --init and uncomment extension=pdo_sqlite

```sh
php artisan migrate
php artisan serve
```

Create a new user
Modified files for add username field
files: register.blade.php, ...create_users_table.php, RegisterController.php

```sh
php artisan tinker
>>> User::all();
>>> exit
php artisan migrate:fresh
```

Create a new user
Modified files for add username field
files: app/User.php

```sh
php artisan tinker
>>> User::all();
>>> exit
php artisan make:controller ProfilesController
```

Edit controller ProfilesController.php and files: app.blade.php, web.php, home.blade.php

```sh
php artisan make:model Profile -m
# Edit ...create_profiles_table.php
php artisan migrate
```

Edit app/User.php and Profile/User.php

```sh
php artisan tinker
>>> $profile = new \App\Profile();
>>> $profile -> title = 'Cool Title';
>>> $profile -> description = 'Description';
>>> $profile -> user_id = 1;
>>> $profile -> save();
>>> $profile -> user;
>>> $user = App\User::find(1);
>>> $user -> profile;
>>> $user -> profile -> url = 'freecodecamp.org';
>>> $user -> push();    # Saves all the changes and relationships modified
>>> exit                # The simple -> doesn't work here
```

Edit ProfilesController.php to method ::findOrFail();

```sh
php artisan make:model Post -m
# Edit ...create_posts_table.php
php artisan migrate
php artisan make:controller PostsController
```

Add methods create and store to PostsController
Add post route "/" for store with PostsController
Add a new post for a user
Verified it in tinker

```sh
php artisan tinker
>>> Post::all();
>>> exit
```

Change the method to store the image, because we are only saving a storage class of the image

```sh
php artisan storage:link
# This command only have to be run once to create a symbolic link
# from "public/storage" to "storage/app/public"
```

Now delete the previous posts with tinker

```sh
php artisan tinker
>>> Post::truncate();
>>> exit
```

Adding a new library to manipulate images

```sh
composer require intervention/image
# The package is automatically discovered but we need
# Edit php.ini and uncomment extension=gd2
```

Adding method edit and update to ProfileController

```sh
php artisan make:policy ProfilePolicy -m Profile
```
