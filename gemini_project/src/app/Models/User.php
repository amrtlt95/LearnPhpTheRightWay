<?php

declare(strict_types=1);

    namespace App\Models;

class User
{
    use \App\Traits\HasTimestamps;

    private string $password;


    /**
     * When calling this constructor, it initializes the timestamps for the user
     */
    public function __construct()
    {
        $this->initializeTimestamps();
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
