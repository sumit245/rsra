# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Floor.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Floor.php`
- Type: PHP
- Size: 6696 bytes

## Summary (from docblocks)

FLOOR.
Rounds number down, toward zero, to the nearest multiple of significance.
Excel Function:
       FLOOR(number[,significance])
@param mixed $number Expect float. Number to round
                     Or can be an array of values
@param mixed $significance Expect float. Significance
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

FLOOR.MATH.
Round a number down to the nearest integer or to the nearest multiple of significance.
Excel Function:
       FLOOR.MATH(number[,significance[,mode]])
@param mixed $number Number to round
                     Or can be an array of values
@param mixed $significance Significance
                     Or can be an array of values
@param mixed $mode direction to round negative numbers
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

FLOOR.PRECISE.
Rounds number down, toward zero, to the nearest multiple of significance.
Excel Function:
       FLOOR.PRECISE(number[,significance])
@param array|float $number Number to round
                     Or can be an array of values
@param array|float $significance Significance
                     Or can be an array of values
@return array|float|string Rounded Number, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

Avoid Scrutinizer problems concerning complexity.
@return float|string

Avoid Scrutinizer complexity problems.
@return float|string Rounded Number, or a string containing an error

Let FLOORMATH complexity pass Scrutinizer.

Avoid Scrutinizer problems concerning complexity.
@return float|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Floor.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Floor`

**Functions/Methods**:
- `floorCheck1Arg()`
- `floor($number, $significance = null)`
- `math($number, $significance = null, $mode = 0)`
- `precise($number, $significance = 1)`
- `argumentsOkPrecise(float $number, float $significance)`
- `argsOk(float $number, float $significance, int $mode)`
- `floorMathTest(float $number, float $significance, int $mode)`
- `argumentsOk(float $number, float $significance)`

