<?php

namespace BrianFaust\Parsedown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Parsedown.
 */
class Parsedown extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'parsedown';
    }
}
