# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BitWise.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BitWise.php`
- Type: PHP
- Size: 8244 bytes

## Summary (from docblocks)

Split a number into upper and lower portions for full 32-bit support.
@param float|int $number

BITAND.
Returns the bitwise AND of two integer values.
Excel Function:
       BITAND(number1, number2)
@param array|int $number1
                     Or can be an array of values
@param array|int $number2
                     Or can be an array of values
@return array|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

BITOR.
Returns the bitwise OR of two integer values.
Excel Function:
       BITOR(number1, number2)
@param array|int $number1
                     Or can be an array of values
@param array|int $number2
                     Or can be an array of values
@return array|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

BITXOR.
Returns the bitwise XOR of two integer values.
Excel Function:
       BITXOR(number1, number2)
@param array|int $number1
                     Or can be an array of values
@param array|int $number2
                     Or can be an array of values
@return array|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

BITLSHIFT.
Returns the number value shifted left by shift_amount bits.
Excel Function:
       BITLSHIFT(number, shift_amount)
@param array|int $number
                     Or can be an array of values
@param array|int $shiftAmount
                     Or can be an array of values
@return array|float|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

BITRSHIFT.
Returns the number value shifted right by shift_amount bits.
Excel Function:
       BITRSHIFT(number, shift_amount)
@param array|int $number
                     Or can be an array of values
@param array|int $shiftAmount
                     Or can be an array of values
@return array|float|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

Validate arguments passed to the bitwise functions.
@param mixed $value
@return float

Validate arguments passed to the bitwise functions.
@param mixed $value
@return int

Many functions accept null/false/true argument treated as 0/0/1.
@param mixed $number
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BitWise.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\BitWise`

**Functions/Methods**:
- `splitNumber($number)`
- `BITAND($number1, $number2)`
- `BITOR($number1, $number2)`
- `BITXOR($number1, $number2)`
- `BITLSHIFT($number, $shiftAmount)`
- `BITRSHIFT($number, $shiftAmount)`
- `validateBitwiseArgument($value)`
- `validateShiftAmount($value)`
- `nullFalseTrueToNumber(&$number)`

