<?php

/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-09-21
 * Time: 09:59
 */
interface FactoryMethod
{
    public function create(string $taskName): TaskInterface;
}