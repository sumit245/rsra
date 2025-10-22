# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApplicationFeeRefund.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApplicationFeeRefund.php`
- Type: PHP
- Size: 2503 bytes

## Summary (from docblocks)

<code>Application Fee Refund</code> objects allow you to refund an application
fee that has previously been created but not yet refunded. Funds will be
refunded to the Stripe account from which the fee was originally collected.
Related guide: <a
href="https://stripe.com/docs/connect/destination-charges#refunding-app-fee">Refunding
Application Fees</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property int $amount Amount, in %s.
@property null|string|\Stripe\BalanceTransaction $balance_transaction Balance transaction that describes the impact on your account balance.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
@property string|\Stripe\ApplicationFee $fee ID of the application fee that was refunded.
@property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.

@return string the API URL for this Stripe refund

@param null|array|string $opts
@return ApplicationFeeRefund the saved refund

## References

**Database Tables (inferred)**
- `our`
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ApplicationFeeRefund.php`

**Classes**:
- `Stripe\ApplicationFeeRefund extends ApiResource`
- `Stripe\instance`

**Functions/Methods**:
- `instanceUrl()`
- `save($opts = null)`

