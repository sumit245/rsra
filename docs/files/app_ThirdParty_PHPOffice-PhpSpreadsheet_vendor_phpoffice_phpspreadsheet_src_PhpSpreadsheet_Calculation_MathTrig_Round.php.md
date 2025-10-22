# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Round.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Round.php`
- Type: PHP
- Size: 7471 bytes

## Summary (from docblocks)

ROUND.
Returns the result of builtin function round after validating args.
@param mixed $number Should be numeric, or can be an array of numbers
@param mixed $precision Should be int, or can be an array of numbers
@return array|float|string Rounded number
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

ROUNDUP.
Rounds a number up to a specified number of decimal places
@param array|float $number Number to round, or can be an array of numbers
@param array|int $digits Number of digits to which you want to round $number, or can be an array of numbers
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

ROUNDDOWN.
Rounds a number down to a specified number of decimal places
@param array|float $number Number to round, or can be an array of numbers
@param array|int $digits Number of digits to which you want to round $number, or can be an array of numbers
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

MROUND.
Rounds a number to the nearest multiple of a specified value
@param mixed $number Expect float. Number to round, or can be an array of numbers
@param mixed $multiple Expect int. Multiple to which you want to round, or can be an array of numbers.
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

EVEN.
Returns number rounded up to the nearest even integer.
You can use this function for processing items that come in twos. For example,
       a packing crate accepts rows of one or two items. The crate is full when
       the number of items, rounded up to the nearest two, matches the crate's
       capacity.
Excel Function:
       EVEN(number)
@param array|float $number Number to round, or can be an array of numbers
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

ODD.
Returns number rounded up to the nearest odd integer.
@param array|float $number Number to round, or can be an array of numbers
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Round.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round`

**Functions/Methods**:
- `round($number, $precision)`
- `up($number, $digits)`
- `down($number, $digits)`
- `multiple($number, $multiple)`
- `even($number)`
- `odd($number)`

