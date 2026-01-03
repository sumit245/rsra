# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowCellIterator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowCellIterator.php`
- Type: PHP
- Size: 5561 bytes

## Summary (from docblocks)

@extends CellIterator<string>

Current iterator position.
@var int

Row index.
@var int

Start position.
@var int

End position.
@var int

Create a new column iterator.
@param Worksheet $worksheet The worksheet to iterate over
@param int $rowIndex The row that we want to iterate
@param string $startColumn The column address at which to start iterating
@param string $endColumn Optionally, the column address at which to stop iterating

(Re)Set the start column and the current column pointer.
@param string $startColumn The column address at which to start iterating
@return $this

(Re)Set the end column.
@param string $endColumn The column address at which to stop iterating
@return $this

Set the column pointer to the selected column.
@param string $column The column address to set the current pointer at
@return $this

Rewind the iterator to the starting column.

Return the current cell in this worksheet row.

Return the current iterator key.

Set the iterator to its next value.

Set the iterator to its previous value.

Indicate if more columns exist in the worksheet range of columns that we're iterating.

Return the current iterator position.

Validate start/end values for "IterateOnlyExistingCells" mode, and adjust if necessary.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowCellIterator.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\RowCellIterator extends CellIterator`

**Functions/Methods**:
- `__construct(Worksheet $worksheet, $rowIndex = 1, $startColumn = 'A', $endColumn = null)`
- `resetStart(string $startColumn = 'A')`
- `resetEnd($endColumn = null)`
- `seek(string $column = 'A')`
- `rewind()`
- `current()`
- `key()`
- `next()`
- `prev()`
- `valid()`
- `getCurrentColumnIndex()`
- `adjustForExistingOnlyRange()`

