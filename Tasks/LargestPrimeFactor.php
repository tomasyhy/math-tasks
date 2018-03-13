<?php
require_once 'TaskInterface/TaskInterface.php';

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-22
 * Time: 06:51
 */
class LargestPrimeFactor implements TaskInterface
{
    private const NUMBER = 600851475143;

    public function run()
    {
        for ($divider = 2; $divider < self::NUMBER; $divider++) {
            if (self::NUMBER % $divider === 0 && $this->isPrimeNumber($factor = self::NUMBER / $divider)) {
                return $factor;
            }
        }
    }

    private function isPrimeNumber(int $number)
    {
        for ($i = 2; $i <= floor(sqrt($number)); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
}