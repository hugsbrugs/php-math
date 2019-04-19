# php-math

This librairy provides utilities function to ease math & stats

[![Build Status](https://travis-ci.org/hugsbrugs/php-math.svg?branch=master)](https://travis-ci.org/hugsbrugs/php-math)
[![Coverage Status](https://coveralls.io/repos/github/hugsbrugs/php-math/badge.svg?branch=master)](https://coveralls.io/github/hugsbrugs/php-math?branch=master)

## Install

Install package with composer
```
composer require hugsbrugs/php-math
```

In your PHP code, load library
```php
require_once __DIR__ . '/../vendor/autoload.php';
use Hug\Math\Math as Math;
```

## Usage

Return modulo of a number given a divider
```php
Math::modulo($nb, $divider);
```

Compute Dice Coefficient for 2 given texts
```php
Math::dice($str1 = '', $str2 = '');
```

## Unit Tests

```
phpunit --bootstrap vendor/autoload.php test
```

## Author

Hugo Maugey [visit my website ;)](https://hugo.maugey.fr)