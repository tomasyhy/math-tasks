<?php
require_once 'TaskInterface.php';

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:43
 */
class PrimeNumber implements TaskInterface
{
    private const LAST_PRIME = 10001;

    public function run()
    {
        $primeCount = 0;
        for ($i=0; true; $i++) {
            if($this->isPrime($i)) {
                $primeCount++;
                if($primeCount === self::LAST_PRIME) return $i;
            }
        }
    }

    private function isPrime($number) {
        if($number < 2) return false;
        for($i = 2; $i <= sqrt($number); $i++) {
            if($number%$i === 0) {
                return false;
            }
        }
        return true;
    }
}