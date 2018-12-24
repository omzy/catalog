# Simple Rest API (Products Catalog)

This is a simple Rest API built in [Laravel](https://laravel.com) PHP framework.

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

Simply make a request to an endpoint listed below, using a request type of `application/json`. Appropriate feedback / validation is provided in case of errors, etc.

## Available Endpoints

- GET `/products` (get all products)
- GET `/products/{id}` (get a single product)
- POST `/products` (create a product)
- PUT `/products/{id}` (edit a product)
- DELETE `/products/{id}` (delete a product)
