# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Util.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Util.php`
- Type: PHP
- Size: 5139 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Utility functions
@author Anthon Pang <anthon.pang@gmail.com>
@internal

Asserts that `value` falls within `range` (inclusive), leaving
room for slight floating-point errors.
@param string       $name  The name of the value. Used in the error message.
@param Range        $range Range of values.
@param array|Number $value The value to check.
@param string       $unit  The unit of the value. Used in error reporting.
@return mixed `value` adjusted to fall within range, if it was outside by a floating-point margin.
@throws \ScssPhp\ScssPhp\Exception\RangeException

Encode URI component
@param string $string
@return string

mb_chr() wrapper
@param int $code
@return string

mb_strlen() wrapper
@param string $string
@return int

mb_substr() wrapper
@param string $string
@param int $start
@param null|int $length
@return string

mb_strpos wrapper
@param string $haystack
@param string $needle
@param int $offset
@return int|false

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Util.php`

**Classes**:
- `ScssPhp\ScssPhp\Util`

**Functions/Methods**:
- `checkRange($name, Range $range, $value, $unit = '')`
- `encodeURIComponent($string)`
- `mbChr($code)`
- `mbStrlen($string)`
- `mbSubstr($string, $start, $length = null)`
- `mbStrpos($haystack, $needle, $offset = 0)`

