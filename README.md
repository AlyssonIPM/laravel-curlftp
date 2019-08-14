# Laravel curl-ftp
This package is simple to provide `vladimir-yuldashev/flysystem-curlftp` facade(wrapper) with laravel. 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yish/laravel-curlftp.svg?style=flat-square)](https://packagist.org/packages/yish/laravel-curlftp)
[![Build Status](https://img.shields.io/travis/Mombuyish/laravel-curlftp/master.svg?style=flat-square)](https://travis-ci.org/Mombuyish/laravel-curlftp)
[![Quality Score](https://img.shields.io/scrutinizer/g/Mombuyish/laravel-curlftp.svg?style=flat-square)](https://scrutinizer-ci.com/g/Mombuyish/laravel-curlftp)
[![Total Downloads](https://img.shields.io/packagist/dt/Mombuyish/laravel-curlftp.svg?style=flat-square)](https://packagist.org/packages/Mombuyish/laravel-curlftp)

## Installation

You can install the package via composer:

```bash
composer require yish/laravel-curlftp
```

## Requirement

Laravel 5.8 or 6.*

## Usage
In your `config/filesystems.php`, adding driver to support.
``` php
'curlftp' => [
    'driver'   => 'curl-ftp',
    'host' => 'ftp.example.com',
    'username' => 'username',
    'password' => 'password',
    
    /** optional config settings */
    'port' => 21,
    'root' => '/path/to/root',
    'utf8' => true,
    'ssl' => true,
    'timeout' => 90,		// connect timeout
    'sslVerifyPeer' => 0, // using 0 is insecure, use it only if you know what you're doing
    'sslVerifyHost' => 0, // using 0 is insecure, use it only if you know what you're doing
    
    /** proxy settings */
    'proxyHost' => 'proxy-server.example.com',
    'proxyPort' => 80,
    'proxyUsername' => 'proxyuser',
    'proxyPassword' => 'proxypassword',
],
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mombuartworks@gmail.com instead of using the issue tracker.

## Credits

- [Yish](https://github.com/Mombuyish)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.