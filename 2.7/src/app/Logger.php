<?php

declare(strict_types=1);

namespace App;

class Logger
{
    public static function info($message)
    {
        echo "[INFO] $message<br>";
    }
}
