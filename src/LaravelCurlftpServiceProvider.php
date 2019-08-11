<?php

namespace Yish\LaravelCurlftp;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use VladimirYuldashev\Flysystem\CurlFtpAdapter;

class LaravelCurlftpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        Storage::extend('curl-ftp', function ($app, $config) {
            $adapter = new CurlFtpAdapter($config);

            return new Filesystem($adapter);
        });
    }
}
