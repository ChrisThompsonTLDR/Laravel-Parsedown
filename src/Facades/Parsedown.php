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
