<?php

namespace Src\Service;


/**
 * Class StarCorp
 * @package Src\Service
 */
class StarCorp implements DividerInterface
{
    private const NAME = 'StarCorp';

    /**
     * @param int $value
     * @return bool
     */
    public static function calculate(int $value): bool
    {
        return (($value % 3) === 0);
    }

    /**
     * @return string
     */
    public static function getNameClass(): string
    {
        return self::NAME;
    }
}
