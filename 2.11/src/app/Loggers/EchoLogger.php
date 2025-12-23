<?php

namespace App\Loggers;

class EchoLogger implements Logger
{
    public function log(string $message): void
    {
        echo "Echoing log message: " . $message . PHP_EOL;
    }
}
