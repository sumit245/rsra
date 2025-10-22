# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SearchResult.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SearchResult.php`
- Type: PHP
- Size: 6552 bytes

## Summary (from docblocks)

Search results for an API resource.
This behaves similarly to <code>Collection</code> in that they both wrap
around a list of objects and provide pagination. However the
<code>SearchResult</code> object paginates by relying on a
<code>next_page</code> token included in the response rather than using
object IDs and a <code>starting_before</code>/<code>ending_after</code>
parameter. Thus, <code>SearchResult</code> only supports forwards pagination.
The {@see $total_count} property is only available when
the `expand` parameter contains `total_count`.
@template TStripeObject of StripeObject
@template-implements \IteratorAggregate<TStripeObject>
@property string $object
@property string $url
@property string $next_page
@property int $total_count
@property bool $has_more
@property TStripeObject[] $data

@var array

@return string the base URL for the given class

Returns the filters.
@return array the filters

Sets the filters, removing paging options.
@param array $filters the filters

@return mixed

@param null|array $params
@param null|array|string $opts
@throws Exception\ApiErrorException
@return SearchResult<TStripeObject>

@return int the number of objects in the current page

@return \ArrayIterator an iterator that can be used to iterate
   across objects in the current page

@return \Generator|TStripeObject[] A generator that can be used to
   iterate across all objects across all pages. As page boundaries are
   encountered, the next page will be fetched automatically for
   continued iteration.

Returns an empty set of search results. This is returned from
{@see nextPage()} when we know that there isn't a next page in order to
replicate the behavior of the API when it attempts to return a page
beyond the last.
@param null|array|string $opts
@return SearchResult

Returns true if the page object contains no element.
@return bool

Fetches the next page in the resource list (if there is one).
This method will try to respect the limit of the current page. If none
was given, the default limit will be fetched again.
@param null|array $params
@param null|array|string $opts
@return SearchResult<TStripeObject>

Gets the first item from the current page. Returns `null` if the current page is empty.
@return null|TStripeObject

Gets the last item from the current page. Returns `null` if the current page is empty.
@return null|TStripeObject

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SearchResult.php`

**Classes**:
- `Stripe\SearchResult extends StripeObject implements \Countable, \IteratorAggregate`

**Functions/Methods**:
- `baseUrl()`
- `getFilters()`
- `setFilters($filters)`
- `offsetGet($k)`
- `all($params = null, $opts = null)`
- `count()`
- `getIterator()`
- `autoPagingIterator()`
- `emptySearchResult($opts = null)`
- `isEmpty()`
- `nextPage($params = null, $opts = null)`
- `first()`
- `last()`
- `extractPathAndUpdateParams($params)`

