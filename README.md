# Laravel Nova Country Flag Field

A Laravel Nova field for displaying country flags using [Flagcdn.com](https://flagcdn.com).

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryanito/nova-country-flag.svg?style=flat-square)](https://packagist.org/packages/ryanito/nova-country-flag)
[![Total Downloads](https://img.shields.io/packagist/dt/ryanito/nova-country-flag.svg?style=flat-square)](https://packagist.org/packages/ryanito/nova-country-flag)

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require ryanito/nova-country-flag
```

## Usage

Add the field to your resource in the `fields` method:

```php
use Ryanito\CountryFlag\CountryFlag;

CountryFlag::make('Country')
->withCode($this->country_code)
->withName($this->country_name),
```
