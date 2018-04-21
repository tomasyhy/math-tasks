<?php

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:43
 */
class HighlyDivisibleTriangularNumber implements TaskInterface
{
    private const LIMIT_NUMBER_DIVISORS = 500;

    public function run()
    {
        $triangleNumber = 1;
        for ($i = 2; true; $i++) {
//            $triangleNumber = $this->triangleRecurrence($i);
            $triangleNumber += $i;
            if ($this->hasMoreThen500Dividers($triangleNumber)) return $triangleNumber;
        }
    }

    private function hasMoreThen500Dividers($number)
    {
        $count = 1;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) $count+=2;
            if ($count > self::LIMIT_NUMBER_DIVISORS) return true;
        }
        return false;
    }

    function triangleRecurrence($element) {
        if($element === 1) {
            return 1;
        } else {
            return $element + $this->triangleRecurrence($element-1);
        }
    }


}