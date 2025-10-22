# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Ods.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Ods.php`
- Type: PHP
- Size: 32620 bytes

## Summary (from docblocks)

Create a new Ods Reader instance.

Can the current IReader read the file?

Reads names of the worksheets from a file, without parsing the whole file to a PhpSpreadsheet object.
@param string $filename
@return string[]

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

Counteract Phpstan caching.
@phpstan-impure

Loads PhpSpreadsheet from file.

Loads PhpSpreadsheet from file into PhpSpreadsheet instance.
@param string $filename
@return Spreadsheet

@var DOMElement $workbookData

@var DOMElement $worksheetDataSet

@var DOMElement $childNode

@var DOMElement $cellData

@var DOMElement[] $paragraphs

@var DOMElement $item

@var DOMElement $t

@var DOMElement $t

Recursively scan element.
@return string

@var DOMNode $child

@var DOMAttr $cAttr

@param string $is
@return RichText

## References

**Database Tables (inferred)**
- `a`
- `file`
- `node`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Ods.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Ods extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `listWorksheetNames($filename)`
- `listWorksheetInfo($filename)`
- `getXmlName(XMLReader $xml)`
- `loadSpreadsheetFromFile(string $filename)`
- `loadIntoExisting($filename, Spreadsheet $spreadsheet)`
- `processSettings(ZipArchive $zip, Spreadsheet $spreadsheet)`
- `lookForActiveSheet(DOMElement $settings, Spreadsheet $spreadsheet, string $configNs)`
- `lookForSelectedCells(DOMElement $settings, Spreadsheet $spreadsheet, string $configNs)`
- `setSelected(Spreadsheet $spreadsheet, string $wsname, string $setCol, string $setRow)`
- `scanElementForText(DOMNode $element)`
- `getMultiplier(?DOMAttr $cAttr)`
- `parseRichText($is)`
- `processMergedCells(DOMElement $cellData,
        string $tableNs,
        string $type,
        string $columnID,
        int $rowID,
        Spreadsheet $spreadsheet)`

