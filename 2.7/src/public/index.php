<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Transaction;
use App\Logger;
use App\DB;

// $transaction1 = new Transaction(100.0, 'Deposit');


// echo 'Total Transactions: ' . Transaction::getCount();

// echo Logger::info('Application started.');
// echo PHP_EOL;


// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
$transaction = new Transaction(50.0, 'Sample Transaction');
var_dump($transaction->apply([1, 2, 3, 4, 5]));
echo PHP_EOL;
echo $transaction->amount;
