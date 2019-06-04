# Laravel Parsedown

[![Build Status](https://img.shields.io/travis/artisanry/Parsedown/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Parsedown)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/parsedown.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Parsedown.svg?style=flat-square)](https://github.com/artisanry/Parsedown/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Parsedown.svg?style=flat-square)](https://packagist.org/packages/artisanry/Parsedown)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/parsedown
```

## Usage

``` php
Markdown::text('Hello _Parsedown_!') # <p>Hello <em>Parsedown</em>!</p>
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
