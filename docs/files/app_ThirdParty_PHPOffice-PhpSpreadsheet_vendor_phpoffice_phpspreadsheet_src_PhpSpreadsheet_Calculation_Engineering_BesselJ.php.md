# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselJ.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselJ.php`
- Type: PHP
- Size: 5899 bytes

## Summary (from docblocks)

BESSELJ.
   Returns the Bessel function
   Excel Function:
       BESSELJ(x,ord)
NOTE: The MS Excel implementation of the BESSELJ function is still not accurate, particularly for higher order
      values with x < -8 and x > 8. This code provides a more accurate calculation
@param mixed $x A float value at which to evaluate the function.
                               If x is nonnumeric, BESSELJ returns the #VALUE! error value.
                     Or can be an array of values
@param mixed $ord The integer order of the Bessel function.
                      If ord is not an integer, it is truncated.
                               If $ord is nonnumeric, BESSELJ returns the #VALUE! error value.
                               If $ord < 0, BESSELJ returns the #NUM! error value.
                     Or can be an array of values
@return array|float|string Result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselJ.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\BesselJ`

**Functions/Methods**:
- `BESSELJ($x, $ord)`
- `calculate(float $x, int $ord)`
- `besselJ0(float $x)`
- `besselJ1(float $x)`
- `besselJ2(float $x, int $ord)`
- `besselj2a(float $ax, int $ord, float $x)`
- `besselj2b(float $ax, int $ord, float $x)`

