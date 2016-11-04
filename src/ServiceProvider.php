<?php

namespace BrianFaust\Parsedown;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Parsedown;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends IlluminateProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('parsedown', function ($app) {
            return new Parsedown();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['parsedown'];
    }
}
