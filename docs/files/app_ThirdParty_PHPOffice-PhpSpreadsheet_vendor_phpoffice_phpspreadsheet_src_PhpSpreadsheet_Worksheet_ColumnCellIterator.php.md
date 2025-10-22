# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnCellIterator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnCellIterator.php`
- Type: PHP
- Size: 4948 bytes

## Summary (from docblocks)

@extends CellIterator<int>

Current iterator position.
@var int

Column index.
@var int

Start position.
@var int

End position.
@var int

Create a new row iterator.
@param Worksheet $subject The worksheet to iterate over
@param string $columnIndex The column that we want to iterate
@param int $startRow The row number at which to start iterating
@param int $endRow Optionally, the row number at which to stop iterating

(Re)Set the start row and the current row pointer.
@param int $startRow The row number at which to start iterating
@return $this

(Re)Set the end row.
@param int $endRow The row number at which to stop iterating
@return $this

Set the row pointer to the selected row.
@param int $row The row number to set the current pointer at
@return $this

Rewind the iterator to the starting row.

Return the current cell in this worksheet column.

Return the current iterator key.

Set the iterator to its next value.

Set the iterator to its previous value.

Indicate if more rows exist in the worksheet range of rows that we're iterating.

Validate start/end values for "IterateOnlyExistingCells" mode, and adjust if necessary.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnCellIterator.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\ColumnCellIterator extends CellIterator`

**Functions/Methods**:
- `__construct(Worksheet $subject, $columnIndex = 'A', $startRow = 1, $endRow = null)`
- `resetStart(int $startRow = 1)`
- `resetEnd($endRow = null)`
- `seek(int $row = 1)`
- `rewind()`
- `current()`
- `key()`
- `next()`
- `prev()`
- `valid()`
- `adjustForExistingOnlyRange()`

