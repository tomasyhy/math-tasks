<?php


class SpecialPythagoreanTriplet implements TaskInterface
{
    private const TRIPLET_SUM = 1000;

    public function run()
    {
        for ($c = self::TRIPLET_SUM; $c >= 1; $c--) {
            for ($b = $c - 1; $b >= 1; $b--) {
                for ($a = $b - 1; $a >= 1; $a--) {
                    if ($this->meetSumCondition($a, $b, $c) && $this->isPythagoreanTriplet($a, $b, $c)) {
                        return $a * $b * $c;
                    }
                }
            }
        }
    }

    function isPythagoreanTriplet($a, $b, $c)
    {
        if (pow($a, 2) + pow($b, 2) === pow($c, 2)) return true;
        return false;
    }

    function meetSumCondition($a, $b, $c)
    {
        return $a + $b + $c === self::TRIPLET_SUM;
    }
}