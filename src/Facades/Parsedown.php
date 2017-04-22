<?php



declare(strict_types=1);

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
    protected static function getFacadeAccessor(): string
    {
        return 'parsedown';
    }
}
