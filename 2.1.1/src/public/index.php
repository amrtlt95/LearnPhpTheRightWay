<?php

require_once __DIR__ . DIRECTORY_SEPARATOR .  '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
use App\PaymentGateway\Paddle\Transaction;


$stripeTransaction = new StripeTransaction();

// $paddleTransaction = new Transaction();

var_dump($stripeTransaction);
