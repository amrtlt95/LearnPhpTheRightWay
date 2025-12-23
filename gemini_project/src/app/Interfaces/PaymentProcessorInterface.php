<?php

declare(strict_types=1);

namespace App\Interfaces;

interface PaymentProcessorInterface
{
    /**
     *
     * @param float $amount The amount to be processed
     * @return string A confirmation message after processing the payment
     * @throws \Exception If the payment processing fails
     */
    public function processPayment(float $amount): string;
}
