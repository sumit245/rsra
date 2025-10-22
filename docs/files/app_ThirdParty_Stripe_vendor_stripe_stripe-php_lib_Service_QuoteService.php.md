# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\QuoteService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\QuoteService.php`
- Type: PHP
- Size: 5882 bytes

## Summary (from docblocks)

Accepts the specified quote.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

Returns a list of your quotes.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Quote>

When retrieving a quote, there is an includable <a
href="https://stripe.com/docs/api/quotes/object#quote_object-computed-upfront-line_items"><strong>computed.upfront.line_items</strong></a>
property containing the first handful of those items. There is also a URL where
you can retrieve the full (paginated) list of upfront line items.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\LineItem>

When retrieving a quote, there is an includable <strong>line_items</strong>
property containing the first handful of those items. There is also a URL where
you can retrieve the full (paginated) list of line items.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\LineItem>

Cancels the quote.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

A quote models prices and services for a customer. Default options for
<code>header</code>, <code>description</code>, <code>footer</code>, and
<code>expires_at</code> can be set in the dashboard via the <a
href="https://dashboard.stripe.com/settings/billing/quote">quote template</a>.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

Finalizes the quote.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

Retrieves the quote with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

A quote models prices and services for a customer.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Quote

Download the PDF for a finalized quote.
@param string $id
@param callable $readBodyChunkCallable
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\QuoteService.php`

**Classes**:
- `Stripe\Service\QuoteService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `accept($id, $params = null, $opts = null)`
- `all($params = null, $opts = null)`
- `allComputedUpfrontLineItems($id, $params = null, $opts = null)`
- `allLineItems($id, $params = null, $opts = null)`
- `cancel($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `finalizeQuote($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `pdf($id, $readBodyChunkCallable, $params = null, $opts = null)`

