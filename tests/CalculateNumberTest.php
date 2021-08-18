<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\CalculateNumber;
use Src\Service\IT;
use Src\Service\StarCorp;
use Src\Service\StarCorpianos;


/**
 * Class CalculateNumber
 * @package Src
 */
class CalculateNumberTest extends TestCase
{
    public function emptyReplaceProvider()
    {
        return [
            [1, null],
            [2, null],
            [4, null],
            [7, null],
        ];
    }

    /**
     * @dataProvider emptyReplaceProvider
     */
    public function testVerifyCalculateEmpty($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderStarCorp()
    {
        return [
            [3, [3, StarCorp::getNameClass()]],
            [9, [9, StarCorp::getNameClass()]]
        ];
    }

    /**
     * @dataProvider replaceProviderStarCorp
     */
    public function testVerifyCalculateStarCorp($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderIT()
    {
        return [
            [5, [5, IT::getNameClass()]],
            [10, [10, IT::getNameClass()]]
        ];
    }

    /**
     * @dataProvider replaceProviderIT
     */
    public function testVerifyCalculateIT($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderStarCorpianos()
    {
        return [
            [15, [15, StarCorpianos::getNameClass()]],
            [30, [30, StarCorpianos::getNameClass()]]
        ];
    }

    /**
     * @dataProvider replaceProviderStarCorpianos
     */
    public function testVerifyCalculateStarCorpianos($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderNumberArray()
    {
        return [
            [
                1,
                10,
                [
                    0 => [3, StarCorp::getNameClass()],
                    1 => [5, IT::getNameClass()],
                    2 => [6, StarCorp::getNameClass()],
                    3 => [9, StarCorp::getNameClass()],
                    4 => [10, IT::getNameClass()]
                ]
            ]
        ];
    }

    /**
     * @dataProvider replaceProviderNumberArray
     *
     * @param $expected
     */
    public function testStartNumberArray($from, $to, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->start($from, $to));
    }

    public function replaceProviderRangeArray()
    {
        return [
            [
                range(1, 10),
                [
                    0 => null,
                    1 => null,
                    2 => [3, StarCorp::getNameClass()],
                    3 => null,
                    4 => [5, IT::getNameClass()],
                    5 => [6, StarCorp::getNameClass()],
                    6 => null,
                    7 => null,
                    8 => [9, StarCorp::getNameClass()],
                    9 => [10, IT::getNameClass()]
                ]
            ]
        ];
    }

    /**
     * @dataProvider replaceProviderRangeArray
     */
    public function testNumberCalculateArray($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->mapNumberCalculate($val));
    }
}
