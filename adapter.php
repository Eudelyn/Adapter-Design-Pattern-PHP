<?php

interface PaymentService
{
    public function processPayment(float $amount): string;
}

class PaymentProvider
{
    public function makeCharge(int $amountInCents): string
    {
        return "Provider charged {$amountInCents} cents";
    }
}

class PaymentAdapter implements PaymentService
{
    public function __construct(
        private PaymentProvider $provider
    ) {
    }

    public function processPayment(float $amount): string
    {
        $amountInCents = (int) round($amount * 100);

        return $this->provider->makeCharge($amountInCents);
    }
}

$provider = new PaymentProvider();
$payment = new PaymentAdapter($provider);

echo $payment->processPayment(150.00);