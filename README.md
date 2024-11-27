<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Project Directory Structure

domain-driven-app/
│
├── app/
│   └── Providers/
│       └── AppServiceProvider.php
│
├── config/
│   └── domains.php
│
├── domains/
│   ├── User/
│   │   ├── Controllers/
│   │   │   └── UserController.php
│   │   ├── Models/
│   │   │   └── User.php
│   │   ├── Services/
│   │   │   └── UserService.php
│   │   ├── Repositories/
│   │   │   └── UserRepository.php
│   │   └── Requests/
│   │       └── UserCreateRequest.php
│   │
│   └── Core/
│       ├── Interfaces/
│       │   └── RepositoryInterface.php
│       └── Traits/
│           └── ResponseTrait.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   └── users/
│   │       ├── index.blade.php
│   │       └── create.blade.php
│
└── routes/
    └── web.php

