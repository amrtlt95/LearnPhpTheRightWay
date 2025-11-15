<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


use App\PaymentGateway\Paddle\Transaction;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidFactory;

$number = new UuidFactory();

echo $number->uuid4()->toString();

$transaction = new Transaction();
