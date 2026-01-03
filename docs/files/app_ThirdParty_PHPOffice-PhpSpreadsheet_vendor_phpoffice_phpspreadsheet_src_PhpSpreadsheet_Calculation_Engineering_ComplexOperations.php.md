# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ComplexOperations.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ComplexOperations.php`
- Type: PHP
- Size: 4425 bytes

## Summary (from docblocks)

IMDIV.
Returns the quotient of two complex numbers in x + yi or x + yj text format.
Excel Function:
       IMDIV(complexDividend,complexDivisor)
@param array|string $complexDividend the complex numerator or dividend
                     Or can be an array of values
@param array|string $complexDivisor the complex denominator or divisor
                     Or can be an array of values
@return array|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IMSUB.
Returns the difference of two complex numbers in x + yi or x + yj text format.
Excel Function:
       IMSUB(complexNumber1,complexNumber2)
@param array|string $complexNumber1 the complex number from which to subtract complexNumber2
                     Or can be an array of values
@param array|string $complexNumber2 the complex number to subtract from complexNumber1
                     Or can be an array of values
@return array|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

IMSUM.
Returns the sum of two or more complex numbers in x + yi or x + yj text format.
Excel Function:
       IMSUM(complexNumber[,complexNumber[,...]])
@param string ...$complexNumbers Series of complex numbers to add
@return string

IMPRODUCT.
Returns the product of two or more complex numbers in x + yi or x + yj text format.
Excel Function:
       IMPRODUCT(complexNumber[,complexNumber[,...]])
@param string ...$complexNumbers Series of complex numbers to multiply
@return string

## References

**Database Tables (inferred)**
- `which`
- `complexNumber1`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ComplexOperations.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\ComplexOperations`

**Functions/Methods**:
- `IMDIV($complexDividend, $complexDivisor)`
- `IMSUB($complexNumber1, $complexNumber2)`
- `IMSUM(...$complexNumbers)`
- `IMPRODUCT(...$complexNumbers)`

