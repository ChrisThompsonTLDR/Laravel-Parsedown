<?php

namespace BrianFaust\Tests\Parsedown;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use BrianFaust\Parsedown\ServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ServiceProvider::class;
    }
}
