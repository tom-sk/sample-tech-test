# Sampl tech Test

Steps to run project:

This project was developed using laravel [sail](https://laravel.com/docs/10.x/sail#main-content) and [docker](https://www.docker.com/).

- create .env from .env.example
- Run following commands:
- `composer install`
- `npm install && npm run dev`
- `php artisan migrate` OR `sail artisan migrate`
- `php artisan serve` OR `./vendor/bin/sail up`
- `php artisan test`

# Third party libraries used
- [Laravel Postcodes](https://github.com/JustSteveKing/LaravelPostcodes) - A wrapper for the postcodes.io API
- [Pest](https://pestphp.com/docs/announcing-pest2) - Used for writing tests
