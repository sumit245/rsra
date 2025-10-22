# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\WebhookSignature.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\WebhookSignature.php`
- Type: PHP
- Size: 4377 bytes

## Summary (from docblocks)

Verifies the signature header sent by Stripe. Throws an
Exception\SignatureVerificationException exception if the verification fails for
any reason.
@param string $payload the payload sent by Stripe
@param string $header the contents of the signature header sent by
 Stripe
@param string $secret secret used to generate the signature
@param int $tolerance maximum difference allowed between the header's
 timestamp and the current time
@throws Exception\SignatureVerificationException if the verification fails
@return bool

Extracts the timestamp in a signature header.
@param string $header the signature header
@return int the timestamp contained in the header, or -1 if no valid
 timestamp is found

Extracts the signatures matching a given scheme in a signature header.
@param string $header the signature header
@param string $scheme the signature scheme to look for
@return array the list of signatures matching the provided scheme

Computes the signature for a given payload and secret.
The current scheme used by Stripe ("v1") is HMAC/SHA-256.
@param string $payload the payload to sign
@param string $secret the secret used to generate the signature
@return string the signature as a string

## References

**Database Tables (inferred)**
- `header`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\WebhookSignature.php`

**Classes**:
- `Stripe\WebhookSignature`

**Functions/Methods**:
- `verifyHeader($payload, $header, $secret, $tolerance = null)`
- `getTimestamp($header)`
- `getSignatures($header, $scheme)`
- `computeSignature($payload, $secret)`

