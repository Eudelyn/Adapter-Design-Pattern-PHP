# Adapter Design Pattern in PHP

This project demonstrates the **Adapter Design Pattern** using a simple payment gateway example in PHP.

## Description

The application expects a `PaymentService` interface with a `processPayment()` method. However, the existing `PaymentProvider` class uses a different `makeCharge()` method.

The `PaymentAdapter` acts as a bridge between them by translating the application's request into the format required by the payment provider.

## Structure

```text
Application
     ↓
PaymentService
     ↓
PaymentAdapter
     ↓
PaymentProvider