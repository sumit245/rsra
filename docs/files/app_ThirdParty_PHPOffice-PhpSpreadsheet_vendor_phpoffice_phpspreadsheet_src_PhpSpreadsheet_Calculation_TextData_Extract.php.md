# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Extract.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Extract.php`
- Type: PHP
- Size: 3564 bytes

## Summary (from docblocks)

LEFT.
@param mixed $value String value from which to extract characters
                        Or can be an array of values
@param mixed $chars The number of characters to extract (as an integer)
                        Or can be an array of values
@return array|string The joined string
        If an array of values is passed for the $value or $chars arguments, then the returned result
           will also be an array with matching dimensions

MID.
@param mixed $value String value from which to extract characters
                        Or can be an array of values
@param mixed $start Integer offset of the first character that we want to extract
                        Or can be an array of values
@param mixed $chars The number of characters to extract (as an integer)
                        Or can be an array of values
@return array|string The joined string
        If an array of values is passed for the $value, $start or $chars arguments, then the returned result
           will also be an array with matching dimensions

RIGHT.
@param mixed $value String value from which to extract characters
                        Or can be an array of values
@param mixed $chars The number of characters to extract (as an integer)
                        Or can be an array of values
@return array|string The joined string
        If an array of values is passed for the $value or $chars arguments, then the returned result
           will also be an array with matching dimensions

## References

**Database Tables (inferred)**
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Extract.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData\Extract`

**Functions/Methods**:
- `left($value, $chars = 1)`
- `mid($value, $start, $chars)`
- `right($value, $chars = 1)`

