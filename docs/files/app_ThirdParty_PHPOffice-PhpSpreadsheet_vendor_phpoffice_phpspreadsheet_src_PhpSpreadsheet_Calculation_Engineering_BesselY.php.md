# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselY.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselY.php`
- Type: PHP
- Size: 4916 bytes

## Summary (from docblocks)

BESSELY.
Returns the Bessel function, which is also called the Weber function or the Neumann function.
   Excel Function:
       BESSELY(x,ord)
@param mixed $x A float value at which to evaluate the function.
                  If x is nonnumeric, BESSELY returns the #VALUE! error value.
                     Or can be an array of values
@param mixed $ord The integer order of the Bessel function.
                      If ord is not an integer, it is truncated.
                      If $ord is nonnumeric, BESSELY returns the #VALUE! error value.
                      If $ord < 0, BESSELY returns the #NUM! error value.
                     Or can be an array of values
@return array|float|string Result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

Mollify Phpstan.
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselY.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\BesselY`

**Functions/Methods**:
- `BESSELY($x, $ord)`
- `calculate(float $x, int $ord)`
- `callBesselJ(float $x, int $ord)`
- `besselY0(float $x)`
- `besselY1(float $x)`
- `besselY2(float $x, int $ord)`

