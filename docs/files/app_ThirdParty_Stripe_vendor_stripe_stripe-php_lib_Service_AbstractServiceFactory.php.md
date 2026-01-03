# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractServiceFactory.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractServiceFactory.php`
- Type: PHP
- Size: 1476 bytes

## Summary (from docblocks)

Abstract base class for all service factories used to expose service
instances through {@link \Stripe\StripeClient}.
Service factories serve two purposes:
1. Expose properties for all services through the `__get()` magic method.
2. Lazily initialize each service instance the first time the property for
   a given service is used.

@var \Stripe\StripeClientInterface

@var array<string, AbstractService|AbstractServiceFactory>

@param \Stripe\StripeClientInterface $client

@param string $name
@return null|string

@param string $name
@return null|AbstractService|AbstractServiceFactory

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AbstractServiceFactory.php`

**Classes**:
- `Stripe\Service\for`
- `Stripe\Service\AbstractServiceFactory`

**Functions/Methods**:
- `__construct($client)`
- `getServiceClass($name)`
- `__get($name)`

