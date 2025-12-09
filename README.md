![](https://heatbadger.vercel.app/github/readme/contributte/newrelic-tracy/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/newrelic](https://github.com/contributte/newrelic).
|---|---|

| Composer | [`vrtak-cz/newrelic-tracy`](https://packagist.org/packages/vrtak-cz/newrelic-tracy) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/vrtak-cz/newrelic-tracy) |
| PHP | ![](https://badgen.net/packagist/php/vrtak-cz/newrelic-tracy) |
| License | ![](https://badgen.net/github/license/contributte/newrelic-tracy) |

## Usage

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

## Development

This package was maintained by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

<a href="https://github.com/Vrtak-CZ">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/112567?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for being used this package.
