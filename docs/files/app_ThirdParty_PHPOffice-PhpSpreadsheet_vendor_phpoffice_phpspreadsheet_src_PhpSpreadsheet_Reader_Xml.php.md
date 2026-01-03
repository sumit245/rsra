# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xml.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xml.php`
- Type: PHP
- Size: 21083 bytes

## Summary (from docblocks)

Reader for SpreadsheetML, the XML schema for Microsoft Office Excel 2003.

Formats.
@var array

Create a new Excel2003XML Reader instance.

Can the current IReader read the file?

Check if the file is a valid SimpleXML.
@param string $filename
@return false|SimpleXMLElement

Reads names of the worksheets from a file, without parsing the whole file to a Spreadsheet object.
@param string $filename
@return array

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

Loads Spreadsheet from file.

Loads from file into Spreadsheet instance.
@param string $filename
@return Spreadsheet

@var null|SimpleXMLElement $worksheetx

## References

**Database Tables (inferred)**
- `a`
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xml.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xml extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `xmlMappings()`
- `canRead(string $filename)`
- `trySimpleXMLLoadString($filename)`
- `listWorksheetNames($filename)`
- `listWorksheetInfo($filename)`
- `loadSpreadsheetFromFile(string $filename)`
- `loadIntoExisting($filename, Spreadsheet $spreadsheet)`
- `parseCellComment(SimpleXMLElement $comment,
        array $namespaces,
        Spreadsheet $spreadsheet,
        string $columnID,
        int $rowID)`
- `parseRichText(string $annotation)`
- `getAttributes(?SimpleXMLElement $simple, string $node)`

