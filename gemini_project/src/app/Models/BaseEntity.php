<?php

declare(strict_types=1);

namespace App\Models;

abstract class BaseEntity
{
    abstract protected function save(): void;
}
