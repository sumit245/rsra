# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Account.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Account.php`
- Type: PHP
- Size: 15865 bytes

## Summary (from docblocks)

This is an object representing a Stripe account. You can retrieve it to see
properties on the account like its current e-mail address or if the account is
enabled yet to make live charges.
Some properties, marked below, are available only to platforms that want to <a
href="https://stripe.com/docs/connect/accounts">create and manage Express or
Custom accounts</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|\Stripe\StripeObject $business_profile Business information about the account.
@property null|string $business_type The business type.
@property \Stripe\StripeObject $capabilities
@property bool $charges_enabled Whether the account can create live charges.
@property \Stripe\StripeObject $company
@property \Stripe\StripeObject $controller
@property string $country The account's country.
@property int $created Time at which the account was connected. Measured in seconds since the Unix epoch.
@property string $default_currency Three-letter ISO currency code representing the default currency for the account. This must be a currency that <a href="https://stripe.com/docs/payouts">Stripe supports in the account's country</a>.
@property bool $details_submitted Whether account details have been submitted. Standard accounts cannot receive payouts before this is true.
@property null|string $email An email address associated with the account. You can treat this as metadata: it is not used for authentication or messaging account holders.
@property \Stripe\Collection<\Stripe\BankAccount|\Stripe\Card> $external_accounts External accounts (bank accounts and debit cards) currently attached to this account
@property \Stripe\StripeObject $future_requirements
@property \Stripe\Person $individual <p>This is an object representing a person associated with a Stripe account.</p><p>A platform cannot access a Standard or Express account's persons after the account starts onboarding, such as after generating an account link for the account. See the <a href="https://stripe.com/docs/connect/standard-accounts">Standard onboarding</a> or <a href="https://stripe.com/docs/connect/express-accounts">Express onboarding documentation</a> for information about platform pre-filling and account onboarding steps.</p><p>Related guide: <a href="https://stripe.com/docs/connect/identity-verification-api#person-information">Handling Identity Verification with the API</a>.</p>
@property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
@property bool $payouts_enabled Whether Stripe can send payouts to this account.
@property \Stripe\StripeObject $requirements
@property null|\Stripe\StripeObject $settings Options for customizing how the account functions within Stripe.
@property \Stripe\StripeObject $tos_acceptance
@property string $type The Stripe account type. Can be <code>standard</code>, <code>express</code>, or <code>custom</code>.

@param null|array|string $id the ID of the account to retrieve, or an
    options array containing an `id` key
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

@param null|array $clientId
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\StripeObject object containing the response from the API

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account the rejected account

@param string $id the ID of the account on which to retrieve the capabilities
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Capability> the list of capabilities

@param string $id the ID of the account to which the capability belongs
@param string $capabilityId the ID of the capability to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Capability

@param string $id the ID of the account to which the capability belongs
@param string $capabilityId the ID of the capability to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Capability

@param string $id the ID of the account on which to retrieve the external accounts
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BankAccount|\Stripe\Card> the list of external accounts (BankAccount or Card)

@param string $id the ID of the account on which to create the external account
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

@param string $id the ID of the account to which the external account belongs
@param string $externalAccountId the ID of the external account to delete
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

@param string $id the ID of the account to which the external account belongs
@param string $externalAccountId the ID of the external account to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

@param string $id the ID of the account to which the external account belongs
@param string $externalAccountId the ID of the external account to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

@param string $id the ID of the account on which to create the login link
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\LoginLink

@param string $id the ID of the account on which to retrieve the persons
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Person> the list of persons

@param string $id the ID of the account on which to create the person
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

@param string $id the ID of the account to which the person belongs
@param string $personId the ID of the person to delete
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

@param string $id the ID of the account to which the person belongs
@param string $personId the ID of the person to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

@param string $id the ID of the account to which the person belongs
@param string $personId the ID of the person to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

## References

**Database Tables (inferred)**
- `our`
- `an`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Account.php`

**Classes**:
- `Stripe\Account extends ApiResource`

**Functions/Methods**:
- `getSavedNestedResources()`
- `instanceUrl()`
- `retrieve($id = null, $opts = null)`
- `serializeParameters($force = false)`
- `serializeAdditionalOwners($legalEntity, $additionalOwners)`
- `deauthorize($clientId = null, $opts = null)`
- `reject($params = null, $opts = null)`
- `allCapabilities($id, $params = null, $opts = null)`
- `retrieveCapability($id, $capabilityId, $params = null, $opts = null)`
- `updateCapability($id, $capabilityId, $params = null, $opts = null)`
- `allExternalAccounts($id, $params = null, $opts = null)`
- `createExternalAccount($id, $params = null, $opts = null)`
- `deleteExternalAccount($id, $externalAccountId, $params = null, $opts = null)`
- `retrieveExternalAccount($id, $externalAccountId, $params = null, $opts = null)`
- `updateExternalAccount($id, $externalAccountId, $params = null, $opts = null)`
- `createLoginLink($id, $params = null, $opts = null)`
- `allPersons($id, $params = null, $opts = null)`
- `createPerson($id, $params = null, $opts = null)`
- `deletePerson($id, $personId, $params = null, $opts = null)`
- `retrievePerson($id, $personId, $params = null, $opts = null)`
- `updatePerson($id, $personId, $params = null, $opts = null)`

