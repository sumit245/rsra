# system\Cookie\CookieStore.php

- Path: `system\Cookie\CookieStore.php`
- Type: PHP
- Size: 6341 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The CookieStore object represents an immutable collection of `Cookie` value objects.
@implements IteratorAggregate<string, Cookie>

The cookie collection.
@var array<string, Cookie>

Creates a CookieStore from an array of `Set-Cookie` headers.
@param string[] $headers
@throws CookieException
@return static

@var Cookie[] $cookies

@param Cookie[] $cookies
@throws CookieException

Checks if a `Cookie` object identified by name and
prefix is present in the collection.

Retrieves an instance of `Cookie` identified by a name and prefix.
This throws an exception if not found.
@throws CookieException

Store a new cookie and return a new collection. The original collection
is left unchanged.
@return static

Removes a cookie from a collection and returns an updated collection.
The original collection is left unchanged.
Removing a cookie from the store **DOES NOT** delete it from the browser.
If you intend to delete a cookie *from the browser*, you must put an empty
value cookie with the same name to the store.
@return static

Dispatches all cookies in store.
@deprecated Response should dispatch cookies.

Returns all cookie instances in store.
@return array<string, Cookie>

Clears the cookie collection.

Gets the Cookie count in this collection.

Gets the iterator for the cookie collection.
@return Traversable<string, Cookie>

Validates all cookies passed to be instances of Cookie.
@throws CookieException

Extracted call to `setrawcookie()` in order to run unit tests on it.
@codeCoverageIgnore
@deprecated

Extracted call to `setcookie()` in order to run unit tests on it.
@codeCoverageIgnore
@deprecated

## References

**Database Tables (inferred)**
- `an`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cookie\CookieStore.php`

**Classes**:
- `CodeIgniter\Cookie\CookieStore implements Countable, IteratorAggregate`

**Functions/Methods**:
- `fromCookieHeaders(array $headers, bool $raw = false)`
- `__construct(array $cookies)`
- `has(string $name, string $prefix = '', ?string $value = null)`
- `get(string $name, string $prefix = '')`
- `put(Cookie $cookie)`
- `remove(string $name, string $prefix = '')`
- `dispatch()`
- `display()`
- `clear()`
- `count()`
- `getIterator()`
- `validateCookies(array $cookies)`
- `setRawCookie(string $name, string $value, array $options)`
- `setCookie(string $name, string $value, array $options)`

