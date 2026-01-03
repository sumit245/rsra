# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\AddressHelper.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\AddressHelper.php`
- Type: PHP
- Size: 5826 bytes

## Summary (from docblocks)

Converts an R1C1 format cell address to an A1 format cell address.

Converts a formula that uses R1C1/SpreadsheetXML format cell address to an A1 format cell address.

Converts an A1 format cell address to an R1C1 format cell address.
If $currentRowNumber or $currentColumnNumber are provided, then the R1C1 address will be formatted as a relative address.

## References

**Database Tables (inferred)**
- `left`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\AddressHelper.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Cell\AddressHelper`

**Functions/Methods**:
- `convertToA1(string $address,
        int $currentRowNumber = 1,
        int $currentColumnNumber = 1)`
- `convertSpreadsheetMLFormula(string $formula)`
- `convertFormulaToA1(string $formula,
        int $currentRowNumber = 1,
        int $currentColumnNumber = 1)`
- `convertToR1C1(string $address,
        ?int $currentRowNumber = null,
        ?int $currentColumnNumber = null)`

