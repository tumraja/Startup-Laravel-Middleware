# Startup Laravel App Boilerplate- Middleware (Quickstart)


Features
--------
- Laravel MVC Project Structure
- Bootstrap 3
- Registration
- CSRF protection
- Laravel Middleware
- Change Password
- Forgot Password
- Reset Password
- Authentication Quickstart

Getting Started
---------------

#### Cloning The Repository:

```bash
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
- [Laravel Daily](http://laraveldaily.com/) 
- [Laravel News](https://laravel-news.com/)
- [Laravel Tutorials](https://laracasts.com/)
- [Laravel Middleware](https://laravel.com/docs/5.5/middleware)

[follow me on twitter](https://twitter.com/timmoraja)!

Thanks!

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
