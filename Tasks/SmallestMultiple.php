<?php

class SmallestMultiple implements TaskInterface
{

    public function run(): int
    {
        $max = 20;
        $dividers = range(1, $max);

        $i = 1;
        while (true) {
            foreach ($dividers as $divider) {
                if ($i % $divider !== 0) {
                    $i++;
                    continue 2;
                }
            }
            return $i;
        }
    }
}