# Trademarketapi
Core API Trademarket
##in Lumen PHP Framework using lumen-passport & dingo-api

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

Lumen PHP Framework version 5.4.*

##About

This is simple implementation of [dusterio/lumen-passport](https://github.com/dusterio/lumen-passport) and [dingo/api](https://github.com/dingo/api) inside Lumen PHP Framework.

#### Grants Implemented:
1. Client Credentials
2. Authorization Code
3. Refresh Token

Authorization Code grant is automatically executed after logging in a user in this implementation, so you will not have any authorization approval user interface.

## Installation

Run composer install from the command line
```
composer install
```

Copy file environment .env.example to .env & set database

Run migration from the command line
```
php artisan migrate
```

Install encryption keys and other necessary stuff for Passport
```
php artisan passport:install
```

## Lets enjoy....