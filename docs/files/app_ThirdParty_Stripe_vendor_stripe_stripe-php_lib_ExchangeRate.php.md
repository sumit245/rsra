# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ExchangeRate.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ExchangeRate.php`
- Type: PHP
- Size: 1446 bytes

## Summary (from docblocks)

<code>Exchange Rate</code> objects allow you to determine the rates that Stripe
is currently using to convert from one currency to another. Since this number is
variable throughout the day, there are various reasons why you might want to
know the current rate (for example, to dynamically price an item for a user with
a default payment in a foreign currency).
If you want a guarantee that the charge is made with a certain exchange rate you
expect is current, you can pass in <code>exchange_rate</code> to charges
endpoints. If the value is no longer up to date, the charge won't go through.
Please refer to our <a href="https://stripe.com/docs/exchange-rates">Exchange
Rates API</a> guide for more details.
@property string $id Unique identifier for the object. Represented as the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a> in lowercase.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property \Stripe\StripeObject $rates Hash where the keys are supported currencies and the values are the exchange rate at which the base id currency converts to the key currency.

## References

**Database Tables (inferred)**
- `our`
- `one`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\ExchangeRate.php`

**Classes**:
- `Stripe\ExchangeRate extends ApiResource`

