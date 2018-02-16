<?php

class LargestPalindromeProduct implements TaskInterface
{

    public function run(): int
    {
        $startNumber = 999;
        $palindromeTab = [];
        for ($i = $startNumber; $i >= 0; $i--) {
            for ($j = $startNumber; $j >= 0; $j--) {
                $multiplication = $i * $j;
                if ($this->isPalindrome($multiplication)) {
                    $palindromeTab[] = $multiplication;
                }
            }
        }

        return max($palindromeTab);
    }

    private function isPalindrome(int $number): bool
    {
        $stringNumber = (string)$number;
        if ($stringNumber === strrev($stringNumber)) {
            return true;
        }
        return false;
    }
}