<?php

declare(strict_types=1);

namespace App;

class TransactionFactory
{
    public static function make($amount, $description)
    {
        return new Transaction($amount, $description);
    }
}
