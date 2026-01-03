# system\Test\Mock\MockCache.php

- Path: `system\Test\Mock\MockCache.php`
- Type: PHP
- Size: 7327 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Mock cache storage.
@var array

Expiration times.
@var ?int[]

If true, will not cache any data.
@var bool

Takes care of any handler-specific setup that must be done.

Attempts to fetch an item from the cache store.
@param string $key Cache item name
@return mixed

Get an item from the cache, or execute the given Closure and store the result.
@return mixed

Saves an item to the cache store.
The $raw parameter is only utilized by Mamcache in order to
allow usage of increment() and decrement().
@param string $key   Cache item name
@param mixed  $value the data to save
@param int    $ttl   Time To Live, in seconds (default 60)
@param bool   $raw   Whether to store the raw value.
@return bool

Deletes a specific item from the cache store.
@return bool

Deletes items from the cache store matching a given pattern.
@return int

Performs atomic incrementation of a raw stored value.
@return bool

Performs atomic decrementation of a raw stored value.
@return bool

Will delete all items in the entire cache.
@return bool

Returns information on the entire cache.
The information returned and the structure of the data
varies depending on the handler.
@return string[] Keys currently present in the store

Returns detailed information about the specific item in the cache.
@return array|null Returns null if the item does not exist, otherwise array<string, mixed>
                   with at least the 'expire' key for absolute epoch expiry (or null).

Determine if the driver is supported on this system.

Instructs the class to ignore all
requests to cache an item, and always "miss"
when checked for existing data.
@return $this

Asserts that the cache has an item named $key.
The value is not checked since storing false or null
values is valid.

Asserts that the cache has an item named $key with a value matching $value.
@param mixed $value

Asserts that the cache does NOT have an item named $key.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Mock\MockCache.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockCache extends BaseHandler implements CacheInterface`
- `CodeIgniter\Test\Mock\to`

**Functions/Methods**:
- `initialize()`
- `get(string $key)`
- `remember(string $key, int $ttl, Closure $callback)`
- `save(string $key, $value, int $ttl = 60, bool $raw = false)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`
- `bypass(bool $bypass = true)`
- `assertHas(string $key)`
- `assertHasValue(string $key, $value = null)`
- `assertMissing(string $key)`

