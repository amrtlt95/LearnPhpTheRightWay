<?php

namespace App\Traits;

use DateTimeImmutable;

trait HasTimestamps
{
    private DateTimeImmutable $createdAt;
    private DateTimeImmutable $updatedAt;

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
