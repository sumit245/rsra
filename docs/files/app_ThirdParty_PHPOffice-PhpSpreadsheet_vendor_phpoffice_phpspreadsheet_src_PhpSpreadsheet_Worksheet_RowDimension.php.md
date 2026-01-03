# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowDimension.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowDimension.php`
- Type: PHP
- Size: 2727 bytes

## Summary (from docblocks)

Row index.
@var int

Row height (in pt).
When this is set to a negative value, the row height should be ignored by IWriter
@var float

ZeroHeight for Row?
@var bool

Create a new RowDimension.
@param int $index Numeric row index

Get Row Index.

Set Row Index.
@return $this

Get Row Height.
By default, this will be in points; but this method also accepts an optional unit of measure
   argument, and will convert the value from points to the specified UoM.
   A value of -1 tells Excel to display this column in its default height.
@return float

Set Row Height.
@param float $height in points. A value of -1 tells Excel to display this column in its default height.
By default, this will be the passed argument value; but this method also accepts an optional unit of measure
   argument, and will convert the passed argument value to points from the specified UoM
@return $this

Get ZeroHeight.

Set ZeroHeight.
@return $this

## References

**Database Tables (inferred)**
- `points`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\RowDimension.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\RowDimension extends Dimension`

**Functions/Methods**:
- `__construct($index = 0)`
- `getRowIndex()`
- `setRowIndex(int $index)`
- `getRowHeight(?string $unitOfMeasure = null)`
- `setRowHeight($height, ?string $unitOfMeasure = null)`
- `getZeroHeight()`
- `setZeroHeight(bool $zeroHeight)`

