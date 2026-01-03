# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Gnumeric.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Gnumeric.php`
- Type: PHP
- Size: 21362 bytes

## Summary (from docblocks)

Shared Expressions.
@var array

Spreadsheet shared across all functions.
@var Spreadsheet

@var ReferenceHelper

@var array

Create a new Gnumeric.

Can the current IReader read the file?

Reads names of the worksheets from a file, without parsing the whole file to a Spreadsheet object.
@param string $filename
@return array

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

@param string $filename
@return string

@param mixed $value

Loads Spreadsheet from file.

Loads from file into Spreadsheet instance.

## References

**Database Tables (inferred)**
- `a`
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Gnumeric.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Gnumeric extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `matchXml(XMLReader $xml, string $expectedLocalName)`
- `listWorksheetNames($filename)`
- `listWorksheetInfo($filename)`
- `gzfileGetContents($filename)`
- `gnumericMappings()`
- `processComments(SimpleXMLElement $sheet)`
- `testSimpleXml($value)`
- `loadSpreadsheetFromFile(string $filename)`
- `loadIntoExisting(string $filename, Spreadsheet $spreadsheet)`
- `setSelectedSheet(SimpleXMLElement $gnmXML)`
- `setSelectedCells(?SimpleXMLElement $sheet)`
- `processMergedCells(?SimpleXMLElement $sheet)`
- `processAutofilter(?SimpleXMLElement $sheet)`
- `setColumnWidth(int $whichColumn, float $defaultWidth)`
- `setColumnInvisible(int $whichColumn)`
- `processColumnLoop(int $whichColumn, int $maxCol, ?SimpleXMLElement $columnOverride, float $defaultWidth)`
- `processColumnWidths(?SimpleXMLElement $sheet, int $maxCol)`
- `setRowHeight(int $whichRow, float $defaultHeight)`
- `setRowInvisible(int $whichRow)`
- `processRowLoop(int $whichRow, int $maxRow, ?SimpleXMLElement $rowOverride, float $defaultHeight)`
- `processRowHeights(?SimpleXMLElement $sheet, int $maxRow)`
- `processDefinedNames(?SimpleXMLElement $gnmXML)`
- `parseRichText(string $is)`
- `loadCell(SimpleXMLElement $cell,
        string $worksheetName,
        SimpleXMLElement $cellAttributes,
        string $column,
        int $row)`

