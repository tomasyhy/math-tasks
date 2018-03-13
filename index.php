<?php
require_once 'TasksFactory/TaskFactory.php';
$directory = new RecursiveDirectoryIterator('Tasks');
$iterator = new RecursiveIteratorIterator($directory);
$files = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
?>

<ol>
<?php foreach ($files as $file) {
    $pathParts = pathinfo($file[0]);
?>
<li><a href="index.php?task=<?php echo $pathParts['filename'] ?>"><?php echo $pathParts['filename'] ?></a></li>
<?php } ?>
</ol>

<?php if(isset($_GET['task'])) {
    $taskManager = new TaskFactory();
    $startTime = microtime(true);
    echo sprintf('Result: %d', $taskManager->create($_GET['task'])->run());
    $endTime = microtime(true);
    $executionTime = $endTime - $startTime;
    echo '<br>';
    echo sprintf('Execution time: %.2fs', $executionTime);
}

