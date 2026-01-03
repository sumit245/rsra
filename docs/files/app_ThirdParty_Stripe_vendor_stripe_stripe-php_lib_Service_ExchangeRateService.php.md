# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ExchangeRateService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ExchangeRateService.php`
- Type: PHP
- Size: 1265 bytes

## Summary (from docblocks)

Returns a list of objects that contain the rates at which foreign currencies are
converted to one another. Only shows the currencies for which Stripe supports.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\ExchangeRate>

Retrieves the exchange rates from the given currency to every supported
currency.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\ExchangeRate

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\ExchangeRateService.php`

**Classes**:
- `Stripe\Service\ExchangeRateService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

