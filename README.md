# Wordpress API Wrapper in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/darkgoldblade01/wordpress-api-php.svg?style=flat-square)](https://packagist.org/packages/darkgoldblade01/wordpress-api-php)
[![Build Status](https://img.shields.io/travis/com/darkgoldblade01/wordpress-api-php/master.svg?style=flat-square)](https://travis-ci.com/darkgoldblade01/wordpress-api-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/darkgoldblade01/wordpress-api-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/darkgoldblade01/wordpress-api-php)
[![Total Downloads](https://img.shields.io/packagist/dt/darkgoldblade01/wordpress-api-php.svg?style=flat-square)](https://packagist.org/packages/darkgoldblade01/wordpress-api-php)

This package is a PHP wrapper for the [Wordpress.org API](https://codex.wordpress.org/WordPress.org_API).

## Installation

You can install the package via composer:

```bash
composer require darkgoldblade01/wordpress-api-php
```

## Usage

``` php
$wordpressApi = new WordpressApi();

// Core Information
$wordpressApi->core();

// Plugin Information
$wordpressApi->plugin();

// Theme Information
$wordpressApi->theme(); 
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please use the issue tracker.

## Credits

- [Brian Logan](https://github.com/darkgoldblade01)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.