<?php

namespace classes;

class Transaction
{
    public float $amount;
    public string $description;

    public function __construct(float $amount, string $description)
    {
            $this->amount = $amount;
            $this->description = $description;
    }
    //Inside the same file, write a public method getAmount() that returns the current amount.
    public function getAmount(): float
    {
        return $this->amount;
    }

    //Add a method addTax(float $rate) that increases the amount by that percentage.

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * ($rate / 100);
        return $this;
    }
    //Add another method applyDiscount(float $rate) that decreases the amount by that percentage.
    public function applyDiscount(float $rate): Transaction
    {
         $this->amount -= $this->amount * ($rate / 100);
        return $this;
    }
    //Add a method getDescription() that returns the transaction’s description.
    public function getDescription(): string
    {
        return $this->description;
    }


//Inside the class, add a destructor that prints a message showing the transaction description when the object is destroyed.
    public function __destruct()
    {
        echo "Transaction {$this->description} is being destroyed.\n";
    }
}
