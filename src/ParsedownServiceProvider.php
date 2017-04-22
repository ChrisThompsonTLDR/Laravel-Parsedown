<?php



declare(strict_types=1);

namespace BrianFaust\Parsedown;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Parsedown;

/**
 * Class ServiceProvider.
 */
class ParsedownServiceProvider extends IlluminateProvider
{
    /**
     * Register the application services.
     */
    public function register(): void
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
    public function provides(): array
    {
        return ['parsedown'];
    }
}
