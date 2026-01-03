# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\EarlyFraudWarningService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\EarlyFraudWarningService.php`
- Type: PHP
- Size: 1333 bytes

## Summary (from docblocks)

Returns a list of early fraud warnings.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Radar\EarlyFraudWarning>

Retrieves the details of an early fraud warning that has previously been
created.
Please refer to the <a href="#early_fraud_warning_object">early fraud
warning</a> object reference for more details.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Radar\EarlyFraudWarning

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Radar\EarlyFraudWarningService.php`

**Classes**:
- `Stripe\Service\Radar\EarlyFraudWarningService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

