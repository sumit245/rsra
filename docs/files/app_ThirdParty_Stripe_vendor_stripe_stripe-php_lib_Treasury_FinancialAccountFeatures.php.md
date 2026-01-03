# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccountFeatures.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccountFeatures.php`
- Type: PHP
- Size: 1367 bytes

## Summary (from docblocks)

Encodes whether a FinancialAccount has access to a particular Feature, with a
<code>status</code> enum and associated <code>status_details</code>. Stripe or
the platform can control Features via the requested field.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property \Stripe\StripeObject $card_issuing Toggle settings for enabling/disabling a feature
@property \Stripe\StripeObject $deposit_insurance Toggle settings for enabling/disabling a feature
@property \Stripe\StripeObject $financial_addresses Settings related to Financial Addresses features on a Financial Account
@property \Stripe\StripeObject $inbound_transfers InboundTransfers contains inbound transfers features for a FinancialAccount.
@property \Stripe\StripeObject $intra_stripe_flows Toggle settings for enabling/disabling a feature
@property \Stripe\StripeObject $outbound_payments Settings related to Outbound Payments features on a Financial Account
@property \Stripe\StripeObject $outbound_transfers OutboundTransfers contains outbound transfers features for a FinancialAccount.

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccountFeatures.php`

**Classes**:
- `Stripe\Treasury\FinancialAccountFeatures extends \Stripe\ApiResource`

