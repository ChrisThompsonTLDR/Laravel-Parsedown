<?php



declare(strict_types=1);

namespace BrianFaust\Tests\Parsedown\Facades;

use BrianFaust\Parsedown\Facades\Parsedown as Markdown;
use BrianFaust\Tests\Parsedown\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use Parsedown;

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
