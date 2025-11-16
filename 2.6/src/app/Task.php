<?php

namespace App;

use App\TaskStatus;
use Exception;

class Task
{
    private string $status = TaskStatus::TODO;
    public function __construct(private string $title)
    {
    }


    public function setStatus(string $status): self
    {
        if (!in_array($status, TaskStatus::ALL)) {
            throw new Exception("Invalid status: $status");
        }
        $this->status = $status;
        return $this;
    }

    public function getSummary(): string
    {
        return "{$this->title} - {$this->status}";
    }
}
