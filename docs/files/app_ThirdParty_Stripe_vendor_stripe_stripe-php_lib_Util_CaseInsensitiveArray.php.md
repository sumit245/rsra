# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\CaseInsensitiveArray.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\CaseInsensitiveArray.php`
- Type: PHP
- Size: 2256 bytes

## Summary (from docblocks)

CaseInsensitiveArray is an array-like class that ignores case for keys.
It is used to store HTTP headers. Per RFC 2616, section 4.2:
Each header field consists of a name followed by a colon (":") and the field value. Field names
are case-insensitive.
In the context of stripe-php, this is useful because the API will return headers with different
case depending on whether HTTP/2 is used or not (with HTTP/2, headers are always in lowercase).

@return int

@return \ArrayIterator

@return void

@return bool

@return void

@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\CaseInsensitiveArray.php`

**Classes**:
- `Stripe\Util\that`
- `Stripe\Util\CaseInsensitiveArray implements \ArrayAccess, \Countable, \IteratorAggregate`

**Functions/Methods**:
- `__construct($initial_array = [])`
- `count()`
- `getIterator()`
- `offsetSet($offset, $value)`
- `offsetExists($offset)`
- `offsetUnset($offset)`
- `offsetGet($offset)`
- `maybeLowercase($v)`

