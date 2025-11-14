<?php

declare(strict_types=1);

// TODO: Add namespace declaration here
namespace PaymentGateway\Paddle;

// use DateTime;

class Transaction
{
    public function __construct()
    {
        echo "Paddle Transaction created\n";
    }

    public function createCustomer()
    {
        // TODO: Instantiate CustomerProfile here
        var_dump(new CustomerProfile());
    }

    public function getDate()
    {
    // TODO: Create a DateTime object (PHP built-in) and return it
        $date = new \DateTime();
        return $date->format('Y-m-d H:i:s');
    }


    public function test()
    {
        // TODO: Call explode function to split string "hello,world"
// Ensure PHP's built-in explode is used, not the namespaced one
        $result = \explode(',', 'hello,world');
        var_dump($result);
    }
}
