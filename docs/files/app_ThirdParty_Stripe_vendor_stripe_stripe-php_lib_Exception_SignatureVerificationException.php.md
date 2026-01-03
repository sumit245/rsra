# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\SignatureVerificationException.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\SignatureVerificationException.php`
- Type: PHP
- Size: 1631 bytes

## Summary (from docblocks)

SignatureVerificationException is thrown when the signature verification for
a webhook fails.

Creates a new SignatureVerificationException exception.
@param string $message the exception message
@param null|string $httpBody the HTTP body as a string
@param null|string $sigHeader the `Stripe-Signature` HTTP header
@return SignatureVerificationException

Gets the HTTP body as a string.
@return null|string

Sets the HTTP body as a string.
@param null|string $httpBody

Gets the `Stripe-Signature` HTTP header.
@return null|string

Sets the `Stripe-Signature` HTTP header.
@param null|string $sigHeader

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\SignatureVerificationException.php`

**Classes**:
- `Stripe\Exception\SignatureVerificationException extends \Exception implements ExceptionInterface`

**Functions/Methods**:
- `factory($message,
        $httpBody = null,
        $sigHeader = null)`
- `getHttpBody()`
- `setHttpBody($httpBody)`
- `getSigHeader()`
- `setSigHeader($sigHeader)`

