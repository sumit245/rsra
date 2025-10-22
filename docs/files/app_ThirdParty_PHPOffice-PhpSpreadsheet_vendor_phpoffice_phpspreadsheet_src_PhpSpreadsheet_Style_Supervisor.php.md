# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Supervisor.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Supervisor.php`
- Type: PHP
- Size: 4493 bytes

## Summary (from docblocks)

Supervisor?
@var bool

Parent. Only used for supervisor.
@var Spreadsheet|Supervisor

Parent property name.
@var null|string

Create a new Supervisor.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Bind parent. Only used for supervisor.
@param Spreadsheet|Supervisor $parent
@param null|string $parentPropertyName
@return $this

Is this a supervisor or a cell style component?
@return bool

Get the currently active sheet. Only used for supervisor.
@return Worksheet

Get the currently active cell coordinate in currently active sheet.
Only used for supervisor.
@return string E.g. 'A1'

Get the currently active cell coordinate in currently active sheet.
Only used for supervisor.
@return string E.g. 'A1'

Implement PHP __clone to create a deep clone, not just a shallow copy.

Export style as array.
Available to anything which extends this class:
Alignment, Border, Borders, Color, Fill, Font,
NumberFormat, Protection, and Style.

Abstract method to be implemented in anything which
extends this class.
This method invokes exportArray2 with the names and values
of all properties to be included in output array,
returning that array to exportArray, then to caller.

Populate array from exportArray1.
This method is available to anything which extends this class.
The parameter index is the key to be added to the array.
The parameter objOrValue is either a primitive type,
which is the value added to the array,
or a Style object to be recursively added via exportArray.
@param mixed $objOrValue

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return mixed

Build style array from subcomponents.
@param array $array
@return array

## References

**Database Tables (inferred)**
- `exportArray1`
- `subcomponents`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Supervisor.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Supervisor implements IComparable`

**Functions/Methods**:
- `__construct($isSupervisor = false)`
- `bindParent($parent, $parentPropertyName = null)`
- `getIsSupervisor()`
- `getActiveSheet()`
- `getSelectedCells()`
- `getActiveCell()`
- `__clone()`
- `exportArray()`
- `exportArray1()`
- `exportArray2(array &$exportedArray, string $index, $objOrValue)`
- `getSharedComponent()`
- `getStyleArray($array)`

