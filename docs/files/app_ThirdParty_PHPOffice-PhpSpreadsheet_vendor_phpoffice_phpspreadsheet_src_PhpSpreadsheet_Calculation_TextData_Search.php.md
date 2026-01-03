# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Search.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Search.php`
- Type: PHP
- Size: 3629 bytes

## Summary (from docblocks)

FIND (case sensitive search).
@param mixed $needle The string to look for
                        Or can be an array of values
@param mixed $haystack The string in which to look
                        Or can be an array of values
@param mixed $offset Integer offset within $haystack to start searching from
                        Or can be an array of values
@return array|int|string The offset where the first occurrence of needle was found in the haystack
        If an array of values is passed for the $value or $chars arguments, then the returned result
           will also be an array with matching dimensions

SEARCH (case insensitive search).
@param mixed $needle The string to look for
                        Or can be an array of values
@param mixed $haystack The string in which to look
                        Or can be an array of values
@param mixed $offset Integer offset within $haystack to start searching from
                        Or can be an array of values
@return array|int|string The offset where the first occurrence of needle was found in the haystack
        If an array of values is passed for the $value or $chars arguments, then the returned result
           will also be an array with matching dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Search.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData\Search`

**Functions/Methods**:
- `sensitive($needle, $haystack, $offset = 1)`
- `insensitive($needle, $haystack, $offset = 1)`

