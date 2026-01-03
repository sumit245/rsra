# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccount.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccount.php`
- Type: PHP
- Size: 3886 bytes

## Summary (from docblocks)

Stripe Treasury provides users with a container for money called a
FinancialAccount that is separate from their Payments balance. FinancialAccounts
serve as the source and destination of Treasury’s money movement APIs.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property string[] $active_features The array of paths to active Features in the Features hash.
@property \Stripe\StripeObject $balance Balance information for the FinancialAccount
@property string $country Two-letter country code (<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>).
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property \Stripe\Treasury\FinancialAccountFeatures $features Encodes whether a FinancialAccount has access to a particular Feature, with a <code>status</code> enum and associated <code>status_details</code>. Stripe or the platform can control Features via the requested field.
@property \Stripe\StripeObject[] $financial_addresses The set of credentials that resolve to a FinancialAccount.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
@property string[] $pending_features The array of paths to pending Features in the Features hash.
@property null|\Stripe\StripeObject $platform_restrictions The set of functionalities that the platform can restrict on the FinancialAccount.
@property string[] $restricted_features The array of paths to restricted Features in the Features hash.
@property string $status The enum specifying what state the account is in.
@property \Stripe\StripeObject $status_details
@property string[] $supported_currencies The currencies the FinancialAccount can hold a balance in. Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase.

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount the retrieved financial account

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Treasury\FinancialAccount the updated financial account

## References

**Database Tables (inferred)**
- `our`
- `their`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Treasury\FinancialAccount.php`

**Classes**:
- `Stripe\Treasury\FinancialAccount extends \Stripe\ApiResource`

**Functions/Methods**:
- `retrieveFeatures($params = null, $opts = null)`
- `updateFeatures($params = null, $opts = null)`

