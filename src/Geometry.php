<?php

namespace App;

/**
 * Class Geometry
 * @package App
 */
class Geometry
{
    /**
     * @var float $pi
     */
    private static float $pi = 3.1415926535;

    /**
     * Static method returns the area of circle with a radius - $radius
     * @param float $radius
     * @return float
     */
    public static function getCircleSquare(float $radius): float
    {
        return self::$pi * $radius * $radius;
    }

    /**
     * Static method returns circumference with radius - $radius
     * @param float $radius
     * @return float
     */
    public static function getCircleCircuit(float $radius): float
    {
        return 2 * self::$pi * $radius;
    }

    /**
     * Static method returns volume of sphere with radius - $radius
     * @param float $radius
     * @return float
     */
    public static function getSphereVolume(float $radius): float
    {
        return 4 / 3 * self::$pi * $radius ** 3;
    }
}
