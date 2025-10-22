# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Random.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Random.php`
- Type: PHP
- Size: 3334 bytes

## Summary (from docblocks)

RAND.
@return float Random number

RANDBETWEEN.
@param mixed $min Minimal value
                     Or can be an array of values
@param mixed $max Maximal value
                     Or can be an array of values
@return array|float|int|string Random number
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

RANDARRAY.
Generates a list of sequential numbers in an array.
Excel Function:
     RANDARRAY([rows],[columns],[start],[step])
@param mixed $rows the number of rows to return, defaults to 1
@param mixed $columns the number of columns to return, defaults to 1
@param mixed $min the minimum number to be returned, defaults to 0
@param mixed $max the maximum number to be returned, defaults to 1
@param bool $wholeNumber the type of numbers to return:
                            False - Decimal numbers to 15 decimal places. (default)
                            True - Whole (integer) numbers
@return array|string The resulting array, or a string containing an error

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Random.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Random`

**Functions/Methods**:
- `rand()`
- `randBetween($min, $max)`
- `randArray($rows = 1, $columns = 1, $min = 0, $max = 1, $wholeNumber = false)`

