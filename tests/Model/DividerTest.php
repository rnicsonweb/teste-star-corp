<?php

namespace Test\Model;

use PHPUnit\Framework\TestCase;
use Src\Model\Divider;
use Src\Service\IT;
use Src\Service\StarCorp;
use Src\Service\StarCorpianos;

/**
 * Class DividerTest
 * @package Test\Model
 */
class DividerTest extends TestCase
{
    public function replaceProvider()
    {
        return [
            [[new StarCorpianos, new StarCorp, new IT], [new StarCorpianos, new StarCorp, new IT]]
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testGetDividers($val, $expected)
    {
        $divider = new Divider($val);
        $this->assertEquals($expected, $divider->getDividers());
    }
}
