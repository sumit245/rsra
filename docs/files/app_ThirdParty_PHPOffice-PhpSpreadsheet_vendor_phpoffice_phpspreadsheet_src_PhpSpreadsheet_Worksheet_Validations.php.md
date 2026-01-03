# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Validations.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Validations.php`
- Type: PHP
- Size: 4119 bytes

## Summary (from docblocks)

Validate a cell address.
@param null|array<int>|CellAddress|string $cellAddress Coordinate of the cell as a string, eg: 'C5';
              or as an array of [$columnIndex, $row] (e.g. [3, 5]), or a CellAddress object.

Validate a cell address or cell range.
@param AddressRange|array<int>|CellAddress|int|string $cellRange Coordinate of the cells as a string, eg: 'C5:F12';
              or as an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 12]),
              or as a CellAddress or AddressRange object.

Validate a cell range.
@param AddressRange|array<int>|string $cellRange Coordinate of the cells as a string, eg: 'C5:F12';
              or as an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 12]),
              or as an AddressRange object.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Validations.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\Validations`

**Functions/Methods**:
- `validateCellAddress($cellAddress)`
- `validateCellOrCellRange($cellRange)`
- `validateCellRange($cellRange)`
- `definedNameToCoordinate(string $coordinate, Worksheet $worksheet)`

