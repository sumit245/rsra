# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ReaderService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ReaderService.php`
- Type: PHP
- Size: 4720 bytes

## Summary (from docblocks)

Returns a list of <code>Reader</code> objects.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Terminal\Reader>

Cancels the current reader action.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Creates a new <code>Reader</code> object.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Deletes a <code>Reader</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Initiates a payment flow on a Reader.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Initiates a setup intent flow on a Reader.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Retrieves a <code>Reader</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Sets reader display to show cart details.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

Updates a <code>Reader</code> object by setting the values of the parameters
passed. Any parameters not provided will be left unchanged.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Terminal\Reader

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Terminal\ReaderService.php`

**Classes**:
- `Stripe\Service\Terminal\ReaderService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `cancelAction($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `processPaymentIntent($id, $params = null, $opts = null)`
- `processSetupIntent($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `setReaderDisplay($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

