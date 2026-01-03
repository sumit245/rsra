# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\DiffCache.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\DiffCache.php`
- Type: PHP
- Size: 2182 bytes

## Summary (from docblocks)

Class DiffCache.

@var Cache

DiffCache constructor.
@param Cache $cacheProvider

@return Cache

@param Cache $cacheProvider
@return DiffCache

@param string $oldText
@param string $newText
@return bool

@param string $oldText
@param string $newText
@return string

@param string $oldText
@param string $newText
@param string $data
@param int    $lifeTime
@return bool

@param string $oldText
@param string $newText
@return bool

@return array|null

@param string $oldText
@param string $newText
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\DiffCache.php`

**Classes**:
- `Caxy\HtmlDiff\DiffCache`

**Functions/Methods**:
- `__construct(Cache $cacheProvider)`
- `getCacheProvider()`
- `setCacheProvider($cacheProvider)`
- `contains($oldText, $newText)`
- `fetch($oldText, $newText)`
- `save($oldText, $newText, $data, $lifeTime = 0)`
- `delete($oldText, $newText)`
- `getStats()`
- `getHashKey($oldText, $newText)`

