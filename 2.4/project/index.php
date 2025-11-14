<?php

declare(strict_types=1);

// TODO: Include necessary class files
require_once "payment_gateway/paddle/Transaction.php";
require_once "payment_gateway/paddle/CustomerProfile.php";
require_once "payment_gateway/stripe/Transaction.php";
require_once "notification/Email.php";

use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;
use Notification\Email;

// TODO: Import namespaces if needed

// Instantiate Paddle Transaction
// // $paddleTransaction = new \PaymentGateway\Paddle\Transaction();
// // $paddleTransaction->createCustomer();

// Instantiate Paddle Transaction
// // $paddleTransaction = new Transaction();
// // $paddleTransaction->createCustomer();


// TODO: Instantiate both Paddle and Stripe Transactions
// // $paddleTransaction = new Transaction();
// $stripeTransaction = new \PaymentGateway\Stripe\Transaction();

// TODO: Fix class name conflict by aliasing
// // $stripeTransaction = new StripeTransaction();

// // var_dump($paddleTransaction, $stripeTransaction);


// TODO: Instantiate Email class from notification namespace
$email = new Email();
var_dump($email);
