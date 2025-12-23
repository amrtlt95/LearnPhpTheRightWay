<?php

namespace App\Payment;

interface PaymentGateway
{
    public function charge(float $amount): bool;
}
