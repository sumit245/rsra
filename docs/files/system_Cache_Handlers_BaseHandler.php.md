# system\Cache\Handlers\BaseHandler.php

- Path: `system\Cache\Handlers\BaseHandler.php`
- Type: PHP
- Size: 3140 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base class for cache handling

Reserved characters that cannot be used in a key or tag. May be overridden by the config.
From https://github.com/symfony/cache-contracts/blob/c0446463729b89dd4fa62e9aeecc80287323615d/ItemInterface.php#L43
@deprecated in favor of the Cache config

Maximum key length.

Prefix to apply to cache keys.
May not be used by all handlers.
@var string

Validates a cache key according to PSR-6.
Keys that exceed MAX_KEY_LENGTH are hashed.
From https://github.com/symfony/cache/blob/7b024c6726af21fd4984ac8d1eae2b9f3d90de88/CacheItem.php#L158
@param string $key    The key to validate
@param string $prefix Optional prefix to include in length calculations
@throws InvalidArgumentException When $key is not valid

Get an item from the cache, or execute the given Closure and store the result.
@param string  $key      Cache item name
@param int     $ttl      Time to live
@param Closure $callback Callback return value
@return mixed

Deletes items from the cache store matching a given pattern.
@param string $pattern Cache items glob-style pattern
@throws Exception

## References

**Database Tables (inferred)**
- `https`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Cache\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\for`
- `CodeIgniter\Cache\Handlers\BaseHandler implements CacheInterface`

**Functions/Methods**:
- `validateKey($key, $prefix = '')`
- `remember(string $key, int $ttl, Closure $callback)`
- `deleteMatching(string $pattern)`

