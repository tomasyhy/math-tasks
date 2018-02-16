<?php
require_once 'TasksFactory/TaskFactory.php';
$taskManager = new TaskFactory();
$startTime = microtime(true);
echo sprintf('Result: %d', $taskManager->create('LargestPalindromeProduct')->run());
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo '<br>';
echo sprintf('Execution time: %.2fs', $executionTime);
