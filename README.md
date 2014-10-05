# [NewRelic](http://newrelic.com) PHP agent integration for [Tracy](http://tracy.nette.org)

[![Latest Stable Version](https://poser.pugx.org/Vrtak-CZ/NewRelic-Tracy/version.png)](https://packagist.org/packages/nella/simple-hash-authenticator)
[![Composer Downloads](https://poser.pugx.org/Vrtak-CZ/NewRelic-Tracy/d/total.png)](https://packagist.org/packages/vrtak-cz/newrelic-tracy)
[![Dependency Status](https://www.versioneye.com/user/projects/540228ffeab62a956f00008f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/540228ffeab62a956f00008f)

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
NewRelic Nette is licensed under the MIT License - see the LICENSE file for details
