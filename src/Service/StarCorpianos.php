<?php

namespace Src\Service;


/**
 * Class StarCorpianos
 * @package Src\Service
 */
class StarCorpianos implements DividerInterface
{
    const NAME = 'StarCorpianos';

    /**
     * @param int $value
     * @return bool
     */
    public static function calculate(int $value): bool
    {
        return ((($value % 3) === 0) && (($value % 5) === 0));
    }

    /**
     * @return string
     */
    public static function getNameClass(): string
    {
        return self::NAME;
    }
}
