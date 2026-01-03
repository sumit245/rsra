# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Collection.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Collection.php`
- Type: PHP
- Size: 8507 bytes

## Summary (from docblocks)

Class Collection.
@template TStripeObject of StripeObject
@template-implements \IteratorAggregate<TStripeObject>
@property string $object
@property string $url
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
@return Collection<TStripeObject>

@param null|array $params
@param null|array|string $opts
@throws Exception\ApiErrorException
@return TStripeObject

@param string $id
@param null|array $params
@param null|array|string $opts
@throws Exception\ApiErrorException
@return TStripeObject

@return int the number of objects in the current page

@return \ArrayIterator an iterator that can be used to iterate
   across objects in the current page

@return \ArrayIterator an iterator that can be used to iterate
   backwards across objects in the current page

@return \Generator|TStripeObject[] A generator that can be used to
   iterate across all objects across all pages. As page boundaries are
   encountered, the next page will be fetched automatically for
   continued iteration.

Returns an empty collection. This is returned from {@see nextPage()}
when we know that there isn't a next page in order to replicate the
behavior of the API when it attempts to return a page beyond the last.
@param null|array|string $opts
@return Collection

Returns true if the page object contains no element.
@return bool

Fetches the next page in the resource list (if there is one).
This method will try to respect the limit of the current page. If none
was given, the default limit will be fetched again.
@param null|array $params
@param null|array|string $opts
@return Collection<TStripeObject>

Fetches the previous page in the resource list (if there is one).
This method will try to respect the limit of the current page. If none
was given, the default limit will be fetched again.
@param null|array $params
@param null|array|string $opts
@return Collection<TStripeObject>

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

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Collection.php`

**Classes**:
- `Stripe\Collection extends StripeObject implements \Countable, \IteratorAggregate`

**Functions/Methods**:
- `baseUrl()`
- `getFilters()`
- `setFilters($filters)`
- `offsetGet($k)`
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `count()`
- `getIterator()`
- `getReverseIterator()`
- `autoPagingIterator()`
- `emptyCollection($opts = null)`
- `isEmpty()`
- `nextPage($params = null, $opts = null)`
- `previousPage($params = null, $opts = null)`
- `first()`
- `last()`
- `extractPathAndUpdateParams($params)`

