# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Operations.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Operations.php`
- Type: PHP
- Size: 5025 bytes

## Summary (from docblocks)

MOD.
@param mixed $dividend Dividend
                     Or can be an array of values
@param mixed $divisor Divisor
                     Or can be an array of values
@return array|float|int|string Remainder, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

POWER.
Computes x raised to the power y.
@param array|float|int $x
                     Or can be an array of values
@param array|float|int $y
                     Or can be an array of values
@return array|float|int|string The result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

PRODUCT.
PRODUCT returns the product of all the values and cells referenced in the argument list.
Excel Function:
       PRODUCT(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

QUOTIENT.
QUOTIENT function returns the integer portion of a division. Numerator is the divided number
       and denominator is the divisor.
Excel Function:
       QUOTIENT(value1,value2)
@param mixed $numerator Expect float|int
                     Or can be an array of values
@param mixed $denominator Expect float|int
                     Or can be an array of values
@return array|int|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Operations.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Operations`

**Functions/Methods**:
- `mod($dividend, $divisor)`
- `power($x, $y)`
- `product(...$args)`
- `quotient($numerator, $denominator)`

