<?php

declare(strict_types=1);

namespace App\Interfaces;

interface ShippableInterface
{
    public function getShippingWeight(): float;
}
