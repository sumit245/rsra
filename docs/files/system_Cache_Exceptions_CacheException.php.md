# system\Cache\Exceptions\CacheException.php

- Path: `system\Cache\Exceptions\CacheException.php`
- Type: PHP
- Size: 1459 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CacheException

Thrown when handler has no permission to write cache.
@return CacheException

Thrown when an unrecognized handler is used.
@return CacheException

Thrown when no backup handler is setup in config.
@return CacheException

Thrown when specified handler was not found.
@return CacheException

## Symbols

# Symbols

**Files documented**: 1

## `system\Cache\Exceptions\CacheException.php`

**Classes**:
- `CodeIgniter\Cache\Exceptions\CacheException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forUnableToWrite(string $path)`
- `forInvalidHandlers()`
- `forNoBackup()`
- `forHandlerNotFound()`

