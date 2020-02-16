<?php
/**
 * Created by PhpStorm.
 * Author: mickael-dev
 * File: TwigCustomFunctionsTest.php
 * Created: 16/02/2020 00:38
 */

declare(strict_types=1);

namespace App\Tests\Service\Twig;

use Twig\Environment;
use PHPUnit\Framework\TestCase;
use Twig\Loader\LoaderInterface;
use Twig\Test\IntegrationTestCase;
use Twig\Extension\AbstractExtension;
use App\Service\Twig\TwigCustomFunctions;
use PHPUnit\Framework\MockObject\MockObject;

class TwigCustomFunctionsTest extends IntegrationTestCase
{
    /*private $env;

    protected function setUp(): void
    {
        $loader = $this->getMockBuilder(LoaderInterface::class)->getMock();
        $this->env = new Environment($loader);
    }*/

    /*public function testIntervalDate($actual, $expected): void
    {
        $extension = new TwigCustomFunctions();
        $this->assertEquals($expected, $extension->dateIntervaleFunction($actual));
    }
    
    public function dateProvider(): array
    {
        return [
            ['1 months', new \DateInterval('P1M')],
            ['2 weeks', new \DateInterval('P2W')],
        ];
    }*/

    public function getExtensions(): array
    {
        return [
            new TwigCustomFunctions()
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getFixturesDir(): string
    {
        return __DIR__ . '/Fixtures/';
    }
}
