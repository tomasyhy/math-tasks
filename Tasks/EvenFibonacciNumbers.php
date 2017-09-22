<?php
require_once 'TaskInterface.php';

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:43
 */
class EvenFibonacciNumbers implements TaskInterface
{
    private const MAX_VALUE = 4000000;

    public function run()
    {
        $sum = 0;
        $position = 0;
        while (true) {
            $fibVal = $this->fib($position);
            if ($fibVal > self::MAX_VALUE) break;
            if ($fibVal % 2 === 0) {
                $sum += $fibVal;
            }
            $position++;
        }
        return $sum;
    }

    private function fib(int $position)
    {
        if ($position < 2) {
            return 1;
        } else {
            return $this->fib($position - 1) + $this->fib($position - 2);
        }
    }


}