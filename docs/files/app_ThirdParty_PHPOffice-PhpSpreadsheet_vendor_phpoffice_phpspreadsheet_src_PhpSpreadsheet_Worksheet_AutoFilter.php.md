# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter.php`
- Type: PHP
- Size: 40753 bytes

## Summary (from docblocks)

Autofilter Worksheet.
@var null|Worksheet

Autofilter Range.
@var string

Autofilter Column Ruleset.
@var AutoFilter\Column[]

@var bool

Create a new AutoFilter.
@param AddressRange|array<int>|string $range
           A simple string containing a Cell range like 'A1:E10' is permitted
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange object.

Get AutoFilter Parent Worksheet.
@return null|Worksheet

Set AutoFilter Parent Worksheet.
@return $this

Get AutoFilter Range.
@return string

Set AutoFilter Cell Range.
@param AddressRange|array<int>|string $range
           A simple string containing a Cell range like 'A1:E10' is permitted
             or passing in an array of [$fromColumnIndex, $fromRow, $toColumnIndex, $toRow] (e.g. [3, 5, 6, 8]),
             or an AddressRange object.

Get all AutoFilter Columns.
@return AutoFilter\Column[]

Validate that the specified column is in the AutoFilter range.
@param string $column Column name (e.g. A)
@return int The column offset within the autofilter range

Get a specified AutoFilter Column Offset within the defined AutoFilter range.
@param string $column Column name (e.g. A)
@return int The offset of the specified column within the autofilter range

Get a specified AutoFilter Column.
@param string $column Column name (e.g. A)
@return AutoFilter\Column

Get a specified AutoFilter Column by it's offset.
@param int $columnOffset Column offset within range (starting from 0)
@return AutoFilter\Column

Set AutoFilter.
@param AutoFilter\Column|string $columnObjectOrString
           A simple string containing a Column ID like 'A' is permitted
@return $this

Clear a specified AutoFilter Column.
@param string $column Column name (e.g. A)
@return $this

Shift an AutoFilter Column Rule to a different column.
Note: This method bypasses validation of the destination column to ensure it is within this AutoFilter range.
       Nor does it verify whether any column rule already exists at $toColumn, but will simply override any existing value.
       Use with caution.
@param string $fromColumn Column name (e.g. A)
@param string $toColumn Column name (e.g. B)
@return $this

Test if cell value is in the defined set of values.
@param mixed $cellValue
@param mixed[] $dataSet
@return bool

Test if cell value is in the defined set of Excel date values.
@param mixed $cellValue
@param mixed[] $dataSet
@return bool

Test if cell value is within a set of values defined by a ruleset.
@param mixed $cellValue
@param mixed[] $ruleSet
@return bool

@var array[]

@var string

@var string

@var string

Test if cell date value is matches a set of values defined by a set of months.
@param mixed $cellValue
@param mixed[] $monthSet
@return bool

Convert a dynamic rule daterange to a custom filter range expression for ease of calculation.
@param string $dynamicRuleType
@return mixed[]

Apply the AutoFilter rules to the AutoFilter Range.
@param string $columnID
@param int $startRow
@param int $endRow
@param ?string $ruleType
@param mixed $ruleValue
@return mixed

Apply the AutoFilter rules to the AutoFilter Range.
@return $this

Implement PHP __clone to create a deep clone, not just a shallow copy.

toString method replicates previous behavior by returning the range if object is
referenced as a property of its parent.

## References

**Database Tables (inferred)**
- `0`
- `operator`
- `worksheet`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter`

**Functions/Methods**:
- `getEvaluated()`
- `setEvaluated(bool $value)`
- `__construct($range = '', ?Worksheet $worksheet = null)`
- `getParent()`
- `setParent(?Worksheet $worksheet = null)`
- `getRange()`
- `setRange($range = '')`
- `setRangeToMaxRow()`
- `getColumns()`
- `testColumnInRange($column)`
- `getColumnOffset($column)`
- `getColumn($column)`
- `getColumnByOffset($columnOffset)`
- `setColumn($columnObjectOrString)`
- `clearColumn($column)`
- `shiftColumn($fromColumn, $toColumn)`
- `filterTestInSimpleDataSet($cellValue, $dataSet)`
- `filterTestInDateGroupSet($cellValue, $dataSet)`
- `filterTestInCustomDataSet($cellValue, $ruleSet)`
- `filterTestInPeriodDateSet($cellValue, $monthSet)`
- `makeDateObject(int $year, int $month, int $day, int $hour = 0, int $minute = 0, int $second = 0)`
- `dynamicLastMonth()`
- `firstDayOfQuarter()`
- `dynamicLastQuarter()`
- `dynamicLastWeek()`
- `dynamicLastYear()`
- `dynamicNextMonth()`
- `dynamicNextQuarter()`
- `dynamicNextWeek()`
- `dynamicNextYear()`
- `dynamicThisMonth()`
- `dynamicThisQuarter()`
- `dynamicThisWeek()`
- `dynamicThisYear()`
- `dynamicToday()`
- `dynamicTomorrow()`
- `dynamicYearToDate()`
- `dynamicYesterday()`
- `dynamicFilterDateRange($dynamicRuleType, AutoFilter\Column &$filterColumn)`
- `calculateTopTenValue($columnID, $startRow, $endRow, $ruleType, $ruleValue)`
- `showHideRows()`
- `__clone()`
- `__toString()`

