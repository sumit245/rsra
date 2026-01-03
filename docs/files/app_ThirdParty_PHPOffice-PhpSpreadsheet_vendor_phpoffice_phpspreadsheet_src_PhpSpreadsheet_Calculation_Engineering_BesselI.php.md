# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselI.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselI.php`
- Type: PHP
- Size: 4644 bytes

## Summary (from docblocks)

BESSELI.
   Returns the modified Bessel function In(x), which is equivalent to the Bessel function evaluated
       for purely imaginary arguments
   Excel Function:
       BESSELI(x,ord)
NOTE: The MS Excel implementation of the BESSELI function is still not accurate.
      This code provides a more accurate calculation
@param mixed $x A float value at which to evaluate the function.
                               If x is nonnumeric, BESSELI returns the #VALUE! error value.
                     Or can be an array of values
@param mixed $ord The integer order of the Bessel function.
                               If ord is not an integer, it is truncated.
                               If $ord is nonnumeric, BESSELI returns the #VALUE! error value.
                               If $ord < 0, BESSELI returns the #NUM! error value.
                     Or can be an array of values
@return array|float|string Result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\BesselI.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\BesselI`

**Functions/Methods**:
- `In(x)`
- `BESSELI($x, $ord)`
- `calculate(float $x, int $ord)`
- `besselI0(float $x)`
- `besselI1(float $x)`
- `besselI2(float $x, int $ord)`

