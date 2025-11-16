<?php

    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


    use App\Task;
use App\TaskStatus;

    $task = new Task("Buy milk");
    $task->setStatus(TaskStatus::IN_PROGRESS);
    echo $task->getSummary() . nl2br(PHP_EOL);
    var_dump($task);
    echo nl2br(PHP_EOL);
try {
    $task->setStatus("waiting"); // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . nl2br(PHP_EOL);
}
