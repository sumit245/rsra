# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportTypeService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportTypeService.php`
- Type: PHP
- Size: 1245 bytes

## Summary (from docblocks)

Returns a full list of Report Types.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Reporting\ReportType>

Retrieves the details of a Report Type. (Certain report types require a <a
href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.).
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Reporting\ReportType

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportTypeService.php`

**Classes**:
- `Stripe\Service\Reporting\ReportTypeService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

