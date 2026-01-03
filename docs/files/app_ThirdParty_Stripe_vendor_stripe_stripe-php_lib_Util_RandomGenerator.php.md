# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RandomGenerator.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RandomGenerator.php`
- Type: PHP
- Size: 814 bytes

## Summary (from docblocks)

A basic random generator. This is in a separate class so we the generator
can be injected as a dependency and replaced with a mock in tests.

Returns a random value between 0 and $max.
@param float $max (optional)
@return float

Returns a v4 UUID.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\RandomGenerator.php`

**Classes**:
- `Stripe\Util\so`
- `Stripe\Util\RandomGenerator`

**Functions/Methods**:
- `randFloat($max = 1.0)`
- `uuid()`

