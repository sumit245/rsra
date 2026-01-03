# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CustomerService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CustomerService.php`
- Type: PHP
- Size: 17998 bytes

## Summary (from docblocks)

Returns a list of your customers. The customers are returned sorted by creation
date, with the most recent customers appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Customer>

Returns a list of transactions that updated the customer’s <a
href="/docs/billing/customer/balance">balances</a>.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CustomerBalanceTransaction>

Returns a list of transactions that modified the customer’s <a
href="/docs/payments/customer-balance">cash balance</a>.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CustomerCashBalanceTransaction>

Returns a list of PaymentMethods for a given Customer.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\PaymentMethod>

List sources for a specified customer.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BankAccount|\Stripe\Card|\Stripe\Source>

Returns a list of tax IDs for a customer.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\TaxId>

Creates a new customer object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

Creates an immutable transaction that updates the customer’s credit <a
href="/docs/billing/customer/balance">balance</a>.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

Retrieve funding instructions for a customer cash balance. If funding
instructions do not yet exist for the customer, new funding instructions will be
created. If funding instructions have already been created for a given customer,
the same funding instructions will be retrieved. In other words, we will return
the same funding instructions each time.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

When you create a new credit card, you must specify a customer or recipient on
which to create it.
If the card’s owner has no default card, then the new card will become the
default. However, if the owner already has a default, then it will not change.
To change the default, you should <a href="/docs/api#update_customer">update the
customer</a> to have a new <code>default_source</code>.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

Creates a new <code>TaxID</code> object for a customer.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

Permanently deletes a customer. It cannot be undone. Also immediately cancels
any active subscriptions on the customer.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

Removes the currently applied discount on a customer.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

Deletes an existing <code>TaxID</code> object.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

Retrieves a Customer object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

Retrieves a specific customer balance transaction that updated the customer’s <a
href="/docs/billing/customer/balance">balances</a>.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

Retrieves a customer’s cash balance.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CashBalance

Retrieves a specific cash balance transaction, which updated the customer’s <a
href="/docs/payments/customer-balance">cash balance</a>.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerCashBalanceTransaction

Retrieves a PaymentMethod object for a given Customer.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

Retrieve a specified source for a given customer.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

Retrieves the <code>TaxID</code> object with the given identifier.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

Search for customers you’ve previously created using Stripe’s <a
href="/docs/search#search-query-language">Search Query Language</a>. Don’t use
search in read-after-write flows where strict consistency is necessary. Under
normal operating conditions, data is searchable in less than a minute.
Occasionally, propagation of new or updated data can be up to an hour behind
during outages. Search functionality is not available to merchants in India.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<\Stripe\Customer>

Updates the specified customer by setting the values of the parameters passed.
Any parameters not provided will be left unchanged. For example, if you pass the
<strong>source</strong> parameter, that becomes the customer’s active source
(e.g., a card) to be used for all charges in the future. When you update a
customer to a new valid card source by passing the <strong>source</strong>
parameter: for each of the customer’s current subscriptions, if the subscription
bills automatically and is in the <code>past_due</code> state, then the latest
open invoice for the subscription with automatic collection enabled will be
retried. This retry will not count as an automatic retry, and will not affect
the next regularly scheduled payment for the invoice. Changing the
<strong>default_source</strong> for a customer will not trigger this behavior.
This request accepts mostly the same arguments as the customer creation call.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer

Most credit balance transaction fields are immutable, but you may update its
<code>description</code> and <code>metadata</code>.
@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

Changes the settings on a customer’s cash balance.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CashBalance

@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

@param string $parentId
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CustomerService.php`

**Classes**:
- `Stripe\Service\CustomerService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allBalanceTransactions($parentId, $params = null, $opts = null)`
- `allCashBalanceTransactions($parentId, $params = null, $opts = null)`
- `allPaymentMethods($id, $params = null, $opts = null)`
- `allSources($parentId, $params = null, $opts = null)`
- `allTaxIds($parentId, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `createBalanceTransaction($parentId, $params = null, $opts = null)`
- `createFundingInstructions($id, $params = null, $opts = null)`
- `createSource($parentId, $params = null, $opts = null)`
- `createTaxId($parentId, $params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `deleteDiscount($id, $params = null, $opts = null)`
- `deleteSource($parentId, $id, $params = null, $opts = null)`
- `deleteTaxId($parentId, $id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `retrieveBalanceTransaction($parentId, $id, $params = null, $opts = null)`
- `retrieveCashBalance($parentId, $params = null, $opts = null)`
- `retrieveCashBalanceTransaction($parentId, $id, $params = null, $opts = null)`
- `retrievePaymentMethod($parentId, $id, $params = null, $opts = null)`
- `retrieveSource($parentId, $id, $params = null, $opts = null)`
- `retrieveTaxId($parentId, $id, $params = null, $opts = null)`
- `search($params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `updateBalanceTransaction($parentId, $id, $params = null, $opts = null)`
- `updateCashBalance($parentId, $params = null, $opts = null)`
- `updateSource($parentId, $id, $params = null, $opts = null)`
- `verifySource($parentId, $id, $params = null, $opts = null)`

