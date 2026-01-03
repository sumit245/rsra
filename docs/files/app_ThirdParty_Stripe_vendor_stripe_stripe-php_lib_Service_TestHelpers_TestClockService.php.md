# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\TestClockService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\TestClockService.php`
- Type: PHP
- Size: 2701 bytes

## Summary (from docblocks)

Starts advancing a test clock to a specified time in the future. Advancement is
done when status changes to <code>Ready</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TestHelpers\TestClock

Returns a list of your test clocks.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\TestHelpers\TestClock>

Creates a new test clock that can be attached to new customers and quotes.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TestHelpers\TestClock

Deletes a test clock.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TestHelpers\TestClock

Retrieves a test clock.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TestHelpers\TestClock

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\TestClockService.php`

**Classes**:
- `Stripe\Service\TestHelpers\TestClockService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `advance($id, $params = null, $opts = null)`
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

