# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceItemService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceItemService.php`
- Type: PHP
- Size: 3051 bytes

## Summary (from docblocks)

Returns a list of your invoice items. Invoice items are returned sorted by
creation date, with the most recently created invoice items appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\InvoiceItem>

Creates an item to be added to a draft invoice (up to 250 items per invoice). If
no invoice is specified, the item will be on the next invoice created for the
customer specified.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\InvoiceItem

Deletes an invoice item, removing it from an invoice. Deleting invoice items is
only possible when they’re not attached to invoices, or if it’s attached to a
draft invoice.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\InvoiceItem

Retrieves the invoice item with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\InvoiceItem

Updates the amount or description of an invoice item on an upcoming invoice.
Updating an invoice item is only possible before the invoice it’s attached to is
closed.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\InvoiceItem

## References

**Database Tables (inferred)**
- `our`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceItemService.php`

**Classes**:
- `Stripe\Service\InvoiceItemService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

