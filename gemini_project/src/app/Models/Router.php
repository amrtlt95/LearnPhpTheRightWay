<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Product;
use App\Exceptions\RouteNotFoundException;

class Router
{
    /**
     * This holds the routes for the application.
     * @var [string, callable | array] $routes
     */
    private array $routes = [];
    public function runCallback(callable $c)
    {
        return $c();
    }

    /*

The Static @ 10:28: In your Router, try to call a method like this: call_user_func(['App\Models\Product', 'someMethod']). Research why this works for static methods but throws an error for "regular" (instance) methods.
    */

    public static function testCalllingNonStaticFunction()
    {
        $product = new Product("Test Product", 100, 10);
        // return call_user_func([Product::class, "timeLeftForDiscount"]);
         call_user_func([$product, "applyDiscountExpiry"], "25/12/2024 (14:30)");

        return call_user_func([$product, "timeLeftForDiscount"]);
    }

    public static function testCallingStaticFunction()
    {
        return call_user_func([Product::class, "staticMethod"]);
    }

    private function register(string $requestMethod, string $url, callable | array $action): static
    {
          $this->routes[$requestMethod][$url] = $action;
          return $this;
    }


    public function get(string $url, callable | array $action): static
    {
        return $this->register("get", $url, $action);
    }

    public function post(string $url, callable | array $action): static
    {
        return $this->register("post", $url, $action);
    }

    public function resolve(string $requestMethod, string $url)
    {
        $url  = \explode('?', $url)[0];
        $action = $this->routes[$requestMethod][$url] ?? null;
        if ($action != null) {
            if (is_callable($action)) {
                return call_user_func($action);
            }if (
                is_array($action)
            ) {
                [$class  , $method] = [new $action[0](), $action[1]];
                // return call_user_func_array([$class, $method], []);
                return call_user_func([$class, $method]);
            }
        } else {
            throw new RouteNotFoundException();
        }
    }
}
