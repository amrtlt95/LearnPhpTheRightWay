<?php

    /*
        🧩 PHP OOP Summary Exercise — “Transaction Manager”
🧱 Part 1 — Basic Class Setup

Create a class named Transaction in a separate file Transaction.php.

Give it two private typed properties:

$amount (float)

$description (string)

Write a constructor that takes two parameters and initializes those properties.

Inside the same file, write a public method getAmount() that returns the current amount.
//Done in Transaction.php
*/



/*
⚙️ Part 2 — Methods and Chaining

Add a method addTax(float $rate) that increases the amount by that percentage.

Add another method applyDiscount(float $rate) that decreases the amount by that percentage.

Make both methods return $this to allow method chaining.

Add a method getDescription() that returns the transaction’s description.





💾 Part 3 — Creating and Using Objects

In a new file index.php, include Transaction.php.

Create three Transaction objects with different amounts and descriptions.

For each object, call addTax() and applyDiscount() in a chained manner.

Print each transaction’s final amount and description.

*/
require_once 'Transaction.php';
use classes\Transaction;
$transaction1 = new Transaction(100.0, "Groceries");
$transaction2 = new Transaction(250.0, "Electronics");
$transaction3 = new Transaction(75.0, "Books");

$transaction1->addTax(5)->applyDiscount(10);
$transaction2->addTax(8)->applyDiscount(15);
$transaction3->addTax(7)->applyDiscount(5);

echo "Transaction 1: " . $transaction1->getDescription() . " - Final
    Amount: $" . $transaction1->getAmount() . "\n";
unset($transaction1);

echo "Transaction 2: " . $transaction2->getDescription() . " - Final
    Amount: $" . $transaction2->getAmount() . "\n";
echo "Transaction 3: " . $transaction3->getDescription() . " - Final
    Amount: $" . $transaction3->getAmount() . "\n";
/*

🧹 Part 4 — Destructor and Cleanup

Inside the class, add a destructor that prints a message showing the transaction description when the object is destroyed.

In index.php, explicitly destroy one of the objects before the script ends (using unset() or assigning null).
*/
unset($transaction2);
unset($transaction3);

/*

🧱 Part 5 — stdClass Practice

Create an associative array $data containing 3 key-value pairs (a, b, c).

Convert it to an object using (object)$data and access one of its properties.

Create another object using new stdClass() and add properties manually.

Convert one of your Transaction objects to an array using (array) and print it.
    */

$data = ["name" => "Amr" , "age" => 28, "City" => "Alexandria"];
$myObject = (object)$data;

echo "Name: " . $myObject->name . "\n";

$otherObject = new stdClass();

$otherObject->name = "Amr Talaat";
echo "Other name source " .  $otherObject->name . "\n";

$transactionArray = (array)$transaction3;

// var_dump($transactionArray);
