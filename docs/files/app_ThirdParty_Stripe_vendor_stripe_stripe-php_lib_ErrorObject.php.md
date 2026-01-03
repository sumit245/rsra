# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ErrorObject.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ErrorObject.php`
- Type: PHP
- Size: 12776 bytes

## Summary (from docblocks)

Class ErrorObject.
@property string $charge For card errors, the ID of the failed charge.
@property string $code For some errors that could be handled
   programmatically, a short string indicating the error code reported.
@property string $decline_code For card errors resulting from a card issuer
   decline, a short string indicating the card issuer's reason for the
   decline if they provide one.
@property string $doc_url A URL to more information about the error code
   reported.
@property string $message A human-readable message providing more details
   about the error. For card errors, these messages can be shown to your
   users.
@property string $param If the error is parameter-specific, the parameter
   related to the error. For example, you can use this to display a message
   near the correct form field.
@property PaymentIntent $payment_intent The PaymentIntent object for errors
   returned on a request involving a PaymentIntent.
@property PaymentMethod $payment_method The PaymentMethod object for errors
   returned on a request involving a PaymentMethod.
@property string $payment_method_type If the error is specific to the type
   of payment method, the payment method type that had a problem. This
   field is only populated for invoice-related errors.
@property SetupIntent $setup_intent The SetupIntent object for errors
   returned on a request involving a SetupIntent.
@property StripeObject $source The source object for errors returned on a
   request involving a source.
@property string $type The type of error returned. One of `api_error`,
  `card_error`, `idempotency_error`, or `invalid_request_error`.

Possible string representations of an error's code.
@see https://stripe.com/docs/error-codes

Refreshes this object using the provided values.
@param array $values
@param null|array|string|Util\RequestOptions $opts
@param bool $partial defaults to false

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ErrorObject.php`

**Classes**:
- `Stripe\ErrorObject extends StripeObject`

**Functions/Methods**:
- `refreshFrom($values, $opts, $partial = false)`

