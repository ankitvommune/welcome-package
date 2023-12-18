<?php

namespace Ankit\WelcomePackage;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class WelcomePackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or services here
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
    }

    public function boot()
    {
        // Load routes
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
