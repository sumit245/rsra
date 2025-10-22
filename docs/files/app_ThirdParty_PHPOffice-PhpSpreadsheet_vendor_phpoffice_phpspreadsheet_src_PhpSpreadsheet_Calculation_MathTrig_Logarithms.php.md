# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Logarithms.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Logarithms.php`
- Type: PHP
- Size: 3244 bytes

## Summary (from docblocks)

LOG_BASE.
Returns the logarithm of a number to a specified base. The default base is 10.
Excel Function:
       LOG(number[,base])
@param mixed $number The positive real number for which you want the logarithm
                     Or can be an array of values
@param mixed $base The base of the logarithm. If base is omitted, it is assumed to be 10.
                     Or can be an array of values
@return array|float|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

LOG10.
Returns the result of builtin function log after validating args.
@param mixed $number Should be numeric
                     Or can be an array of values
@return array|float|string Rounded number
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

LN.
Returns the result of builtin function log after validating args.
@param mixed $number Should be numeric
                     Or can be an array of values
@return array|float|string Rounded number
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Logarithms.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Logarithms`

**Functions/Methods**:
- `withBase($number, $base = 10)`
- `base10($number)`
- `natural($number)`

