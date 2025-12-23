<?php

// File: src/Models/Product.php
declare(strict_types=1);

namespace App\Models;

use App\Interfaces\ShippableInterface;
use DateTimeImmutable;

class Product extends BaseEntity implements ShippableInterface
{
    use \App\Traits\HasTimestamps;

    // Class Constant (I-103)
    private const TAX_RATE = 0.15;
    private string $id;




    // Constructor (I-104)
    /**
     * @param string $name the product name
     * @param float $price the product price
     * @param int $stock the available stock count
    */
    public function __construct(private string $name, private float $price, private int $stock)
    {
        $this->initializeTimestamps();
        $this->id = uniqid();
    }

    public function getName(): string
    {
        return $this->name;
    }



    // Method for calculation (I-105)
    /**
     * @return float
     */
    public function getFinalPrice(): float
    {
        return $this->price * (1 + static::TAX_RATE);
    }

    public function getAvailabilityStatus(): string
    {
        return $this->stock > 0 ? "Available Now" : "Out of Stock";
    }

    protected function save(): void
    {
        // Implementation for saving the product to a database or file
        echo  "Product data saved to the database.";
    }

    public function getShippingWeight(): float
    {
        // Example implementation, returning a fixed weight for demonstration
        return 5.5; // weight in kg
    }

    /**
     * Reset the id for the cloned object
     * @return void
     */
    public function __clone()
    {
        $this->id = uniqid();
    }

    public function __serialize(): array
    {
        return [
            //id, name, and price, A custom "meta" field (e.g., serialized_at with the current time) that is not a property of the class.</li></ul>
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price,
            "serialized_at" => new DateTimeImmutable(),
            "createdAt" => $this->createdAt,
            "updatedAt" => $this->updatedAt
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->stock = 0;
        $this->createdAt = $data["createdAt"];
        $this->updatedAt = $data["updatedAt"];
    }
}
