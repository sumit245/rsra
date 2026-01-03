# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Cells.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Cells.php`
- Type: PHP
- Size: 12780 bytes

## Summary (from docblocks)

@var CacheInterface

Parent worksheet.
@var null|Worksheet

The currently active Cell.
@var null|Cell

Coordinate of the currently active Cell.
@var null|string

Flag indicating whether the currently active Cell requires saving.
@var bool

An index of existing cells. Booleans indexed by their coordinate.
@var bool[]

Prefix used to uniquely identify cache data for this worksheet.
@var string

Initialise this new cell collection.
@param Worksheet $parent The worksheet for this cell collection

Return the parent worksheet for this cell collection.
@return null|Worksheet

Whether the collection holds a cell for the given coordinate.
@param string $cellCoordinate Coordinate of the cell to check
@return bool

Add or update a cell in the collection.
@param Cell $cell Cell to update
@return Cell

Delete a cell in cache identified by coordinate.
@param string $cellCoordinate Coordinate of the cell to delete

Get a list of all cell coordinates currently held in the collection.
@return string[]

Get a sorted list of all cell coordinates currently held in the collection by row and column.
@return string[]

Get highest worksheet column and highest row that have cell records.
@return array Highest column name and highest row number

Return the cell coordinate of the currently active cell object.
@return null|string

Return the column coordinate of the currently active cell object.
@return string

Return the row coordinate of the currently active cell object.
@return int

Get highest worksheet column.
@param null|int|string $row Return the highest column for the specified row,
                   or the highest column of any row if no row number is passed
@return string Highest column name

Get highest worksheet row.
@param null|string $column Return the highest row for the specified column,
                      or the highest row of any column if no column letter is passed
@return int Highest row number

Generate a unique ID for cache referencing.
@return string Unique Reference

Clone the cell collection.
@return self

@var string $newKey

Remove a row, deleting all cells in that row.
@param string $row Row number to remove

Remove a column, deleting all cells in that column.
@param string $column Column ID to remove

Store cell data in cache for the current cell object if it's "dirty",
and the 'nullify' the current cell object.

Add or update a cell identified by its coordinate into the collection.
@param string $cellCoordinate Coordinate of the cell to update
@param Cell $cell Cell to update
@return Cell

Get cell at a specific coordinate.
@param string $cellCoordinate Coordinate of the cell
@return null|Cell Cell that was found, or null if not found

Clear the cell collection and disconnect from our parent.

Destroy this cell collection.

Returns all known cache keys.
@return Generator|string[]

## References

**Database Tables (inferred)**
- `a`
- `cache`
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Collection\Cells.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Collection\Cells`

**Functions/Methods**:
- `__construct(Worksheet $parent, CacheInterface $cache)`
- `getParent()`
- `has($cellCoordinate)`
- `update(Cell $cell)`
- `delete($cellCoordinate)`
- `getCoordinates()`
- `getSortedCoordinates()`
- `getHighestRowAndColumn()`
- `getCurrentCoordinate()`
- `getCurrentColumn()`
- `getCurrentRow()`
- `getHighestColumn($row = null)`
- `getHighestRow($column = null)`
- `getUniqueID()`
- `cloneCellCollection(Worksheet $worksheet)`
- `removeRow($row)`
- `removeColumn($column)`
- `storeCurrentCell()`
- `destructIfNeeded(bool $stored, self $cells, string $message)`
- `add($cellCoordinate, Cell $cell)`
- `get($cellCoordinate)`
- `unsetWorksheetCells()`
- `__destruct()`
- `getAllCacheKeys()`

