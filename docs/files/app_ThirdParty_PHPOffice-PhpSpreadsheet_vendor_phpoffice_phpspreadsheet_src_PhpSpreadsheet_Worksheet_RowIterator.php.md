# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowIterator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowIterator.php`
- Type: PHP
- Size: 3481 bytes

## Summary (from docblocks)

@implements Iterator<int, Row>

Worksheet to iterate.
@var Worksheet

Current iterator position.
@var int

Start position.
@var int

End position.
@var int

Create a new row iterator.
@param Worksheet $subject The worksheet to iterate over
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

Return the current row in this worksheet.

Return the current iterator key.

Set the iterator to its next value.

Set the iterator to its previous value.

Indicate if more rows exist in the worksheet range of rows that we're iterating.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowIterator.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\RowIterator implements Iterator`

**Functions/Methods**:
- `__construct(Worksheet $subject, $startRow = 1, $endRow = null)`
- `resetStart(int $startRow = 1)`
- `resetEnd($endRow = null)`
- `seek(int $row = 1)`
- `rewind()`
- `current()`
- `key()`
- `next()`
- `prev()`
- `valid()`

