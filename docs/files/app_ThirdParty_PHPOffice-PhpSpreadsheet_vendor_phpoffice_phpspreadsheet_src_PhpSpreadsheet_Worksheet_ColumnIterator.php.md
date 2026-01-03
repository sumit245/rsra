# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnIterator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnIterator.php`
- Type: PHP
- Size: 4460 bytes

## Summary (from docblocks)

@implements Iterator<string, Column>

Worksheet to iterate.
@var Worksheet

Current iterator position.
@var int

Start position.
@var int

End position.
@var int

Create a new column iterator.
@param Worksheet $worksheet The worksheet to iterate over
@param string $startColumn The column address at which to start iterating
@param string $endColumn Optionally, the column address at which to stop iterating

Destructor.

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

Return the current column in this worksheet.

Return the current iterator key.

Set the iterator to its next value.

Set the iterator to its previous value.

Indicate if more columns exist in the worksheet range of columns that we're iterating.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnIterator.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\ColumnIterator implements Iterator`

**Functions/Methods**:
- `__construct(Worksheet $worksheet, $startColumn = 'A', $endColumn = null)`
- `__destruct()`
- `resetStart(string $startColumn = 'A')`
- `resetEnd($endColumn = null)`
- `seek(string $column = 'A')`
- `rewind()`
- `current()`
- `key()`
- `next()`
- `prev()`
- `valid()`

