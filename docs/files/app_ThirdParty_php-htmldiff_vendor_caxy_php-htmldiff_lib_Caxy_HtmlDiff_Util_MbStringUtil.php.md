# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Util\MbStringUtil.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Util\MbStringUtil.php`
- Type: PHP
- Size: 1551 bytes

## Summary (from docblocks)

Using multi-byte functions have a huge performance impact on the diff algorithm.
Therefor we added this wrapper around common string function that only uses mb_* functions if they
are necessary for the data-set we are processing.

@var bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Util\MbStringUtil.php`

**Classes**:
- `Caxy\HtmlDiff\Util\MbStringUtil`

**Functions/Methods**:
- `__construct($oldText, $newText)`
- `strlen($string)`
- `strpos($haystack, $needle, $offset = 0)`
- `stripos($haystack, $needle, $offset = 0)`
- `substr($string, $start, $length = null)`

