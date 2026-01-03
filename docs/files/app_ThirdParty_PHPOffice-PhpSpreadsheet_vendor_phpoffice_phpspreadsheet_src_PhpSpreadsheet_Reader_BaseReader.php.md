# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\BaseReader.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\BaseReader.php`
- Type: PHP
- Size: 4725 bytes

## Summary (from docblocks)

Read data only?
Identifies whether the Reader should only read data values for cells, and ignore any formatting information;
       or whether it should read both data and formatting.
@var bool

Read empty cells?
Identifies whether the Reader should read data values for cells all cells, or should ignore cells containing
        null value or empty string.
@var bool

Read charts that are defined in the workbook?
Identifies whether the Reader should read the definitions for any charts that exist in the workbook;.
@var bool

Restrict which sheets should be loaded?
This property holds an array of worksheet names to be loaded. If null, then all worksheets will be loaded.
@var null|string[]

IReadFilter instance.
@var IReadFilter

@var XmlScanner

Loads Spreadsheet from file.
@param int $flags the optional second parameter flags may be used to identify specific elements
                      that should be loaded, but which won't be loaded by default, using these values:
                           IReader::LOAD_WITH_CHARTS - Include any charts that are defined in the loaded file

Open file for reading.

## References

**Database Tables (inferred)**
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\BaseReader.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\BaseReader implements IReader`

**Functions/Methods**:
- `__construct()`
- `getReadDataOnly()`
- `setReadDataOnly($readCellValuesOnly)`
- `getReadEmptyCells()`
- `setReadEmptyCells($readEmptyCells)`
- `getIncludeCharts()`
- `setIncludeCharts($includeCharts)`
- `getLoadSheetsOnly()`
- `setLoadSheetsOnly($sheetList)`
- `setLoadAllSheets()`
- `getReadFilter()`
- `setReadFilter(IReadFilter $readFilter)`
- `getSecurityScanner()`
- `processFlags(int $flags)`
- `loadSpreadsheetFromFile(string $filename)`
- `load(string $filename, int $flags = 0)`
- `openFile(string $filename)`

