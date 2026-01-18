<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Product;
use App\Models\AdminUser;
use App\Interfaces\PaymentProcessorInterface;
use App\Exceptions\ProductException;
use App\Models\Router;

/*
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

// set_exception_handler(function ($e) {
//     echo "Uncaught Exception: " . $e->getMessage() . PHP_EOL;
// });


// try {
//     $product = new Product("Test Product", (100 / 0), 10);
// } catch (ProductException $e) {
//     echo "Product Exception Caught: " . $e->getMessage() . PHP_EOL;
// } finally {
//     echo "Execution completed." . PHP_EOL;

// }


// $dateFormatting = "d-m-o g:i:s A";
// $product = new Product("Test Product", 100, 10);


// // echo "the product is created in UTC time: " . $product->getCreatedAtInTimezone("UTC")->format($dateFormatting) . PHP_EOL;
// // echo "the product is created in Cairo time: " . $product->getCreatedAtInTimezone()->format($dateFormatting) . PHP_EOL;

// $product->applyDiscountExpiry("25/12/2024 (14:30)");
// echo "Discount expiry date: " . $product->discountExpiry->format($dateFormatting) . PHP_EOL;




// $product->applyDiscountExpiry("25/12/2025");
// echo "Discount expiry date: " . $product->discountExpiry->format($dateFormatting) . PHP_EOL;


// echo $product->timeLeftForDiscount() . PHP_EOL;

// $product1 = new Product("HP zbook 17 g1", 50, 0);
// $product2 = new Product("HP zbook 17 g2", 100, 3000);
// $product3 = new Product("HP zbook 17 g4", 300, 10000);
//     $productCollection = new App\Models\ProductCollection([$product1, $product2, $product3]);
// foreach ($productCollection as $product) {
//     echo "Product Name: " . $product->getName() . ", Price: " . $product->getFinalPrice() . PHP_EOL;
// }
// ;

/*

The Return Mystery: Create a function runCallback(callable $c). Inside it, just call $c(). Then, try to assign the result: $result = runCallback(fn() => "Hello");. Research why $result is null and what happens when you add return before $c().
*/

// $result = Router::testCalllingNonStaticFunction();
// $result2 = Router::testCallingStaticFunction();
// echo $result . PHP_EOL;
// echo $result2 . PHP_EOL;


/*

Symmetric Array Destructuring: Try this in a script: [$a, $b] = [10, 20]; echo $a;. Then, try to use it to "swap" variables: [$a, $b] = [$b, $a];. Research when this syntax was introduced to PHP. PHP symmetric array destructuring, list() vs []
XII-1204    Dynamic Instantiation: Store your product class name in a variable: $name = 'App\Models\Product';. Now, try $obj = new $name("Laptop", 1000, 5);. Research how PHP knows which class to create even though the name is just a string.   PHP variable classes, dynamic instantiation
XII-1205    The "Array" Version of Calls: Look up call_user_func_array. Create a function that takes 3 arguments. Try calling it using an array [1, 2, 3] instead of passing them individually. Research why the "invoker" must return the result of this call. PHP call_user_func_array vs call_user_func
XII-1206    The Simple Router: Implement the Router class from the video. It should use $_SERVER['REQUEST_URI'] to decide which "Controller" class and method to run.   PHP Router implementation, REQUEST_URI









Symmetric Array Destructuring:
Try this in a script: [$a, $b] = [10, 20];
 echo $a;.
 Then, try to use it to "swap" variables: [$a, $b] = [$b, $a];. Research when this syntax was introduced to PHP.

*/


// [$a , $b] = [10, 20];
// echo $a . PHP_EOL; // 10


// [$a , $b] = [$b , $a];
// echo $a . PHP_EOL; // 20


// echo          $b . PHP_EOL; // 10





// /*

// Dynamic Instantiation: Store your product class name in a variable: $name = 'App\Models\Product';. Now, try $obj = new $name("Laptop", 1000, 5);. Research how PHP knows which class to create even though the name is just a string.
// */

// $name = "App\Models\Product";
// $obj = new $name("Laptop", 1000, 5);
// var_dump($obj);



// The "Array" Version of Calls: Look up call_user_func_array. Create a function that takes 3 arguments. Try calling it using an array [1, 2, 3] instead of passing them individually. Research why the "invoker" must return the result of this call.



// function sumThreeNumbers($a, $b, $c)
// {
//     return $a + $b + $c;
// }

// $a = call_user_func_array(fn($a, $b, $c) => $a + $b + $c, [10, 20, 30]);


// echo $a . PHP_EOL; // 60



// The Simple Router: Implement the Router class from the video. It should use $_SERVER['REQUEST_URI'] to decide which "Controller" class and method to run.



// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$router = new Router();

$router->get('/', [App\Models\HomeController::class, 'index'])
        ->get("/register", [App\Models\UserController::class, 'register'])
        ->post("/register", [App\Models\UserController::class, 'handleRegister']);

    echo $router->resolve(strtolower($_SERVER['REQUEST_METHOD']), $_SERVER['REQUEST_URI']);


// try {
//     echo $router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
// } catch (\Throwable $e) {
//     echo "Error: " . $e->getMessage();
// }
