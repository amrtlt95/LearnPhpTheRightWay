<?php

declare(strict_types=1);

namespace App\Exceptions;

class ProductException extends \Exception
{
    // Custom exception for product-related errors
    public static function invalidAmount(): static
    {
        return new static('The amount specified for the product is invalid.');
    }
}
