# PHP_Laravel10_Lunar

## Overview

PHP_Laravel10_Lunar is a web-based eCommerce platform built using Laravel 10 and the Lunar PHP package.
It provides a ready-to-use setup to manage products, orders, and a store through a modern admin dashboard without writing frontend code.


## Project Purpose

The main goal of this project is to:

- Help developers quickly set up a full-featured eCommerce store using Laravel 10.

- Provide a hands-on example of integrating Lunar PHP with Laravel.

- Serve as a base for further customization, such as adding new product types, custom attributes, or payment gateways.


## How It Works

1. Laravel handles routing, authentication, and backend logic.

2. Lunar provides eCommerce-specific functionality, including:

- Product types, attributes, and collections

- Order management and stock control

- Admin Hub for store management

3. Users can log in to the /hub route to access the admin panel and manage the store.


## Technology Stack

- Backend Framework: Laravel 10

- eCommerce Package: Lunar PHP

- Frontend (Admin): Livewire 2.x (Reactive components)

- Database: MySQL

- Web Server: Built-in PHP server / Apache / Nginx

- Templating: Blade Templates (Laravel default)

- Package Management: Composer



---

FULL STEP-BY-STEP: LARAVEL 10 + Lunar
---


## STEP 1: Create Laravel 10 Project

### Open terminal / CMD and run:

```
composer create-project laravel/laravel:^10.0 PHP_Laravel10_Lunar

```

### Go inside project:

```
cd PHP_Laravel10_Lunar

```

#### Explanation: 

This creates a new Laravel 10 project and navigates into its folder. Your project is now ready for package installation.




## STEP 2: Database Setup

### Open .env and set:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel10_lunar
DB_USERNAME=root
DB_PASSWORD=

```

### Create database in MySQL / phpMyAdmin:

```
Database name: laravel10_lunar

```



## STEP 3: Install Lunar Package

### Run:

```
composer require lunarphp/lunar

```

#### Explanation: 

Adds the Lunar eCommerce package to your Laravel project. Only compatible with Laravel 10




## STEP 4: Install Lunar

### Run:

```
php artisan lunar:install

```

#### Explanation: 

Sets up Lunar’s configuration, routes, and assets in your Laravel project. Ensures no namespace errors occur.



## STEP 5: Run Migrations

### Run:

```
php artisan migrate

```

#### Explanation: 

Creates all necessary database tables for Laravel and Lunar. Make sure your .env database settings are correct.




## STEP 6: Require Specific Lunar Version

### Run:

```
composer require lunarphp/lunar:^0.8.2

```

#### Explanation: 

Ensures the correct Lunar version and dependencies, including Livewire 2.x, are installed properly.




## STEP 7: Reinstall Lunar (optional, safe)

### Run:

```
php artisan lunar:install

```

#### Explanation: 

Safe step to reinstall Lunar in case of missing files or errors. Won’t overwrite your existing data.




## STEP 8: Clear Caches

### Run:

```
php artisan optimize:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

```

#### Explanation: 

Clears all cached configurations and routes. Helps prevent common caching issues.



## STEP 9: Lunar Initial Setup (Admin Hub & Product Attributes)

### After running php artisan lunar:install, you will be prompted to complete initial setup:

```
Setting up initial attributes...
Adding a product type...
Installing Admin Hub...
Publishing assets to public folder...
Create an admin user:

```
### You will be asked:

```
What's your first name?: demo
What's your last name?: demo
What's your email address?: demo123@gmail.com
Enter a password:

```
### Output confirmation:

```
Lunar is now installed 

Please show some love for Lunar by giving us a star on GitHub
 
https://github.com/lunarphp/lunar

```

#### Explanation:

 This sets up product attributes, adds a product type, installs the admin hub, publishes assets, and creates your first admin user.




## STEP 10: Serve your app

### If you’re using the built-in PHP server:

```
php artisan serve

```

### By default, it will be accessible at:

```
http://127.0.0.1:8000

```

## STEP 11: Access Lunar Hub

### Open in your browser:

```
http://127.0.0.1:8000/hub

```



## So you can see this type Output:

### Lunar(Hub) Login Page:


<img width="1829" height="962" alt="Screenshot 2026-02-10 114752" src="https://github.com/user-attachments/assets/b7f33b0f-4f86-497d-b444-f8f1e1550544" />


### Dashboard Page:


<img width="1895" height="967" alt="Screenshot 2026-02-10 114931" src="https://github.com/user-attachments/assets/3547a742-0656-4821-9bca-6c70f9a3e52e" />


### Product(Create) Page:


<img width="1901" height="966" alt="Screenshot 2026-02-10 115135" src="https://github.com/user-attachments/assets/442b28b6-ad10-4a4c-9710-388c3448e4f8" />


### Collection-Group(Create) Page:


<img width="1919" height="960" alt="Screenshot 2026-02-10 115433" src="https://github.com/user-attachments/assets/bca12018-7876-4eb5-8a7f-8665d8ffdd22" />

<img width="1916" height="952" alt="Screenshot 2026-02-10 115443" src="https://github.com/user-attachments/assets/cbad587e-9de4-4d96-a26d-3f7a9ab08518" />

### Add Top level Collection:


<img width="1913" height="954" alt="Screenshot 2026-02-10 115455" src="https://github.com/user-attachments/assets/2a255658-f236-4445-b1c5-bf09e51911f1" />

<img width="1919" height="966" alt="Screenshot 2026-02-10 115517" src="https://github.com/user-attachments/assets/4659e4ed-f9c7-47c0-85f5-cff3ed958e6d" />


### Profile Page:


<img width="1917" height="956" alt="Screenshot 2026-02-10 125030" src="https://github.com/user-attachments/assets/c270a648-8517-4803-bbc6-d4e895d6a08c" />


### In Setting show:

### Attributes:


<img width="1917" height="943" alt="Screenshot 2026-02-10 115801" src="https://github.com/user-attachments/assets/2ca8257f-b821-4b90-9b29-5b275764fcb6" />


### Currencies:


<img width="1913" height="958" alt="Screenshot 2026-02-10 115808" src="https://github.com/user-attachments/assets/5060d0a2-bdd2-4033-a3c2-a143d06e4b74" />


### Customer Groups:


<img width="1915" height="950" alt="Screenshot 2026-02-10 115816" src="https://github.com/user-attachments/assets/8480bd92-9efa-4742-ba21-4e10c8334c5c" />



---

# Project Folder Structure:

```
PHP_Laravel10_Lunar/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   ├── Models/
│   ├── Providers/
│   └── ... (default Laravel app files)
│
├── bootstrap/
│   └── cache/
│
├── config/
│   ├── app.php
│   ├── database.php
│   ├── lunar.php          <-- Lunar config file created after installation
│   └── ... other configs
│
├── database/
│   ├── factories/
│   ├── migrations/         <-- Laravel + Lunar tables
│   └── seeders/
│
├── lang/
│   └── ... translation files
│
├── public/
│   ├── hub/                <-- Lunar Hub assets (JS, CSS)
│   └── ... Laravel public files
│
├── resources/
│   ├── views/
│   │   └── welcome.blade.php
│   ├── js/
│   ├── css/
│   └── ... other resources
│
├── routes/
│   ├── api.php
│   ├── web.php             <-- Laravel routes (includes Lunar routes after installation)
│
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
│
├── tests/
│   └── ... Laravel default tests
│
├── vendor/                 <-- Composer packages (including Lunar)
│
├── .env
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
└── README.md
```
