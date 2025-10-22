# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Webhook.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Webhook.php`
- Type: PHP
- Size: 1515 bytes

## Summary (from docblocks)

Returns an Event instance using the provided JSON payload. Throws an
Exception\UnexpectedValueException if the payload is not valid JSON, and
an Exception\SignatureVerificationException if the signature
verification fails for any reason.
@param string $payload the payload sent by Stripe
@param string $sigHeader the contents of the signature header sent by
 Stripe
@param string $secret secret used to generate the signature
@param int $tolerance maximum difference allowed between the header's
 timestamp and the current time
@throws Exception\UnexpectedValueException if the payload is not valid JSON,
@throws Exception\SignatureVerificationException if the verification fails
@return Event the Event instance

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Webhook.php`

**Classes**:
- `Stripe\Webhook`

**Functions/Methods**:
- `constructEvent($payload, $sigHeader, $secret, $tolerance = self::DEFAULT_TOLERANCE)`

