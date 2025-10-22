# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx.php`
- Type: PHP
- Size: 116992 bytes

## Summary (from docblocks)

ReferenceHelper instance.
@var ReferenceHelper

@var ZipArchive

@var Styles

Create a new Xlsx Reader instance.

Can the current IReader read the file?

@param mixed $value

@param mixed $value

Reads names of the worksheets from a file, without parsing the whole file to a Spreadsheet object.
@param string $filename
@return array

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).
@param string $filename
@return array

@var SimpleXMLElement $eleSheet

@param string $fileName

@param string $fileName
@return string

Loads Spreadsheet from file.

@var SimpleXMLElement $eleSheet

@var SimpleXMLElement $blip

@var SimpleXMLElement $xfrm

@var SimpleXMLElement $outerShdw

@var SimpleXMLElement $hlinkClick

@var SimpleXMLElement $chartRef

@scrutinizer ignore-call

@var SimpleXMLElement $chartRef

@return RichText

@var SimpleXMLElement $run

@param array $hyperlinks

## References

**Database Tables (inferred)**
- `a`
- `the`
- `file`
- `old`
- `1`
- `it`
- `twoCellAnchors`
- `Google`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xlsx extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `testSimpleXml($value)`
- `getAttributes(?SimpleXMLElement $value, string $ns = '')`
- `xpathNoFalse(SimpleXmlElement $sxml, string $path)`
- `falseToArray($value)`
- `loadZip(string $filename, string $ns = '')`
- `loadZipNonamespace(string $filename, string $ns)`
- `listWorksheetNames($filename)`
- `listWorksheetInfo($filename)`
- `castToBoolean($c)`
- `castToError($c)`
- `castToString($c)`
- `castToFormula($c, $r, &$cellDataType, &$value, &$calculatedValue, &$sharedFormulas, $castBaseType)`
- `fileExistsInArchive(ZipArchive $archive, $fileName = '')`
- `getFromZipArchive(ZipArchive $archive, $fileName = '')`
- `loadSpreadsheetFromFile(string $filename)`
- `parseRichText(?SimpleXMLElement $is)`
- `readRibbon(Spreadsheet $excel, string $customUITarget, ZipArchive $zip)`
- `getArrayItem($array, $key = 0)`
- `dirAdd($base, $add)`
- `toCSSArray($style)`
- `stripWhiteSpaceFromStyleString($string)`
- `boolean($value)`
- `readHyperLinkDrawing(\PhpOffice\PhpSpreadsheet\Worksheet\Drawing $objDrawing, SimpleXMLElement $cellAnchor, $hyperlinks)`
- `readProtection(Spreadsheet $excel, SimpleXMLElement $xmlWorkbook)`
- `getLockValue(SimpleXmlElement $protection, string $key)`
- `readFormControlProperties(Spreadsheet $excel, $dir, $fileWorksheet, $docSheet, array &$unparsedLoadedData)`
- `readPrinterSettings(Spreadsheet $excel, $dir, $fileWorksheet, $docSheet, array &$unparsedLoadedData)`
- `getWorkbookBaseName()`
- `readSheetProtection(Worksheet $docSheet, SimpleXMLElement $xmlSheet)`
- `readAutoFilterTables(SimpleXMLElement $xmlSheet,
        Worksheet $docSheet,
        string $dir,
        string $fileWorksheet,
        ZipArchive $zip)`
- `readAutoFilterTablesInTablesFile(SimpleXMLElement $xmlSheet,
        string $dir,
        string $fileWorksheet,
        ZipArchive $zip,
        Worksheet $docSheet)`
- `extractStyles(?SimpleXMLElement $sxml, string $node1, string $node2)`
- `extractPalette(?SimpleXMLElement $sxml)`

