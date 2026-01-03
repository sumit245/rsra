# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\IReader.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\IReader.php`
- Type: PHP
- Size: 3920 bytes

## Summary (from docblocks)

IReader constructor.

Can the current IReader read the file?

Read data only?
       If this is true, then the Reader will only read data values for cells, it will not read any formatting information.
       If false (the default) it will read data and formatting.
@return bool

Set read data only
       Set to true, to advise the Reader only to read data values for cells, and to ignore any formatting information.
       Set to false (the default) to advise the Reader to read both data and formatting for cells.
@param bool $readDataOnly
@return IReader

Read empty cells?
       If this is true (the default), then the Reader will read data values for all cells, irrespective of value.
       If false it will not read data for cells containing a null value or an empty string.
@return bool

Set read empty cells
       Set to true (the default) to advise the Reader read data values for all cells, irrespective of value.
       Set to false to advise the Reader to ignore cells containing a null value or an empty string.
@param bool $readEmptyCells
@return IReader

Read charts in workbook?
       If this is true, then the Reader will include any charts that exist in the workbook.
     Note that a ReadDataOnly value of false overrides, and charts won't be read regardless of the IncludeCharts value.
       If false (the default) it will ignore any charts defined in the workbook file.
@return bool

Set read charts in workbook
       Set to true, to advise the Reader to include any charts that exist in the workbook.
     Note that a ReadDataOnly value of false overrides, and charts won't be read regardless of the IncludeCharts value.
       Set to false (the default) to discard charts.
@param bool $includeCharts
@return IReader

Get which sheets to load
Returns either an array of worksheet names (the list of worksheets that should be loaded), or a null
       indicating that all worksheets in the workbook should be loaded.
@return mixed

Set which sheets to load.
@param mixed $value
       This should be either an array of worksheet names to be loaded, or a string containing a single worksheet name.
       If NULL, then it tells the Reader to read all worksheets in the workbook
@return IReader

Set all sheets to load
       Tells the Reader to load all worksheets from the workbook.
@return IReader

Read filter.
@return IReadFilter

Set read filter.
@return IReader

Loads PhpSpreadsheet from file.
@return \PhpOffice\PhpSpreadsheet\Spreadsheet

## References

**Database Tables (inferred)**
- `the`
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\IReader.php`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `getReadDataOnly()`
- `setReadDataOnly($readDataOnly)`
- `getReadEmptyCells()`
- `setReadEmptyCells($readEmptyCells)`
- `getIncludeCharts()`
- `setIncludeCharts($includeCharts)`
- `getLoadSheetsOnly()`
- `setLoadSheetsOnly($value)`
- `setLoadAllSheets()`
- `getReadFilter()`
- `setReadFilter(IReadFilter $readFilter)`
- `load(string $filename, int $flags = 0)`

