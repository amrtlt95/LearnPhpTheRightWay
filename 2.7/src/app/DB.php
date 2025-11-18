<?php

declare(strict_types=1);

namespace App;

class DB
{
    private static ?DB $instance = null;
    private function __construct(array $config)
    {
        // Initialize the database connection using the provided configuration
        echo "Database created";
    }

    public static function getInstance(array $config): DB
    {
        if (self::$instance === null) {
            self::$instance = new DB($config);
        }
            return self::$instance;
    }
}
