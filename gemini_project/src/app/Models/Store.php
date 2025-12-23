<?php

declare(strict_types=1);

namespace App\Models;

use App\Interfaces\LoggerInterface;

class Store
{
    /**
     * @var Product[]
     */
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }


    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /*

    List Management (Display): Implement a public method displayAllProducts() in the Store class. This method must:<ul><li>Use a foreach loop to iterate over the internal $products array.</li><li>For each product object, display its name, the result of calling its getFinalPrice() method, and the result of calling its getAvailabilityStatus() method.</li></ul>

    */

    public function displayAllProducts(): void
    {
        foreach ($this->products as $product) {
            echo "Product Name: " . $product->getName() . "\n";
            echo "Final Price: " . $product->getFinalPrice() . "\n";
            echo "Availability: " . $product->getAvailabilityStatus() . "\n";
            echo "--------------------------\n";
        }
    }

    public function createLogger(): LoggerInterface
    {
        return new class implements LoggerInterface {
            public function log(string $message): void
            {
                echo "[Store Logger] " . $message . PHP_EOL;
            }
        };
    }
}
