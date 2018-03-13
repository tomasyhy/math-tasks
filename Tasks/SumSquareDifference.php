<?php

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:43
 */
class SumSquareDifference implements TaskInterface
{
    private const MAX_VALUE = 100;

    public function run()
    {
        $sumSquare = 0;
        $sum = 0;
        for($i = 1; $i <= self::MAX_VALUE; $i++) {
            $sumSquare += pow($i, 2);
            $sum += $i;
        }

        return pow($sum, 2) - $sumSquare;
    }
}