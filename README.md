<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# E-Commerce Application

## About the Project

This is a comprehensive e-commerce application built using the Laravel framework. It includes a variety of features such as product listing, user authentication, shopping cart, order management, and payment integration.

## Features

- User authentication and authorization
- Product listing and detailed view
- Shopping cart functionality
- Order management
- Admin panel for managing products and orders

## Getting Started

These instructions will help you get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL or any other database supported by Laravel

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/akmaalll/e-commerce.git
    cd e-commerce
    ```

2. **Install dependencies:**

    ```bash
    composer install or composer update
    ```

3. **Copy the `.env.example` file to `.env` and modify the environment variables:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other necessary configurations.

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database (optional):**

    ```bash
    php artisan db:seed

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

## Usage

You can register a new user or log in with existing credentials. Once logged in, you can browse products, add them to your cart, and proceed to checkout. The admin panel is accessible to users with admin privileges, allowing them to manage products and orders.

## Contributing

Thank you for considering contributing to this project! Please read the [contribution guide](https://laravel.com/docs/contributions) for details on our code of conduct and the process for submitting pull requests.

## Security Vulnerabilities

If you discover a security vulnerability, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
