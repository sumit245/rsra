# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselK.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselK.php`
- Type: PHP
- Size: 4344 bytes

## Summary (from docblocks)

BESSELK.
   Returns the modified Bessel function Kn(x), which is equivalent to the Bessel functions evaluated
       for purely imaginary arguments.
   Excel Function:
       BESSELK(x,ord)
@param mixed $x A float value at which to evaluate the function.
                               If x is nonnumeric, BESSELK returns the #VALUE! error value.
                     Or can be an array of values
@param mixed $ord The integer order of the Bessel function.
                      If ord is not an integer, it is truncated.
                               If $ord is nonnumeric, BESSELK returns the #VALUE! error value.
                      If $ord < 0, BESSELKI returns the #NUM! error value.
                     Or can be an array of values
@return array|float|string Result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

Mollify Phpstan.
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselK.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\BesselK`

**Functions/Methods**:
- `Kn(x)`
- `BESSELK($x, $ord)`
- `calculate(float $x, int $ord)`
- `callBesselI(float $x, int $ord)`
- `besselK0(float $x)`
- `besselK1(float $x)`
- `besselK2(float $x, int $ord)`

