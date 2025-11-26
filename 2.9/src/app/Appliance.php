<?php

namespace App;

class Appliance
{
    protected bool $isOn ;

    public function __construct(protected string $brand)
    {

        $this->isOn = false;
    }

    public function turnOn(): void
    {
        $this->isOn = true;
        echo "{$this->brand} appliance is now ON.\n";
    }


    public function turnOff(): void
    {
        $this->isOn = false;
        echo "{$this->brand} appliance is now OFF.\n";
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
}
