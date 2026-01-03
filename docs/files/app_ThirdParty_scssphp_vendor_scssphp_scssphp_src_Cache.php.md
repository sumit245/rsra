# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Cache.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Cache.php`
- Type: PHP
- Size: 6843 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

The scss cache manager.
In short:
allow to put in cache/get from cache a generic result from a known operation on a generic dataset,
taking in account options that affects the result
The cache manager is agnostic about data format and only the operation is expected to be described by string

SCSS cache
@author Cedric Morin <cedric@yterium.com>
@internal

directory used for storing data
@var string|false

prefix for the storing data
@var string

force a refresh : 'once' for refreshing the first hit on a cache only, true to never use the cache in this hit
@var bool|string

specifies the number of seconds after which data cached will be seen as 'garbage' and potentially cleaned up
@var int

array of already refreshed cache if $forceRefresh==='once'
@var array<string, bool>

Constructor
@param array $options
@phpstan-param array{cacheDir?: string, prefix?: string, forceRefresh?: string} $options

Get the cached result of $operation on $what,
which is known as dependant from the content of $options
@param string   $operation    parse, compile...
@param mixed    $what         content key (e.g., filename to be treated)
@param array    $options      any option that affect the operation result on the content
@param int|null $lastModified last modified timestamp
@return mixed
@throws \Exception

Put in cache the result of $operation on $what,
which is known as dependant from the content of $options
@param string $operation
@param mixed  $what
@param mixed  $value
@param array  $options
@return void

Get the cache name for the caching of $operation on $what,
which is known as dependant from the content of $options
@param string $operation
@param mixed  $what
@param array  $options
@return string

Check that the cache dir exists and is writeable
@return void
@throws \Exception

Delete unused cached files
@return void

## References

**Database Tables (inferred)**
- `cache`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Cache.php`

**Classes**:
- `ScssPhp\ScssPhp\Cache`

**Functions/Methods**:
- `__construct($options)`
- `getCache($operation, $what, $options = [], $lastModified = null)`
- `setCache($operation, $what, $value, $options = [])`
- `cacheName($operation, $what, $options = [])`
- `checkCacheDir()`
- `cleanCache()`

