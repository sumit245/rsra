# system\Cache\Handlers\MemcachedHandler.php

- Path: `system\Cache\Handlers\MemcachedHandler.php`
- Type: PHP
- Size: 7149 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Mamcached cache handler

The memcached object
@var Memcache|Memcached

Memcached Configuration
@var array

Closes the connection to Memcache(d) if present.

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `system\Cache\Handlers\MemcachedHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\MemcachedHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `__destruct()`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

