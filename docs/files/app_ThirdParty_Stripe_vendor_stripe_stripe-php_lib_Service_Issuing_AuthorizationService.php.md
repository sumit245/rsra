# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\AuthorizationService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\AuthorizationService.php`
- Type: PHP
- Size: 3360 bytes

## Summary (from docblocks)

Returns a list of Issuing <code>Authorization</code> objects. The objects are
sorted in descending order by creation date, with the most recently created
object appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Issuing\Authorization>

Approves a pending Issuing <code>Authorization</code> object. This request
should be made within the timeout window of the <a
href="/docs/issuing/controls/real-time-authorizations">real-time
authorization</a> flow.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Authorization

Declines a pending Issuing <code>Authorization</code> object. This request
should be made within the timeout window of the <a
href="/docs/issuing/controls/real-time-authorizations">real time
authorization</a> flow.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Authorization

Retrieves an Issuing <code>Authorization</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Authorization

Updates the specified Issuing <code>Authorization</code> object by setting the
values of the parameters passed. Any parameters not provided will be left
unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Authorization

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\AuthorizationService.php`

**Classes**:
- `Stripe\Service\Issuing\AuthorizationService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `approve($id, $params = null, $opts = null)`
- `decline($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

