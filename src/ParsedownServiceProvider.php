<?php

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
