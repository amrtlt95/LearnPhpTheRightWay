<?php

declare(strict_types=1);

namespace App\Models;

use Iterator;
use Traversable;

class Collection implements \IteratorAggregate
{
    public function __construct(
        protected array $items = []
    ) {
    }
    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->items);
    }
}
