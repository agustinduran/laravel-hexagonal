# Hexagonal Example with Laravel

## Overview
This is a example project implementing a Clean Architecture with Hexagonal, DDD and SOLID principles.

## Author

Agustín Durán

- GitHub: https://github.com/agustineduran
- LinkedIn: https://www.linkedin.com/in/agustineduran/

## Table of contents

- [Tables](#Tables)
- [Technology](#Technology)
- [PreRequisites](#Pre-requisites)
- [Routes](#Routes)
- [Run APP](#Run-APP)
- [Preload data](#Preload-data)
- [Run tests](#Run-tests)
- [Standards applied](#Standards-applied)
- [Deployment](#Deployment)

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

## Technology

* Proggraming languange: PHP 8.*
* App Framework: Laravel 9
* Database engine: MariaDB

## Pre-requisites

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

## Run App

### Run with artisan
```
php artisan serve
```