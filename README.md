# atog/phpokemon

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![HHVM][ico-hhvm]][link-hhvm]
[![StyleCI](https://styleci.io/repos/56591718/shield)](https://styleci.io/repos/56591718)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

atog/phpokemon is a PHP 5.5+ wrapper for [PokeAPI](http://pokeapi.co/). This package is compliant with [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md), [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md).

## Install

Via Composer

``` bash
$ composer require atog/phpokemon
```

## Usage

``` php
<?php
require_once 'vendor/autoload.php';

$client = new \Atog\PHPokemon\Client();
$client->pokemon->find('bulbasaur'); // returns Atog\PHPokemon\Models\Pokemon
$client->pokemon->find(2); // returns Atog\PHPokemon\Models\Pokemon
$client->moves->find(15); // returns Atog\PHPokemon\Models\Moves

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email pascal.kleindienst@posteo.de instead of using the issue tracker.

## Credits

- [Pascal Kleindienst][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/atog/phpokemon.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/PascalKleindienst/phpokemon/master.svg?style=flat-square
[ico-hhvm]: https://img.shields.io/hhvm/atog/phpokemon.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/PascalKleindienst/phpokemon.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/PascalKleindienst/phpokemon.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/atog/phpokemon.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/atog/phpokemon
[link-travis]: https://travis-ci.org/PascalKleindienst/phpokemon
[link-hhvm]: http://hhvm.h4cc.de/package/atog/phpokemon
[link-scrutinizer]: https://scrutinizer-ci.com/g/PascalKleindienst/phpokemon/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/PascalKleindienst/phpokemon
[link-downloads]: https://packagist.org/packages/atog/phpokemon
[link-author]: https://github.com/PascalKleindienst
