# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Sum.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Sum.php`
- Type: PHP
- Size: 3466 bytes

## Summary (from docblocks)

SUM, ignoring non-numeric non-error strings. This is eventually used by SUMIF.
SUM computes the sum of all the values and cells referenced in the argument list.
Excel Function:
       SUM(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

SUM, returning error for non-numeric strings. This is used by Excel SUM function.
SUM computes the sum of all the values and cells referenced in the argument list.
Excel Function:
       SUM(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

SUMPRODUCT.
Excel Function:
       SUMPRODUCT(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string The result, or a string containing an error

## References

**Database Tables (inferred)**
- `cell`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig\Sum.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum`

**Functions/Methods**:
- `sumIgnoringStrings(...$args)`
- `sumErroringStrings(...$args)`
- `product(...$args)`

