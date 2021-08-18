<?php

namespace Src\Service;


/**
 * Interface DividerInterface
 * @package Src\Service
 */
interface DividerInterface
{
    public static function calculate(int $value): bool;

    public static function getNameClass(): string;
}
