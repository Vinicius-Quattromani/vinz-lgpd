<?php

namespace Vinz\Lgpd;

use Illuminate\Support\ServiceProvider;
use Vinz\Lgpd\Http\Controllers\PoliticaPrivacidadeController;

/**
 * Class LgpdServiceProvider
 * @package Thiagoprz\Lgpd
 */
class LgpdServiceProvider extends ServiceProvider
{

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make(PoliticaPrivacidadeController::class);
    }

    /**
     *
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lgpd');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/lgpd'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

}
