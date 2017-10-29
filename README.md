# Startup Laravel App Boilerplate - (Quickstart)

As a beginner to build a project from scratch can be difficulty and overwhelming simply because 
there are lot of things to keep track of all at once. But more importantly the most projects require
integration of analytics, dynamic forms data, UI and UX elements, and much more. 
And in order to avoid the hassle of having to build your own frontend and admin dashboard for your new project,
I have created a beautful quickstart Laravel Application to speedup your development hassles.
It includes frontend and backend (Admin dashboard) for managing tasks.

Features
--------
- Laravel MVC Project Structure
- Bootstrap 3
- Registration / Login
- CSRF protection
- Laravel Middleware
- Change Password
- Forgot Password
- Reset Password
- Admin Dashboard
- Authentication Quickstart (Laravel Auth)

Getting Started
---------------

#### Cloning The Repository:

# Get the project
git clone https://github.com/tumraja/Startup-Laravel-Middleware.git Startup-Laravel-Middleware

# Change directory
cd Startup-Laravel-Middleware

# Generate application secure key (in .env file)
php artisan key:generate

# Create a database (with mysql)
# And update .env file with database credentials
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_DATABASE=laravelmiddleware
# DB_USERNAME=root
# DB_PASSWORD=secret

# Install Composer dependencies
composer install

# Run your Authentication Quickstart
php artisan make:auth

# Run your migrations
php artisan migrate:refresh --seed

php artisan serve

Resources
-------------------------- 
- [Laravel News](https://laravel-news.com/)
- [Laravel Tutorials](https://laracasts.com/)
- [Laravel Middleware](https://laravel.com/docs/5.5/middleware)
- [Admin Dashboard influenced by Creative Team] (https://www.creative-tim.com/)

Please don't forget to follow me on twitter - https://twitter.com/timmoraja

Thanks!

License
---------------
The MIT License (MIT).
