<?php
require_once 'TaskInterface.php';
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:43
 */
class MultiplesOf3And5 implements TaskInterface
{
    private const MAX_VALUE = 999;

    public function run()
    {
        $sum = 0;
        for ($i = 0; $i <= self::MAX_VALUE; $i++) {
            if($i%3 === 0 || $i%5 === 0) {
                $sum += $i;
            }
        }
        return $sum;
    }
}