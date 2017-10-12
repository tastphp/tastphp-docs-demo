<?php

namespace TastPHP\App\Demo;

use TastPHP\Framework\Service\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('demo', function () {
            return new DemoService();
        });
    }
}