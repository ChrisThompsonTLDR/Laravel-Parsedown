# Laravel Parsedown

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-parsedown
```

Add the service provider to `config/app.php` in the `providers` array.

``` php
'providers' => [
    // ... Illuminate Providers
    // ... App Providers
    BrianFaust\Parsedown\ServiceProvider::class
];
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

``` php
'aliases' => [
    // ... Illuminate Facades
    'Markdown' => BrianFaust\Parsedown\Facades\Parsedown::class
];
```

## Usage

``` php
Markdown::text('Hello _Parsedown_!') # <p>Hello <em>Parsedown</em>!</p>
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
