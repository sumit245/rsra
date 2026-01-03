# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AccountService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AccountService.php`
- Type: PHP
- Size: 13638 bytes

## Summary (from docblocks)

Returns a list of accounts connected to your platform via <a
href="/docs/connect">Connect</a>. If you’re not a platform, the list is empty.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Account>

Returns a list of capabilities associated with the account. The capabilities are
returned sorted by creation date, with the most recent capability appearing
first.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Capability>

List external accounts for an account.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BankAccount|\Stripe\Card>

Returns a list of people associated with the account’s legal entity. The people
are returned sorted by creation date, with the most recent people appearing
first.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Person>

With <a href="/docs/connect">Connect</a>, you can create Stripe accounts for
your users. To do this, you’ll first need to <a
href="https://dashboard.stripe.com/account/applications/settings">register your
platform</a>.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

Create an external account for a given account.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

Creates a single-use login link for an Express account to access their Stripe
dashboard.
<strong>You may only create login links for <a
href="/docs/connect/express-accounts">Express accounts</a> connected to your
platform</strong>.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\LoginLink

Creates a new person.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

With <a href="/docs/connect">Connect</a>, you can delete accounts you manage.
Accounts created using test-mode keys can be deleted at any time. Standard
accounts created using live-mode keys cannot be deleted. Custom or Express
accounts created using live-mode keys can only be deleted once all balances are
zero.
If you want to delete your own account, use the <a
href="https://dashboard.stripe.com/account">account information tab in your
account settings</a> instead.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

Delete a specified external account for a given account.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

Deletes an existing person’s relationship to the account’s legal entity. Any
person with a relationship for an account can be deleted through the API, except
if the person is the <code>account_opener</code>. If your integration is using
the <code>executive</code> parameter, you cannot delete the only verified
<code>executive</code> on file.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

With <a href="/docs/connect">Connect</a>, you may flag accounts as suspicious.
Test-mode Custom and Express accounts can be rejected at any time. Accounts
created using live-mode keys may only be rejected once all balances are zero.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

Retrieves information about the specified Account Capability.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Capability

Retrieve a specified external account for a given account.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

Retrieves an existing person.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

Updates a <a href="/docs/connect/accounts">connected account</a> by setting the
values of the parameters passed. Any parameters not provided are left unchanged.
Most parameters can be changed only for Custom accounts. (These are marked
<strong>Custom Only</strong> below.) Parameters marked <strong>Custom and
Express</strong> are not supported for Standard accounts.
To update your own account, use the <a
href="https://dashboard.stripe.com/account">Dashboard</a>. Refer to our <a
href="/docs/connect/updating-accounts">Connect</a> documentation to learn more
about updating accounts.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

Updates an existing Account Capability.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Capability

Updates the metadata, account holder name, account holder type of a bank account
belonging to a <a href="/docs/connect/custom-accounts">Custom account</a>, and
optionally sets it as the default for its currency. Other bank account details
are not editable by design.
You can re-enable a disabled bank account by performing an update call without
providing any arguments or changes.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card

Updates an existing person.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Person

Retrieves the details of an account.
@param null|string $id
@param null|array $params
@param null|array|StripeUtilRequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Account

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\AccountService.php`

**Classes**:
- `Stripe\Service\AccountService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allCapabilities($parentId, $params = null, $opts = null)`
- `allExternalAccounts($parentId, $params = null, $opts = null)`
- `allPersons($parentId, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `createExternalAccount($parentId, $params = null, $opts = null)`
- `createLoginLink($parentId, $params = null, $opts = null)`
- `createPerson($parentId, $params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `deleteExternalAccount($parentId, $id, $params = null, $opts = null)`
- `deletePerson($parentId, $id, $params = null, $opts = null)`
- `reject($id, $params = null, $opts = null)`
- `retrieveCapability($parentId, $id, $params = null, $opts = null)`
- `retrieveExternalAccount($parentId, $id, $params = null, $opts = null)`
- `retrievePerson($parentId, $id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `updateCapability($parentId, $id, $params = null, $opts = null)`
- `updateExternalAccount($parentId, $id, $params = null, $opts = null)`
- `updatePerson($parentId, $id, $params = null, $opts = null)`
- `retrieve($id = null, $params = null, $opts = null)`

