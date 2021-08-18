<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use Src\Service\StarCorpianos;


/**
 * Class StarCorpTest
 * @package Test\Service
 */
class StarCorpianosTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [15, true],
            [30, true],
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($val, $expected)
    {
        $this->assertEquals($expected, StarCorpianos::calculate($val));
    }

    public function testGetRule()
    {
        $this->assertEquals('StarCorpianos', StarCorpianos::getNameClass());
    }
}
