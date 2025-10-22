# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Issuing\CardService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Issuing\CardService.php`
- Type: PHP
- Size: 2509 bytes

## Summary (from docblocks)

Updates the shipping status of the specified Issuing <code>Card</code> object to
<code>delivered</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

Updates the shipping status of the specified Issuing <code>Card</code> object to
<code>failure</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

Updates the shipping status of the specified Issuing <code>Card</code> object to
<code>returned</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

Updates the shipping status of the specified Issuing <code>Card</code> object to
<code>shipped</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Card

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\TestHelpers\Issuing\CardService.php`

**Classes**:
- `Stripe\Service\TestHelpers\Issuing\CardService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `deliverCard($id, $params = null, $opts = null)`
- `failCard($id, $params = null, $opts = null)`
- `returnCard($id, $params = null, $opts = null)`
- `shipCard($id, $params = null, $opts = null)`

