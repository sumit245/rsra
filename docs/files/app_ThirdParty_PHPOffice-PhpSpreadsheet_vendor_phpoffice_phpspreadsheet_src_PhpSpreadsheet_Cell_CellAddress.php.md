# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\CellAddress.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\CellAddress.php`
- Type: PHP
- Size: 4325 bytes

## Summary (from docblocks)

@var ?Worksheet

@var string

@var string

@var int

@var int

@param mixed $columnId
@param mixed $rowId

@param mixed $columnId
@param mixed $rowId

@phpstan-ignore-next-line

@param mixed $cellAddress

@phpstan-ignore-next-line

The returned address string will contain the worksheet name as well, if available,
    (ie. if a Worksheet was provided to the constructor).
    e.g. "'Mark''s Worksheet'!C5".

The returned address string will contain just the column/row address,
    (even if a Worksheet was provided to the constructor).
    e.g. "C5".

The returned address string will contain the worksheet name as well, if available,
    (ie. if a Worksheet was provided to the constructor).
    e.g. "'Mark''s Worksheet'!C5".

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\CellAddress.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Cell\CellAddress`

**Functions/Methods**:
- `__construct(string $cellAddress, ?Worksheet $worksheet = null)`
- `validateColumnAndRow($columnId, $rowId)`
- `fromColumnAndRow($columnId, $rowId, ?Worksheet $worksheet = null)`
- `fromColumnRowArray(array $array, ?Worksheet $worksheet = null)`
- `fromCellAddress($cellAddress, ?Worksheet $worksheet = null)`
- `fullCellAddress()`
- `worksheet()`
- `cellAddress()`
- `rowId()`
- `columnId()`
- `columnName()`
- `nextRow(int $offset = 1)`
- `previousRow(int $offset = 1)`
- `nextColumn(int $offset = 1)`
- `previousColumn(int $offset = 1)`
- `__toString()`

