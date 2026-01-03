# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportRunService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportRunService.php`
- Type: PHP
- Size: 1737 bytes

## Summary (from docblocks)

Returns a list of Report Runs, with the most recent appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Reporting\ReportRun>

Creates a new object and begin running the report. (Certain report types require
a <a href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.).
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Reporting\ReportRun

Retrieves the details of an existing Report Run.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Reporting\ReportRun

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Reporting\ReportRunService.php`

**Classes**:
- `Stripe\Service\Reporting\ReportRunService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

