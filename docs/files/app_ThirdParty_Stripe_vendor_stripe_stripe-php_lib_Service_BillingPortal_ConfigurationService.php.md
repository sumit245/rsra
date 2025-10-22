# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BillingPortal\ConfigurationService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BillingPortal\ConfigurationService.php`
- Type: PHP
- Size: 2346 bytes

## Summary (from docblocks)

Returns a list of configurations that describe the functionality of the customer
portal.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BillingPortal\Configuration>

Creates a configuration that describes the functionality and behavior of a
PortalSession.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BillingPortal\Configuration

Retrieves a configuration that describes the functionality of the customer
portal.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BillingPortal\Configuration

Updates a configuration that describes the functionality of the customer portal.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BillingPortal\Configuration

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\BillingPortal\ConfigurationService.php`

**Classes**:
- `Stripe\Service\BillingPortal\ConfigurationService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

