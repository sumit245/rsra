# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Ceiling.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Ceiling.php`
- Type: PHP
- Size: 6101 bytes

## Summary (from docblocks)

CEILING.
Returns number rounded up, away from zero, to the nearest multiple of significance.
       For example, if you want to avoid using pennies in your prices and your product is
       priced at $4.42, use the formula =CEILING(4.42,0.05) to round prices up to the
       nearest nickel.
Excel Function:
       CEILING(number[,significance])
@param array|float $number the number you want the ceiling
                     Or can be an array of values
@param array|float $significance the multiple to which you want to round
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CEILING.MATH.
Round a number down to the nearest integer or to the nearest multiple of significance.
Excel Function:
       CEILING.MATH(number[,significance[,mode]])
@param mixed $number Number to round
                     Or can be an array of values
@param mixed $significance Significance
                     Or can be an array of values
@param array|int $mode direction to round negative numbers
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

CEILING.PRECISE.
Rounds number up, away from zero, to the nearest multiple of significance.
Excel Function:
       CEILING.PRECISE(number[,significance])
@param mixed $number the number you want to round
                     Or can be an array of values
@param array|float $significance the multiple to which you want to round
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

Let CEILINGMATH complexity pass Scrutinizer.

Avoid Scrutinizer problems concerning complexity.
@return float|string

## References

**Database Tables (inferred)**
- `zero`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Ceiling.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Ceiling`

**Functions/Methods**:
- `ceiling($number, $significance = null)`
- `math($number, $significance = null, $mode = 0)`
- `precise($number, $significance = 1)`
- `ceilingMathTest(float $significance, float $number, int $mode)`
- `argumentsOk(float $number, float $significance)`
- `floorCheck1Arg()`

