# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PlanService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PlanService.php`
- Type: PHP
- Size: 2776 bytes

## Summary (from docblocks)

Returns a list of your plans.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Plan>

You can now model subscriptions more flexibly using the <a href="#prices">Prices
API</a>. It replaces the Plans API and is backwards compatible to simplify your
migration.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Plan

Deleting plans means new subscribers can’t be added. Existing subscribers aren’t
affected.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Plan

Retrieves the plan with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Plan

Updates the specified plan by setting the values of the parameters passed. Any
parameters not provided are left unchanged. By design, you cannot change a
plan’s ID, amount, currency, or billing cycle.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Plan

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\PlanService.php`

**Classes**:
- `Stripe\Service\PlanService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

