# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\Complex.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\Complex.php`
- Type: PHP
- Size: 4241 bytes

## Summary (from docblocks)

COMPLEX.
Converts real and imaginary coefficients into a complex number of the form x +/- yi or x +/- yj.
Excel Function:
       COMPLEX(realNumber,imaginary[,suffix])
@param mixed $realNumber the real float coefficient of the complex number
                     Or can be an array of values
@param mixed $imaginary the imaginary float coefficient of the complex number
                     Or can be an array of values
@param mixed $suffix The character suffix for the imaginary component of the complex number.
                         If omitted, the suffix is assumed to be "i".
                     Or can be an array of values
@return array|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IMAGINARY.
Returns the imaginary coefficient of a complex number in x + yi or x + yj text format.
Excel Function:
       IMAGINARY(complexNumber)
@param array|string $complexNumber the complex number for which you want the imaginary
                                        coefficient
                     Or can be an array of values
@return array|float|string (string if an error)
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IMREAL.
Returns the real coefficient of a complex number in x + yi or x + yj text format.
Excel Function:
       IMREAL(complexNumber)
@param array|string $complexNumber the complex number for which you want the real coefficient
                     Or can be an array of values
@return array|float|string (string if an error)
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\Complex.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\Complex`

**Functions/Methods**:
- `COMPLEX($realNumber = 0.0, $imaginary = 0.0, $suffix = 'i')`
- `IMAGINARY($complexNumber)`
- `IMREAL($complexNumber)`

