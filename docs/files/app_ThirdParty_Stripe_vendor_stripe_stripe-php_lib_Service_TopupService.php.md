# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TopupService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TopupService.php`
- Type: PHP
- Size: 2643 bytes

## Summary (from docblocks)

Returns a list of top-ups.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Topup>

Cancels a top-up. Only pending top-ups can be canceled.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Topup

Top up the balance of an account.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Topup

Retrieves the details of a top-up that has previously been created. Supply the
unique top-up ID that was returned from your previous request, and Stripe will
return the corresponding top-up information.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Topup

Updates the metadata of a top-up. Other top-up details are not editable by
design.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Topup

## References

**Database Tables (inferred)**
- `our`
- `your`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TopupService.php`

**Classes**:
- `Stripe\Service\TopupService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

