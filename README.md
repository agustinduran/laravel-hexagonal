# Hexagonal Example with Laravel

## Overview
This is a example project implementing a Clean Architecture with Hexagonal, DDD and SOLID principles.

## Author

Agustín Durán

- GitHub: https://github.com/agustinduran
- LinkedIn: https://www.linkedin.com/in/agustineduran/

## Table of contents

- [Tables](#tables)
- [Hexagonal Architecture](#hexagonal-architecture)
- [Technology](#technology)
- [Pre Requisites](#pre-requisites)
- [How To Install](#how-to-install)
- [Routes](#routes)
- [Run App](#run-app)
- [Run tests](#run-tests)

## Tables

### Users

Column | Type
------ | ----
id | int sequence ( PK )
first_name | string
last_name | string
email | string
password | string
updated_at | datetime
created_at | datetime
deleted_at | datetime

### Tasks
Column | Type
------ | ----
id | int sequence ( PK )
task | string
description | string
user_id | int sequence ( FK Users )
updated_at | datetime
created_at | datetime
deleted_at | datetime

## Hexagonal-Architecture

```scala
$ tree -L 6 src

src
└── Example
    ├── Shared
    │   ├── Application
    │   ├── Domain
    │   │   └── Exceptions
    │   │       └── CustomException.php
    │   └── Infrastructure
    │       └── HandlerException.php
    ├── Task
    │   ├── Application
    │   ├── Domain
    │   │   └── Exceptions
    │   └── Infrastructure
    │       ├── Controllers
    │       ├── Routes
    │       └── Services
    └── User
        ├── Application
        │   ├── Delete
        │   │   └── UserDeleteByIdUseCase.php
        │   └── Find
        │       ├── UserFindAllUseCase.php
        │       └── UserFindByIdUseCase.php
        ├── Domain
        │   ├── Contracts
        │   │   └── UserRepositoryContract.php
        │   ├── Exceptions
        │   │   └── UserException.php
        │   ├── User.php
        │   └── ValueObjects
        │       ├── UserEmail.php
        │       ├── UserFullName.php
        │       ├── UserId.php
        │       ├── UserPassword.php
        │       ├── UserTimestamp.php
        │       └── UserUserName.php
        └── Infrastructure
            ├── Controllers
            │   ├── UserDeleteByIdController.php
            │   ├── UserFindAllController.php
            │   └── UserFindByIdController.php
            ├── Repositories
            │   └── Eloquent
            │       ├── User.php
            │       └── UserRepository.php
            ├── Routes
            │   └── Api.php
            └── Services
                ├── DependencyServiceProvider.php
                └── RouteServiceProvider.php
```

## Technology

* Programming languange: PHP 8
* App Framework: Laravel 9
* Database engine: MariaDB

## Pre requisites

* Laravel 9.* with PHP 8.*
* Composer installed
* Linux/Mac terminal (Or emulated linux on Windows)
* No services running on localhost port 8000 or 3306

## How to install

### Create a new database
```sql
CREATE DATABASE hexagonal_example;
```

### Run migrations
```
php artisan migrate
```

### Run seeders
```
php artisan db:seed
```

## Routes
### Api
```
http://localhost:8000/api/
```

## Run
### Run app
```
php artisan serve
```

### Run tests
```
php artisan test
```