# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Table.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Table.php`
- Type: PHP
- Size: 12901 bytes

## Summary (from docblocks)

Table Name.
@var string

Show Header Row.
@var bool

Show Totals Row.
@var bool

Table Range.
@var string

Table Worksheet.
@var null|Worksheet

Table Column.
@var Table\Column[]

Table Style.
@var TableStyle

Create a new Table.
@param AddressRange|array<int>|string $range
           A simple string containing a Cell range like 'A1:E10' is permitted
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange object.
@param string $name (e.g. Table1)

Get Table name.

Set Table name.

Get show Header Row.

Set show Header Row.

Get show Totals Row.

Set show Totals Row.

Get Table Range.

Set Table Cell Range.
@param AddressRange|array<int>|string $range
           A simple string containing a Cell range like 'A1:E10' is permitted
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange object.

Set Table Cell Range to max row.

Get Table's Worksheet.

Set Table's Worksheet.

Get all Table Columns.
@return Table\Column[]

Validate that the specified column is in the Table range.
@param string $column Column name (e.g. A)
@return int The column offset within the table range

Get a specified Table Column Offset within the defined Table range.
@param string $column Column name (e.g. A)
@return int The offset of the specified column within the table range

Get a specified Table Column.
@param string $column Column name (e.g. A)

Get a specified Table Column by it's offset.
@param int $columnOffset Column offset within range (starting from 0)

Set Table.
@param string|Table\Column $columnObjectOrString
           A simple string containing a Column ID like 'A' is permitted

Clear a specified Table Column.
@param string $column Column name (e.g. A)

Shift an Table Column Rule to a different column.
Note: This method bypasses validation of the destination column to ensure it is within this Table range.
       Nor does it verify whether any column rule already exists at $toColumn, but will simply override any existing value.
       Use with caution.
@param string $fromColumn Column name (e.g. A)
@param string $toColumn Column name (e.g. B)

Get table Style.

Set table Style.

Implement PHP __clone to create a deep clone, not just a shallow copy.

toString method replicates previous behavior by returning the range if object is
referenced as a property of its worksheet.

## References

**Database Tables (inferred)**
- `0`
- `worksheet`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Table.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\Table`

**Functions/Methods**:
- `__construct($range = '', string $name = '')`
- `getName()`
- `setName(string $name)`
- `getShowHeaderRow()`
- `setShowHeaderRow(bool $showHeaderRow)`
- `getShowTotalsRow()`
- `setShowTotalsRow(bool $showTotalsRow)`
- `getRange()`
- `setRange($range = '')`
- `setRangeToMaxRow()`
- `getWorksheet()`
- `setWorksheet(?Worksheet $worksheet = null)`
- `getColumns()`
- `isColumnInRange(string $column)`
- `getColumnOffset($column)`
- `getColumn($column)`
- `getColumnByOffset($columnOffset)`
- `setColumn($columnObjectOrString)`
- `clearColumn($column)`
- `shiftColumn($fromColumn, $toColumn)`
- `getStyle()`
- `setStyle(TableStyle $style)`
- `__clone()`
- `__toString()`

