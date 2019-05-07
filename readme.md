# Simple REST API (Products Catalog)

This is a very basic REST API built in [Laravel](https://laravel.com) PHP framework. It uses JWT auth for authenticated requests.

## Requirements

1. PHP `>= 7.1.3`
2. MySQL `>= 5.6`

## Installation Instructions

1. Clone the repo (`git clone...`)
2. Run `composer install` to install the application dependencies
3. Create a copy of `.env.example` and save it as `.env`
3. Create a database and enter the database credentials in the `.env` file
3. Run `php artisan migrate` to create the database tables

## Usage Instructions

Simply make a request to an endpoint listed below (you may need to include an `Accept` header with the value `application/json` with your request).

In order to call these endponts, you will need to send an authorization header along with your request.

To get your token, simply login at `/api/user/login` (or create an account at `/api/user/register`). Then include the returned access token as a `Bearer` token in your request.

## Available Endpoints

- GET `/api/products` (get all products)
- GET `/api/products/{id}` (get a single product)
- POST `/api/products` (create a product)
- PUT `/api/products/{id}` (edit a product)
- DELETE `/api/products/{id}` (delete a product)

Appropriate feedback / validation is provided in case of errors, etc.
