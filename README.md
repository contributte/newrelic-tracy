# [NewRelic](http://newrelic.com) PHP agent integration for [Tracy](http://tracy.nette.org)

[![Build Status](https://img.shields.io/travis/Vrtak-CZ/NewRelic-Tracy.svg?style=flat-square)](https://travis-ci.org/Vrtak-CZ/NewRelic-Tracy)
[![Latest Stable Version](https://img.shields.io/packagist/v/vrtak-cz/newrelic-tracy.svg?style=flat-square)](https://packagist.org/packages/vrtak-cz/newrelic-tracy)
[![Composer Downloads](https://img.shields.io/packagist/dt/vrtak-cz/newrelic-tracy.svg?style=flat-square)](https://packagist.org/packages/vrtak-cz/newrelic-tracy)
[![Dependency Status](https://img.shields.io/versioneye/d/user/projects/540228ffeab62a956f00008f.svg?style=flat-square)](https://www.versioneye.com/user/projects/540228ffeab62a956f00008f)

## Requirements
- Tracy >=2.2.0 (2.2.x support will be removed on 31 Jan 2016)
- PHP >=5.5.0 (5.5.x support will be removed on 10 Jul 2016)

## Installation

```
composer require vrtak-cz/newrelic-tracy
```

### Tracy

```php
$logLevel = array( // default (NULL means default)
    \Tracy\Logger::CRITICAL,
    \Tracy\Logger::EXCEPTION,
    \Tracy\Logger::ERROR,
);
$appName = 'PHP Application'; // default (NULL means default)
$license = 'your_licence_key';

\VrtakCZ\NewRelic\Tracy\Bootstrap::init($logLevel, $appName, $license); // all parameters are optional
```

## License
NewRelic Tracy is licensed under the MIT License - see the LICENSE file for details
