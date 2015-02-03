# Affirm
[![Latest version][ico-version]][link-composer]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Affirm is a simple, no-frills assertion/validation package written for PHP 5.4+. It is a PHP port of [is.js](http://arasatasaygin.github.io/is.js/).

It is quite similar to [Assert](https://github.com/beberlei/assert), and aims to match it.

## Install

Via Composer

``` bash
$ composer require hassankhan/affirm
```

## Usage

First instantiate the class:
```php
$affirm = new Affirm\Affirm()
```

You can use either `Affirm::is()` or `Affirm::are()` to pass in any values:
```php
$affirm->is(25, 50, 75);
$affirm->are(25, 50, 75);
```

Once all values have been passed in, you can use a modifier. By default, Affirm will only return `true` if all values pass the test, you can change this like so:
```php
$affirm->is(25, 50, 75)->any();
```

Then add your test:
```php
$affirm->is(25, 50, 75)->any()->odd();
```

```

Please read the API documentation for a full list of available methods.

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Credits

- [Hassan Khan](https://github.com/hassankhan)
- [All Contributors](https://github.com/hassankhan/affirm/contributors)

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/github/release/hassankhan/affirm.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hassankhan/affirm/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/hassankhan/affirm.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/hassankhan/affirm.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hassankhan/affirm.svg?style=flat-square

[link-composer]: https://github.com/hassankhan/affirm/releases
[link-travis]: https://travis-ci.org/hassankhan/affirm
[link-scrutinizer]: https://scrutinizer-ci.com/g/hassankhan/affirm/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/hassankhan/affirm
[link-downloads]: https://packagist.org/packages/hassankhan/affirm
