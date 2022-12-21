# Laravel Nova Country Flag Field

A Laravel Nova field for displaying country flags.

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require ryanito/nova-country-flag
```

## Usage

Add the field to your resource in the ```fields``` method:
```php
use Ryanito\CountryFlag\CountryFlag;

CountryFlag::make('Country')
->withCode($this->country_code)
->withName($this->country_name),
```
