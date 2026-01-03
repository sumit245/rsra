# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Cell.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Cell.php`
- Type: PHP
- Size: 18363 bytes

## Summary (from docblocks)

Value binder to use.
@var IValueBinder

Value of the cell.
@var mixed

Calculated value of the cell (used for caching)
   This returns the value last calculated by MS Excel or whichever spreadsheet program was used to
       create the original spreadsheet file.
   Note that this value is not guaranteed to reflect the actual calculated value because it is
       possible that auto-calculation was disabled in the original spreadsheet, and underlying data
       values used by the formula have changed since it was last calculated.
@var mixed

Type of the cell data.
@var string

Collection of cells.
@var Cells

Index to cellXf.
@var int

Attributes of the formula.

Update the cell into the cell collection.
@return $this

Create a new Cell.
@param mixed $value
@param string $dataType

Get cell coordinate column.
@return string

Get cell coordinate row.
@return int

Get cell coordinate.
@return string

Get cell value.
@return mixed

Get cell value with formatting.
@return string

Set cell value.
   Sets the value for a cell, automatically determining the datatype using the value binder
@param mixed $value Value
@return $this

Set the value for a cell, with the explicit data type passed to the method (bypassing any use of the value binder).
@param mixed $value Value
@param string $dataType Explicit data type, see DataType::TYPE_*
@return Cell

Get calculated cell value.
@param bool $resetLog Whether the calculation engine logger should be reset or not
@return mixed

Set old calculated value (cached).
@param mixed $originalValue Value
@return Cell

Get old calculated value (cached)
   This returns the value last calculated by MS Excel or whichever spreadsheet program was used to
       create the original spreadsheet file.
   Note that this value is not guaranteed to reflect the actual calculated value because it is
       possible that auto-calculation was disabled in the original spreadsheet, and underlying data
       values used by the formula have changed since it was last calculated.
@return mixed

Get cell data type.
@return string

Set cell data type.
@param string $dataType see DataType::TYPE_*
@return Cell

Identify if the cell contains a formula.

Does this cell contain Data validation rules?

Get Data validation rules.
@return DataValidation

Set Data validation rules.

Does this cell contain valid value?
@return bool

Does this cell contain a Hyperlink?
@return bool

Get Hyperlink.
@return Hyperlink

Set Hyperlink.
@return Cell

Get cell collection.
@return Cells

Get parent worksheet.
@return Worksheet

Is this cell in a merge range.
@return bool

Is this cell the master (top left cell) in a merge range (that holds the actual data value).
@return bool

If this cell is in a merge range, then return the range.
@return false|string

Get cell style.

Get cell style.

Re-bind parent.
@return Cell

Is cell in a specific range?
@param string $range Cell range (e.g. A1:A1)
@return bool

Compare 2 cells.
@param Cell $a Cell a
@param Cell $b Cell b
@return int Result of comparison (always -1 or 1, never zero!)

Get value binder to use.
@return IValueBinder

Set value binder to use.

Implement PHP __clone to create a deep clone, not just a shallow copy.

Get index to cellXf.
@return int

Set index to cellXf.
@param int $indexValue
@return Cell

Set the formula attributes.
@param mixed $attributes
@return $this

Get the formula attributes.

Convert to string.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Cell\Cell.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Cell\Cell`

**Functions/Methods**:
- `updateInCollection()`
- `detach()`
- `attach(Cells $parent)`
- `__construct($value, $dataType, Worksheet $worksheet)`
- `getColumn()`
- `getRow()`
- `getCoordinate()`
- `getValue()`
- `getFormattedValue()`
- `setValue($value)`
- `setValueExplicit($value, $dataType)`
- `getCalculatedValue($resetLog = true)`
- `setCalculatedValue($originalValue)`
- `getOldCalculatedValue()`
- `getDataType()`
- `setDataType($dataType)`
- `isFormula()`
- `hasDataValidation()`
- `getDataValidation()`
- `setDataValidation(?DataValidation $dataValidation = null)`
- `hasValidValue()`
- `hasHyperlink()`
- `getHyperlink()`
- `setHyperlink(?Hyperlink $hyperlink = null)`
- `getParent()`
- `getWorksheet()`
- `isInMergeRange()`
- `isMergeRangeValueCell()`
- `getMergeRange()`
- `getStyle()`
- `getAppliedStyle()`
- `rebindParent(Worksheet $parent)`
- `isInRange($range)`
- `compareCells(self $a, self $b)`
- `getValueBinder()`
- `setValueBinder(IValueBinder $binder)`
- `__clone()`
- `getXfIndex()`
- `setXfIndex($indexValue)`
- `setFormulaAttributes($attributes)`
- `getFormulaAttributes()`
- `__toString()`

