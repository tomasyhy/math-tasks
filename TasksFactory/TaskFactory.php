<?php
$directory = new RecursiveDirectoryIterator('Tasks');
$iterator = new RecursiveIteratorIterator($directory);
$files = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($files as $file) {
    require_once $file[0];
}
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
        return new $taskName();
    }
}