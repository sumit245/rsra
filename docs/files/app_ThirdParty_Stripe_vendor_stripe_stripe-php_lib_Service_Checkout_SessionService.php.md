# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Checkout\SessionService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Checkout\SessionService.php`
- Type: PHP
- Size: 2952 bytes

## Summary (from docblocks)

Returns a list of Checkout Sessions.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Checkout\Session>

When retrieving a Checkout Session, there is an includable
<strong>line_items</strong> property containing the first handful of those
items. There is also a URL where you can retrieve the full (paginated) list of
line items.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\LineItem>

Creates a Session object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Checkout\Session

A Session can be expired when it is in one of these statuses: <code>open</code>.
After it expires, a customer can’t complete a Session and customers loading the
Session see a message saying the Session is expired.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Checkout\Session

Retrieves a Session object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Checkout\Session

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Checkout\SessionService.php`

**Classes**:
- `Stripe\Service\Checkout\SessionService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allLineItems($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `expire($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

