<?php

namespace App\Traits;

use DateTimeImmutable;
use DateTimeZone;

trait HasTimestamps
{
    public DateTimeImmutable $createdAt;
    public DateTimeImmutable $updatedAt;

    public function updateTimestamp(): void
    {
        $this->updatedAt = new DateTimeImmutable();
    }

    public function initializeTimestamps(): void
    {
        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
    }
}
