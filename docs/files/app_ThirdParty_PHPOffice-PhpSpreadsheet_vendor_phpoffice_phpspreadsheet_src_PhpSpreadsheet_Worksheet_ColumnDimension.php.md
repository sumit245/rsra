# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnDimension.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnDimension.php`
- Type: PHP
- Size: 3364 bytes

## Summary (from docblocks)

Column index.
@var string

Column width.
When this is set to a negative value, the column width should be ignored by IWriter
@var float

Auto size?
@var bool

Create a new ColumnDimension.
@param string $index Character column index

Get column index as string eg: 'A'.

Set column index as string eg: 'A'.

Get column index as numeric.

Set column index as numeric.

Get Width.
Each unit of column width is equal to the width of one character in the default font size. A value of -1
     tells Excel to display this column in its default width.
By default, this will be the return value; but this method also accepts an optional unit of measure argument
   and will convert the returned value to the specified UoM..

Set Width.
Each unit of column width is equal to the width of one character in the default font size. A value of -1
     tells Excel to display this column in its default width.
By default, this will be the unit of measure for the passed value; but this method also accepts an
   optional unit of measure argument, and will convert the value from the specified UoM using an
   approximation method.
@return $this

Get Auto Size.

Set Auto Size.
@return $this

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\ColumnDimension.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\ColumnDimension extends Dimension`

**Functions/Methods**:
- `__construct($index = 'A')`
- `getColumnIndex()`
- `setColumnIndex(string $index)`
- `getColumnNumeric()`
- `setColumnNumeric(int $index)`
- `getWidth(?string $unitOfMeasure = null)`
- `setWidth(float $width, ?string $unitOfMeasure = null)`
- `getAutoSize()`
- `setAutoSize(bool $autosizeEnabled)`

