# Affirm
[![Latest version][ico-version]][link-composer]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Affirm is a simple, no-frills validation package written for PHP 5.5+. It is a PHP port of [is.js](http://arasatasaygin.github.io/is.js/).

Features:
- Uses exceptions by default (sorry, error lovers)

## Install

Via Composer

``` bash
$ composer require hassankhan/affirm
```

## Usage

You can use Affirm in different ways:
```php
Affirm::is();

$affirm = new Affirm()
$affirm->is();

$affirm->_include($string, $substring);

```

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
