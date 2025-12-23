<?php

namespace App\Loggers;

class FileLogger implements Logger
{
    public function log(string $message): void
    {
        echo "Logging to a file: " . $message . PHP_EOL;
    }
}
