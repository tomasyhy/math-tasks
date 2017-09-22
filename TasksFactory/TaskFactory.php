<?php
require_once 'Tasks/LargestPrimeFactor.php';
require_once 'Tasks/EvenFibonacciNumbers.php';
require_once 'Tasks/MultiplesOf3And5.php';
require_once 'FactoryMethod.php';

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:44
 */
class TaskFactory implements FactoryMethod
{
    public function create(string $taskName): TaskInterface
    {
        switch ($taskName) {
            case 'EvenFibonacciNumbers':
                return new EvenFibonacciNumbers();
            case 'MultiplesOf3And5':
                return new MultiplesOf3And5();
            case 'LargestPrimeFactor':
                return new LargestPrimeFactor();
            default:
                throw new \InvalidArgumentException("$taskName is not a valid task name");
        }
    }
}