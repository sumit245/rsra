# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Slk.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Slk.php`
- Type: PHP
- Size: 20080 bytes

## Summary (from docblocks)

Input encoding.
@var string

Sheet index to read.
@var int

Formats.
@var array

Format Count.
@var int

Fonts.
@var array

Font Count.
@var int

Create a new SYLK Reader instance.

Validate that the current file is a SYLK file.

Set input encoding.
@deprecated no use is made of this property
@param string $inputEncoding Input encoding, eg: 'ANSI'
@return $this
@codeCoverageIgnore

Get input encoding.
@deprecated no use is made of this property
@return string
@codeCoverageIgnore

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

Loads PhpSpreadsheet from file.

Loads PhpSpreadsheet from file into PhpSpreadsheet instance.
@param string $filename
@return Spreadsheet

Get sheet index.
@return int

Set sheet index.
@param int $sheetIndex Sheet index
@return $this

## References

**Database Tables (inferred)**
- `file`
- `left`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Slk.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Slk extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `canReadOrBust(string $filename)`
- `setInputEncoding($inputEncoding)`
- `getInputEncoding()`
- `listWorksheetInfo($filename)`
- `loadSpreadsheetFromFile(string $filename)`
- `processFormula(string $rowDatum, bool &$hasCalculatedValue, string &$cellDataFormula, string $row, string $column)`
- `processCRecord(array $rowData, Spreadsheet &$spreadsheet, string &$row, string &$column)`
- `processCFinal(Spreadsheet &$spreadsheet, bool $hasCalculatedValue, string $cellDataFormula, string $cellData, string $coordinate)`
- `processFRecord(array $rowData, Spreadsheet &$spreadsheet, string &$row, string &$column)`
- `styleSettings(string $rowDatum, array &$styleData, string &$fontStyle)`
- `addFormats(Spreadsheet &$spreadsheet, string $formatStyle, string $row, string $column)`
- `addFonts(Spreadsheet &$spreadsheet, string $fontStyle, string $row, string $column)`
- `addStyle(Spreadsheet &$spreadsheet, array $styleData, string $row, string $column)`
- `addWidth(Spreadsheet $spreadsheet, string $columnWidth, string $startCol, string $endCol)`
- `processPRecord(array $rowData, Spreadsheet &$spreadsheet)`
- `processPColors(string $rowDatum, array &$formatArray)`
- `processPFontStyles(string $rowDatum, array &$formatArray)`
- `processPFinal(Spreadsheet &$spreadsheet, array $formatArray)`
- `loadIntoExisting($filename, Spreadsheet $spreadsheet)`
- `columnRowFromRowData(array $rowData, string &$column, string &$row)`
- `getSheetIndex()`
- `setSheetIndex($sheetIndex)`

