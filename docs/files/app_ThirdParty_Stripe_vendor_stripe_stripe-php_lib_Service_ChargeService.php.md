# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ChargeService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ChargeService.php`
- Type: PHP
- Size: 4566 bytes

## Summary (from docblocks)

Returns a list of charges you’ve previously created. The charges are returned in
sorted order, with the most recent charges appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Charge>

Capture the payment of an existing, uncaptured, charge. This is the second half
of the two-step payment flow, where first you <a href="#create_charge">created a
charge</a> with the capture option set to false.
Uncaptured payments expire a set number of days after they are created (<a
href="/docs/charges/placing-a-hold">7 by default</a>). If they are not captured
by that point in time, they will be marked as refunded and will no longer be
capturable.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Charge

To charge a credit card or other payment source, you create a
<code>Charge</code> object. If your API key is in test mode, the supplied
payment source (e.g., card) won’t actually be charged, although everything else
will occur as if in live mode. (Stripe assumes that the charge would have
completed successfully).
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Charge

Retrieves the details of a charge that has previously been created. Supply the
unique charge ID that was returned from your previous request, and Stripe will
return the corresponding charge information. The same information is returned
when creating or refunding the charge.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Charge

Search for charges you’ve previously created using Stripe’s <a
href="/docs/search#search-query-language">Search Query Language</a>. Don’t use
search in read-after-write flows where strict consistency is necessary. Under
normal operating conditions, data is searchable in less than a minute.
Occasionally, propagation of new or updated data can be up to an hour behind
during outages. Search functionality is not available to merchants in India.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<\Stripe\Charge>

Updates the specified charge by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Charge

## References

**Database Tables (inferred)**
- `our`
- `your`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ChargeService.php`

**Classes**:
- `Stripe\Service\ChargeService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `capture($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `search($params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

