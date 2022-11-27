<?php
namespace App;
/**
 * Class NumMod
 * @package App
 */
class NumMod
{
    /**
     * @var int $num1
     */
    private static int $num1 = 2;
    /**
     * @var int $num2
     */
    private static int $num2 = 3;

    /**
     * Static method returns the sum of $num1 and $num2
     * @return int
     */
    public static function getSum(): int
    {
        return self::$num1 + self::$num2;
    }
}