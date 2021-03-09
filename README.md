# [NewRelic](http://newrelic.com) PHP agent integration for [Tracy](http://tracy.nette.org)

> Deprecated, use [contributte/newrelic](https://github.com/contributte/newrelic).

-----

[![Build Status](https://img.shields.io/travis/Vrtak-CZ/NewRelic-Tracy.svg?style=flat-square)](https://travis-ci.org/Vrtak-CZ/NewRelic-Tracy)
[![Latest Stable Version](https://img.shields.io/packagist/v/vrtak-cz/newrelic-tracy.svg?style=flat-square)](https://packagist.org/packages/vrtak-cz/newrelic-tracy)
[![Composer Downloads](https://img.shields.io/packagist/dt/vrtak-cz/newrelic-tracy.svg?style=flat-square)](https://packagist.org/packages/vrtak-cz/newrelic-tracy)

## Requirements
- Tracy >=2.4
- PHP >=7.1

## Installation

```bash
composer require vrtak-cz/newrelic-tracy
```

### Tracy

```php
$logLevel = [ // default (NULL means default)
    \Tracy\Logger::CRITICAL,
    \Tracy\Logger::EXCEPTION,
    \Tracy\Logger::ERROR,
];
$appName = 'PHP Application'; // default (NULL means default)
$license = 'your_licence_key';

\VrtakCZ\NewRelic\Tracy\Bootstrap::init($logLevel, $appName, $license); // all parameters are optional
```

## License
NewRelic Tracy is licensed under the MIT License - see the LICENSE file for details
