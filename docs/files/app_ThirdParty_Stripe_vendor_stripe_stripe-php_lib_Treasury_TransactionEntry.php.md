# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\TransactionEntry.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\TransactionEntry.php`
- Type: PHP
- Size: 3630 bytes

## Summary (from docblocks)

TransactionEntries represent individual units of money movements within a single
<a href="https://stripe.com/docs/api#transactions">Transaction</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property \Stripe\StripeObject $balance_impact Change to a FinancialAccount's balance
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
@property int $effective_at When the TransactionEntry will impact the FinancialAccount's balance.
@property string $financial_account The FinancialAccount associated with this object.
@property null|string $flow Token of the flow associated with the TransactionEntry.
@property null|\Stripe\StripeObject $flow_details Details of the flow associated with the TransactionEntry.
@property string $flow_type Type of the flow associated with the TransactionEntry.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property string|\Stripe\Treasury\Transaction $transaction The Transaction associated with this object.
@property string $type The specific money movement that generated the TransactionEntry.

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\TransactionEntry.php`

**Classes**:
- `Stripe\Treasury\TransactionEntry extends \Stripe\ApiResource`

