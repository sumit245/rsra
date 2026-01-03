# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Coordinate.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Coordinate.php`
- Type: PHP
- Size: 19570 bytes

## Summary (from docblocks)

Helper class to manipulate cell coordinates.
Columns indexes and rows are always based on 1, **not** on 0. This match the behavior
that Excel users are used to, and also match the Excel functions `COLUMN()` and `ROW()`.

Default range variable constant.
@var string

Coordinate from string.
@param string $cellAddress eg: 'A1'
@return array{0: string, 1: string} Array containing column and row (indexes 0 and 1)

Get indexes from a string coordinates.
@param string $coordinates eg: 'A1', '$B$12'
@return array{0: int, 1: int} Array containing column index and row index (indexes 0 and 1)

Checks if a Cell Address represents a range of cells.
@param string $cellAddress eg: 'A1' or 'A1:A2' or 'A1:A2,C1:C2'
@return bool Whether the coordinate represents a range of cells

Make string row, column or cell coordinate absolute.
@param string $cellAddress e.g. 'A' or '1' or 'A1'
                   Note that this value can be a row or column reference as well as a cell reference
@return string Absolute coordinate        e.g. '$A' or '$1' or '$A$1'

Make string coordinate absolute.
@param string $cellAddress e.g. 'A1'
@return string Absolute coordinate        e.g. '$A$1'

Split range into coordinate strings.
@param string $range e.g. 'B4:D9' or 'B4:D9,H2:O11' or 'B4'
@return array Array containing one or more arrays containing one or two coordinate strings
                               e.g. ['B4','D9'] or [['B4','D9'], ['H2','O11']]
                                       or ['B4']

Build range from coordinate strings.
@param array $range Array containing one or more arrays containing one or two coordinate strings
@return string String representation of $pRange

Calculate range boundaries.
@param string $range Cell range (e.g. A1:A1)
@return array Range coordinates [Start Cell, End Cell]
                   where Start Cell and End Cell are arrays (Column Number, Row Number)

Calculate range dimension.
@param string $range Cell range (e.g. A1:A1)
@return array Range dimension (width, height)

Calculate range boundaries.
@param string $range Cell range (e.g. A1:A1)
@return array Range coordinates [Start Cell, End Cell]
                   where Start Cell and End Cell are arrays [Column ID, Row Number]

Column index from string.
@param string $columnAddress eg 'A'
@return int Column index (A = 1)

String from column index.
@param int $columnIndex Column index (A = 1)
@return string

Extract all cell references in range, which may be comprised of multiple cell ranges.
@param string $cellRange Range: e.g. 'A1' or 'A1:C10' or 'A1:E10,A20:E25' or 'A1:E5 C3:G7' or 'A1:C1,A3:C3 B1:C3'
@return array Array containing single cell references

Get all cell references for an individual cell block.
@param string $cellBlock A cell range e.g. A4:B5
@return array All individual cells in that range

Convert an associative array of single cell coordinates to values to an associative array
of cell ranges to values.  Only adjacent cell coordinates with the same
value will be merged.  If the value is an object, it must implement the method getHashCode().
For example, this function converts:
   [ 'A1' => 'x', 'A2' => 'x', 'A3' => 'x', 'A4' => 'y' ]
to:
   [ 'A1:A3' => 'x', 'A4' => 'y' ]
@param array $coordinateCollection associative array mapping coordinates to values
@return array associative array mapping coordinate ranges to valuea

Get the individual cell blocks from a range string, removing any $ characters.
     then splitting by operators and returning an array with ranges and operators.
@param string $rangeString
@return array[]

@phpstan-ignore-next-line

Check that the given range is valid, i.e. that the start column and row are not greater than the end column and
row.
@param string $cellBlock The original range, for displaying a meaningful error message
@param int $startColumnIndex
@param int $endColumnIndex
@param int $currentRow
@param int $endRow

## References

**Database Tables (inferred)**
- `string`
- `a`
- `the`
- `coordinate`
- `column`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Coordinate.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Cell\to`
- `PhpOffice\PhpSpreadsheet\Cell\Coordinate`
- `PhpOffice\PhpSpreadsheet\Cell\static`

**Functions/Methods**:
- `coordinateFromString($cellAddress)`
- `indexesFromString(string $coordinates)`
- `coordinateIsRange($cellAddress)`
- `absoluteReference($cellAddress)`
- `absoluteCoordinate($cellAddress)`
- `splitRange($range)`
- `buildRange(array $range)`
- `rangeBoundaries($range)`
- `rangeDimension($range)`
- `getRangeBoundaries($range)`
- `columnIndexFromString($columnAddress)`
- `stringFromColumnIndex($columnIndex)`
- `extractAllCellReferencesInRange($cellRange)`
- `processRangeSetOperators(array $operators, array $cells)`
- `sortCellReferenceArray(array $cellList)`
- `getReferencesForCellBlock($cellBlock)`
- `mergeRangesInCollection(array $coordinateCollection)`
- `getCellBlocksFromRangeString($rangeString)`
- `validateRange($cellBlock, $startColumnIndex, $endColumnIndex, $currentRow, $endRow)`

