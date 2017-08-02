<?php

/*
 * This file is part of Laravel Parsedown.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Parsedown\Facades;

use Parsedown;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\Parsedown\AbstractTestCase;
use BrianFaust\Parsedown\Facades\Parsedown as Markdown;

class ParsedownTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'parsedown';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Markdown::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Parsedown::class;
    }

    public function testConvertToHtml()
    {
        $result = Markdown::text('Hello _Parsedown_!');

        $this->assertSame('<p>Hello <em>Parsedown</em>!</p>', $result);
    }
}
