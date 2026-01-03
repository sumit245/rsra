# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ErfC.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ErfC.php`
- Type: PHP
- Size: 2358 bytes

## Summary (from docblocks)

ERFC.
   Returns the complementary ERF function integrated between x and infinity
   Note: In Excel 2007 or earlier, if you input a negative value for the lower bound argument,
       the function would return a #NUM! error. However, in Excel 2010, the function algorithm was
       improved, so that it can now calculate the function for both positive and negative x values.
           PhpSpreadsheet follows Excel 2010 behaviour, and accepts nagative arguments.
   Excel Function:
       ERFC(x)
@param mixed $value The float lower bound for integrating ERFC
                     Or can be an array of values
@return array|float|string
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ErfC.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\ErfC`

**Functions/Methods**:
- `ERFC($value)`
- `erfcValue($value)`

