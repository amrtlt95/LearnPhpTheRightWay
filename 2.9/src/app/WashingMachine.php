<?php

namespace App;

class WashingMachine extends Appliance
{
    public function __construct(string $brand, protected int $loadSize)
    {
        parent::__construct($brand);
    }

    public function wash(): void
    {
        if ($this->isOn) {
            echo "Washing with {$this->loadSize}kg load";
        } else {
            echo "Turn on first!";
        }
    }

    public function turnOff(): void
    {
        parent::turnOff();
        echo "water filling";
    }
}
