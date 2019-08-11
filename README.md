# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yish/laravel-curlftp.svg?style=flat-square)](https://packagist.org/packages/yish/laravel-curlftp)
[![Build Status](https://img.shields.io/travis/yish/laravel-curlftp/master.svg?style=flat-square)](https://travis-ci.org/yish/laravel-curlftp)
[![Quality Score](https://img.shields.io/scrutinizer/g/yish/laravel-curlftp.svg?style=flat-square)](https://scrutinizer-ci.com/g/yish/laravel-curlftp)
[![Total Downloads](https://img.shields.io/packagist/dt/yish/laravel-curlftp.svg?style=flat-square)](https://packagist.org/packages/yish/laravel-curlftp)

## Installation

You can install the package via composer:

```bash
composer require yish/laravel-curlftp
```

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

### Testing

``` bash
composer test
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

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).