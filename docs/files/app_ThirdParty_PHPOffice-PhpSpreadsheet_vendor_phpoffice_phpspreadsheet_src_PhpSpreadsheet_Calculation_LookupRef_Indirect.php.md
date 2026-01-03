# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Indirect.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Indirect.php`
- Type: PHP
- Size: 4742 bytes

## Summary (from docblocks)

Determine whether cell address is in A1 (true) or R1C1 (false) format.
@param mixed $a1fmt Expect bool Helpers::CELLADDRESS_USE_A1 or CELLADDRESS_USE_R1C1,
                     but can be provided as numeric which is cast to bool

Convert cellAddress to string, verify not null string.
@param array|string $cellAddress

INDIRECT.
Returns the reference specified by a text string.
References are immediately evaluated to display their contents.
Excel Function:
       =INDIRECT(cellAddress, bool) where the bool argument is optional
@param array|string $cellAddress $cellAddress The cell address of the current cell (containing this formula)
@param mixed $a1fmt Expect bool Helpers::CELLADDRESS_USE_A1 or CELLADDRESS_USE_R1C1,
                     but can be provided as numeric which is cast to bool
@param Cell $cell The current cell (containing this formula)
@return array|string An array containing a cell or range of cells, or a string on error

Extract range values.
@return mixed Array of values in range if range contains more than one element.
                 Otherwise, a single value is returned.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Indirect.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Indirect`

**Functions/Methods**:
- `a1Format($a1fmt)`
- `validateAddress($cellAddress)`
- `INDIRECT($cellAddress, $a1fmt, Cell $cell)`
- `extractRequiredCells(?Worksheet $worksheet, string $cellAddress)`
- `handleRowColumnRanges(?Worksheet $worksheet, string $start, string $end)`

