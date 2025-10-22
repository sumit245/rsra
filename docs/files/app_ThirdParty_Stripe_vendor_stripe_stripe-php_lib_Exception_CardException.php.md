# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\CardException.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\CardException.php`
- Type: PHP
- Size: 2124 bytes

## Summary (from docblocks)

CardException is thrown when a user enters a card that can't be charged for
some reason.

Creates a new CardException exception.
@param string $message the exception message
@param null|int $httpStatus the HTTP status code
@param null|string $httpBody the HTTP body as a string
@param null|array $jsonBody the JSON deserialized body
@param null|array|\Stripe\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
@param null|string $stripeCode the Stripe error code
@param null|string $declineCode the decline code
@param null|string $stripeParam the parameter related to the error
@return CardException

Gets the decline code.
@return null|string

Sets the decline code.
@param null|string $declineCode

Gets the parameter related to the error.
@return null|string

Sets the parameter related to the error.
@param null|string $stripeParam

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Exception\CardException.php`

**Classes**:
- `Stripe\Exception\CardException extends ApiErrorException`

**Functions/Methods**:
- `factory($message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $stripeCode = null,
        $declineCode = null,
        $stripeParam = null)`
- `getDeclineCode()`
- `setDeclineCode($declineCode)`
- `getStripeParam()`
- `setStripeParam($stripeParam)`

