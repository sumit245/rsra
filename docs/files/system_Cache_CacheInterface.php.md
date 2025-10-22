# system\Cache\CacheInterface.php

- Path: `system\Cache\CacheInterface.php`
- Type: PHP
- Size: 2752 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Cache interface

Takes care of any handler-specific setup that must be done.

Attempts to fetch an item from the cache store.
@param string $key Cache item name
@return mixed

Saves an item to the cache store.
@param string $key   Cache item name
@param mixed  $value The data to save
@param int    $ttl   Time To Live, in seconds (default 60)
@return bool Success or failure

Deletes a specific item from the cache store.
@param string $key Cache item name
@return bool Success or failure

Performs atomic incrementation of a raw stored value.
@param string $key    Cache ID
@param int    $offset Step/value to increase by
@return mixed

Performs atomic decrementation of a raw stored value.
@param string $key    Cache ID
@param int    $offset Step/value to increase by
@return mixed

Will delete all items in the entire cache.
@return bool Success or failure

Returns information on the entire cache.
The information returned and the structure of the data
varies depending on the handler.
@return mixed

Returns detailed information about the specific item in the cache.
@param string $key Cache item name.
@return array|false|null
                         Returns null if the item does not exist, otherwise array<string, mixed>
                         with at least the 'expire' key for absolute epoch expiry (or null).
                         Some handlers may return false when an item does not exist, which is deprecated.

Determines if the driver is supported on this system.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cache\CacheInterface.php`

**Functions/Methods**:
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

