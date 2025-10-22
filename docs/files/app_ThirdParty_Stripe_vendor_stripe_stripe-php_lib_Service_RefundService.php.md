# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\RefundService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\RefundService.php`
- Type: PHP
- Size: 3018 bytes

## Summary (from docblocks)

Returns a list of all refunds you’ve previously created. The refunds are
returned in sorted order, with the most recent refunds appearing first. For
convenience, the 10 most recent refunds are always available by default on the
charge object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Refund>

Cancels a refund with a status of <code>requires_action</code>.
Refunds in other states cannot be canceled, and only refunds for payment methods
that require customer action will enter the <code>requires_action</code> state.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Refund

Create a refund.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Refund

Retrieves the details of an existing refund.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Refund

Updates the specified refund by setting the values of the parameters passed. Any
parameters not provided will be left unchanged.
This request only accepts <code>metadata</code> as an argument.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Refund

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\RefundService.php`

**Classes**:
- `Stripe\Service\RefundService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

