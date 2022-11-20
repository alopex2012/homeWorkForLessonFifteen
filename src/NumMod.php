<?php
namespace App;
class NumMod
{
    private static $num1 = 2;
    private static $num2 = 3;

    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }
}