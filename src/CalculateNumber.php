<?php

namespace Src;

use Src\Service\StarCorpianos;
use Src\Service\StarCorp;
use Src\Service\IT;
use Src\Model\Divider;

/**
 * Class CalculateNumber
 * @package Src
 */
class CalculateNumber
{
    /** @var Divider */
    private $dividerModel;

    /**
     * CalculateNumber constructor.
     */
    public function __construct()
    {
        $dividers = [
            new StarCorpianos,
            new StarCorp,
            new IT,
        ];

        $this->dividerModel = new Divider($dividers);
    }

    /**
     * @param int $from
     * @param int $to
     * @return array
     */
    public function start(int $from = 1, int $to = 100): array
    {
        $numbers = range($from, $to);
        $values = $this->mapNumberCalculate($numbers);

        $arrResult = [];

        foreach ($values as $value) {
            if (!is_null($value)) {
                $arrResult[] = $value;
            }
        }
        return $arrResult;
    }

    /**
     * @param array $list
     * @return array
     */
    public function mapNumberCalculate(array $list): array
    {
        return array_map(function (int $val) {
            return $this->verifyCalculate($val);
        }, $list);
    }

    /**
     * @param int $val
     * @return array|null
     */
    public function verifyCalculate(int $val): ?array
    {
        foreach ($this->dividerModel->getDividers() as $divider) {
            if ($divider->calculate($val)) {
                return [$val, $divider->getNameClass()];
            }
        }

        return null;
    }
}
