# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\UsageRecordSummary.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\UsageRecordSummary.php`
- Type: PHP
- Size: 812 bytes

## Summary (from docblocks)

@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|string $invoice The invoice in which this usage period has been billed for.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property \Stripe\StripeObject $period
@property string $subscription_item The ID of the subscription item this summary is describing.
@property int $total_usage The total usage within this usage period.

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\UsageRecordSummary.php`

**Classes**:
- `Stripe\UsageRecordSummary extends ApiResource`

