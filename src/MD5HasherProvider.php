<?php

namespace Laravist\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // put into ioc for laravel
//        $this->app->bind()  single 里面是一个alias 就是一个别名
        // closure function
        $this->app->singleton('md5hash', function() {
           return new MD5Hasher();
        });
    }
}
