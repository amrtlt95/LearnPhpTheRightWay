<?php

namespace App;

class DishWasher extends Appliance
{
    public function __construct(protected string $model, string $brand, protected string $mode)
    {
        parent::__construct($brand);
    }
    public function washDishes(): void
    {
        if ($this->isOn) {
            echo "Washing dishes in {$this->mode} mode.";
        } else {
            echo "Turn on first!";
        }
    }
}
