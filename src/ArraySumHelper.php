<?php

namespace App;

/**
 * Class ArraySumHelper
 * @package App
 */
class ArraySumHelper
{
    /**
     * The static method returns the sum of the array elements - $arr to the power = 1
     * @param array $arr
     * @return float|int
     */
    public static function getSum1(array $arr): float|int
    {
        return self::getSum($arr, 1);
    }

    /**
     * The static method returns the sum of the array elements - $arr to the power = 2
     * @param array $arr
     * @return float|int
     */
    public static function getSum2(array $arr): float|int
    {
        return self::getSum($arr, 2);
    }

    /**
     * The static method returns the sum of the array elements - $arr to the power = 3
     * @param array $arr
     * @return float|int
     */
    public static function getSum3(array $arr): float|int
    {
        return self::getSum($arr, 3);
    }

    /**
     * The static method returns the sum of the array elements - $arr to the power = 4
     * @param array $arr
     * @return float|int
     */
    public static function getSum4(array $arr): float|int
    {
        return self::getSum($arr, 4);
    }

    /**
     * The static method returns the sum of the array elements - $arr to the power = $power
     * @param array $arr
     * @param int $power
     * @return float|int
     */
    private static function getSum(array $arr, int $power): float|int
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}

