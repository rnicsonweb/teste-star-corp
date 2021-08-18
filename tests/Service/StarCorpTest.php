<?php
namespace Test\Service;

use PHPUnit\Framework\TestCase;
use Src\Service\StarCorp;


/**
 * Class StarCorpTest
 * @package Test\Service
 */
class StarCorpTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true]
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testIsValid($val, $expected)
    {
        $this->assertEquals($expected, StarCorp::calculate($val));
    }

    public function testGetRule()
    {
        $this->assertEquals('StarCorp', StarCorp::getNameClass());
    }
}
