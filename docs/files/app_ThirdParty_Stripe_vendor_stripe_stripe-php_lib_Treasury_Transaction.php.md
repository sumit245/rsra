# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\Transaction.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\Transaction.php`
- Type: PHP
- Size: 2570 bytes

## Summary (from docblocks)

Transactions represent changes to a <a
href="https://stripe.com/docs/api#financial_accounts">FinancialAccount's</a>
balance.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property int $amount Amount (in cents) transferred.
@property \Stripe\StripeObject $balance_impact Change to a FinancialAccount's balance
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
@property string $description An arbitrary string attached to the object. Often useful for displaying to users.
@property null|\Stripe\Collection<\Stripe\Treasury\TransactionEntry> $entries A list of TransactionEntries that are part of this Transaction. This cannot be expanded in any list endpoints.
@property string $financial_account The FinancialAccount associated with this object.
@property null|string $flow ID of the flow that created the Transaction.
@property null|\Stripe\StripeObject $flow_details Details of the flow that created the Transaction.
@property string $flow_type Type of the flow that created the Transaction.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property string $status Status of the Transaction.
@property \Stripe\StripeObject $status_transitions

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\Transaction.php`

**Classes**:
- `Stripe\Treasury\Transaction extends \Stripe\ApiResource`

