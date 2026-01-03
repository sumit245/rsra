# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Memory.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Memory.php`
- Type: PHP
- Size: 2261 bytes

## Summary (from docblocks)

This is the default implementation for in-memory cell collection.
Alternatives implementation should leverage off-memory, non-volatile storage
to reduce overall memory usage.

@return bool

@param string $key
@return bool

@param iterable $keys
@return bool

@param string $key
@param mixed  $default
@return mixed

@param iterable $keys
@param mixed    $default
@return iterable

@param string $key
@return bool

@param string                 $key
@param mixed                  $value
@param null|DateInterval|int $ttl
@return bool

@param iterable               $values
@param null|DateInterval|int $ttl
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Memory.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Collection\Memory implements CacheInterface`

**Functions/Methods**:
- `clear()`
- `delete($key)`
- `deleteMultiple($keys)`
- `get($key, $default = null)`
- `getMultiple($keys, $default = null)`
- `has($key)`
- `set($key, $value, $ttl = null)`
- `setMultiple($values, $ttl = null)`

