<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Dynamic Route

This repository contains a Laravel application that demonstrates how to create a server that accepts dynamic URL routing with **GET** request and responds with when a dynamic URL is hit, it shows the **URL and agent string and host**.

This also demonstrates how to create dynamic routing to accept a **POST** request that responds with the body of the post request + the information from the get request.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- PHP >= 8.0 [[Download](https://www.php.net/downloads)]
- composer [[Download](https://getcomposer.org/download/)]

## Installation

1. Clone this repository to your local machine.
2. Navigate to the root directory of the project.
3. Run composer install to install the project dependencies.
5. Generate a new application key by running `php artisan key:generate`.
7. Start the application by running `php artisan serve`.

## Usage

This application allows you to create dynamic routes by defining route parameters in your route definition.  

NOTE:  **csrfToken** is included to manually copy and paste value to POST Request.

### GET Request (Postman)
1. Create dynamic route for **GET** request.
2. Type http://127.0.0.1:8000/ `<your_dynamic_url>`
3. Click Send.
4. Sample response will be like this.
```json
{
    "csrfToken": "7i40pjZw3GKtGEHeMR7CaNJWaAfRNr4vOCHzcPYh",
    "url": "http://127.0.0.1:8000/zesty",
    "agent string": "PostmanRuntime/7.31.3",
    "host": "127.0.0.1:8000"
}
```

### POST Request (Postman)
1. Create dynamic route for **POST** request.
2. Type http://127.0.0.1:8000/ `<your_dynamic_url>`
3. From **Body** tab, select **raw** then include your body in json format. (Example below)
```json
{
    "name": "Kisses",
    "age": 18,
    "email": "kisses@example.com"
}
```
4. Click Send.
5. Sample response will be like this.
```json
{
    "url": "http://127.0.0.1:8000/dynamic-route",
    "agent string": "PostmanRuntime/7.31.3",
    "host": "127.0.0.1:8000",
    "body": {
        "name": "Kisses",
        "age": 18,
        "email": "kisses@example.com"
    }
}
```

## Security Vulnerabilities

If you discover a security vulnerability with this repository, please send an e-mail to Myke Agonia via [myke.agonia@gmail.com](mailto:myke.agonia@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
