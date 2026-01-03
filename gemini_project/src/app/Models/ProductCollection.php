<?php

declare(strict_types=1);

namespace App\Models;

class ProductCollection extends Collection
{
    /**
     * @var Product[]
     */
    protected array $items = [];


    /**
     * @param Product[] $items
     */
    public function __construct(array $items = [])
    {
        return parent::__construct($items);
    }
}
