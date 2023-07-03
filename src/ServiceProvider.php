<?php

namespace NioxlanElsevier\Pruebaspkg;

use Illuminate\Support\ServiceProvider as Provider;

final class ServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
        $this->registerRoutes();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        // 
    }

    protected function registerRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }
}