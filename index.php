<?php
require_once 'TasksFactory/TaskFactory.php';
ini_set('max_execution_time', 300);
$taskManager = new TaskFactory();
echo $taskManager->create('LargestPrimeFactor')->run();