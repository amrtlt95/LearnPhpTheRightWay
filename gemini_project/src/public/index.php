<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Product;
use App\Models\AdminUser;
use App\Interfaces\PaymentProcessorInterface;
use App\Exceptions\ProductException;

// $product1 = new Product("HP zbook 17 g1", 50, 0);
// $product2 = new Product("HP zbook 17 g2", 100, 3000);
// $product3 = new Product("HP zbook 17 g4", 300, 10000);

// $store = new App\Models\Store();
// $store->addProduct($product1);
// $store->addProduct($product2);
// $store->addProduct($product3);

// $store->createLogger()->log("Displaying all products in the store:");
// $store->displayAllProducts();


// // $admin = new AdminUser();
// // $admin->setPassword("securepassword123");




// /*
// Verification: In your main execution file (public/index.php):<ul><li>

// Instantiate a Product object and a User object.</li><li>
// Call updateTimestamp() on both objects.</li><li>
// Demonstrate that both objects, despite their different inheritance paths, successfully possess and execute the timestamp methods from the shared Trait.</li></ul>
// */


// // $product = new Product("Sample Product", 100.0, 50);
// // $user = new AdminUser();

// // sleep(1); // Sleep for a second to see different timestamps


// // $product->updateTimestamp();
// // sleep(1); // Sleep for a second to see different timestamps
// // $user->updateTimestamp();


// // echo "Product Created At: " . $product->createdAt->format('Y-m-d H:i:s') . PHP_EOL;
// // echo "Product Updated At: " . $product->updatedAt->format('Y-m-d H:i:s') . PHP_EOL;

// // echo "User Created At: " . $user->createdAt->format('Y-m-d H:i:s') . PHP_EOL;

// // echo "User Updated At: " . $user->updatedAt->format('Y-m-d H:i:s') . PHP_EOL;

// $paymentGateway = new class ("paymob") implements PaymentProcessorInterface {
//     public function __construct(private string $gatewayName)
//     {
//     }
//     public function processPayment(float $amount): string
//     {
//         return "Processing payment of $amount via Anonymous Gateway";
//     }
// };



// $sum = array_reduce($store->getProducts(), fn($carry, $product) => $carry + $product->getFinalPrice(), 0);

// echo $paymentGateway->processPayment($sum) . PHP_EOL;

// // $store->createLogger()->log("Payment of $sum processed successfully.");
// $originalProduct = new Product("Hp zbook 17", 150, 0);

// $str = serialize($originalProduct);

// $unserlizedProduct = unserialize($str);

// // var_dump($originalProduct, $str, $unserlizedProduct);

// var_dump($str);

set_exception_handler(function ($e) {
    echo "Uncaught Exception: " . $e->getMessage() . PHP_EOL;
});


try {
    $product = new Product("Test Product", (100 / 0), 10);
} catch (ProductException $e) {
    echo "Product Exception Caught: " . $e->getMessage() . PHP_EOL;
} finally {
    echo "Execution completed." . PHP_EOL;
}
