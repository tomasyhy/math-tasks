<?php

class SummationOfPrimes implements TaskInterface
{
    private const MAX_PRIME = 2000000;

    public function run()
    {
        $primesSum = 0;
        for ($i = 0; $i <= self::MAX_PRIME; $i++) {
            if ($this->isPrime($i)) {
                $primesSum += $i;
            }
        }
        return $primesSum;
    }

    private function isPrime($number)
    {
        if ($number < 2) return false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
}