<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use Src\Service\IT;


/**
 * Class ITTest
 * @package Test\Service
 */
class ITTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, true],
            [10, true],
            [15, true],
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($val, $expected)
    {
        $this->assertEquals($expected, IT::calculate($val));
    }

    public function testGetRule()
    {
        $this->assertEquals('IT', IT::getNameClass());
    }
}
