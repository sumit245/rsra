# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\ExcelMatch.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\ExcelMatch.php`
- Type: PHP
- Size: 7504 bytes

## Summary (from docblocks)

MATCH.
The MATCH function searches for a specified item in a range of cells
Excel Function:
       =MATCH(lookup_value, lookup_array, [match_type])
@param mixed $lookupValue The value that you want to match in lookup_array
@param mixed $lookupArray The range of cells being searched
@param mixed $matchType The number -1, 0, or 1. -1 means above, 0 means exact match, 1 means below.
                        If match_type is 1 or -1, the list has to be ordered.
@return array|int|string The relative position of the found item

## References

**Database Tables (inferred)**
- `last`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\ExcelMatch.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\ExcelMatch`

**Functions/Methods**:
- `MATCH($lookupValue, $lookupArray, $matchType = self::MATCHTYPE_LARGEST_VALUE)`
- `matchFirstValue($lookupArray, $lookupValue)`
- `matchLargestValue($lookupArray, $lookupValue, $keySet)`
- `matchSmallestValue($lookupArray, $lookupValue)`
- `validateLookupValue($lookupValue)`
- `validateMatchType($matchType)`
- `validateLookupArray($lookupArray)`
- `prepareLookupArray($lookupArray, $matchType)`

