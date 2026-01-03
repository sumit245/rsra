# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Text.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Text.php`
- Type: PHP
- Size: 2435 bytes

## Summary (from docblocks)

LEN.
@param mixed $value String Value
                        Or can be an array of values
@return array|int
        If an array of values is passed for the argument, then the returned result
           will also be an array with matching dimensions

Compares two text strings and returns TRUE if they are exactly the same, FALSE otherwise.
EXACT is case-sensitive but ignores formatting differences.
Use EXACT to test text being entered into a document.
@param mixed $value1 String Value
                        Or can be an array of values
@param mixed $value2 String Value
                        Or can be an array of values
@return array|bool
        If an array of values is passed for either of the arguments, then the returned result
           will also be an array with matching dimensions

RETURNSTRING.
@param mixed $testValue Value to check
                        Or can be an array of values
@return null|array|string
        If an array of values is passed for the argument, then the returned result
           will also be an array with matching dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData\Text.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData\Text`

**Functions/Methods**:
- `length($value = '')`
- `exact($value1, $value2)`
- `test($testValue = '')`

