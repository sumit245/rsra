# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Html.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Html.php`
- Type: PHP
- Size: 35156 bytes

## Summary (from docblocks)

Sample size to read to determine if it's HTML or not.

Input encoding.
@var string

Sheet index to read.
@var int

Formats.
@var array

@var array

Create a new HTML Reader instance.

Validate that the current file is an HTML file.

Loads Spreadsheet from file.

Set input encoding.
@param string $inputEncoding Input encoding, eg: 'ANSI'
@return $this
@codeCoverageIgnore
@deprecated no use is made of this property

Get input encoding.
@return string
@codeCoverageIgnore
@deprecated no use is made of this property

@var array

@var int

@var array

Flush cell.
@param string $column
@param int|string $row
@param mixed $cellContent

Make sure mb_convert_encoding returns string.
@param mixed $result

Loads PhpSpreadsheet from file into PhpSpreadsheet instance.
@param string $filename
@return Spreadsheet

Spreadsheet from content.
@param string $content

Loads PhpSpreadsheet from DOMDocument into PhpSpreadsheet instance.

Get sheet index.
@return int

Set sheet index.
@param int $sheetIndex Sheet index
@return $this

Apply inline css inline style.
NOTES :
Currently only intended for td & th element,
and only takes 'background-color' and 'color'; property with HEX color
TODO :
- Implement to other propertie, such as border
@param int $row
@param string $column
@param array $attributeArray

Check if has #, so we can get clean hex.
@param mixed $value
@return null|string

@param string    $column
@param int       $row

Map html border style to PhpSpreadsheet border style.
@param  string $style
@return null|string

@param string $styleValue
@param string $type

## References

**Database Tables (inferred)**
- `file`
- `content`
- `DOMDocument`
- `dom`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Html.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Html extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `canRead(string $filename)`
- `readBeginning()`
- `readEnding()`
- `startsWithTag(string $data)`
- `endsWithTag(string $data)`
- `containsTags(string $data)`
- `loadSpreadsheetFromFile(string $filename)`
- `setInputEncoding($inputEncoding)`
- `getInputEncoding()`
- `setTableStartColumn(string $column)`
- `getTableStartColumn()`
- `releaseTableStartColumn()`
- `flushCell(Worksheet $sheet, $column, $row, &$cellContent)`
- `processDomElementBody(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child)`
- `processDomElementTitle(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementSpanEtc(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementHr(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementBr(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementA(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementH1Etc(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementLi(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementImg(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementTable(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementTr(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementThTdOther(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElementBgcolor(Worksheet $sheet, int $row, string $column, array $attributeArray)`
- `processDomElementWidth(Worksheet $sheet, string $column, array $attributeArray)`
- `processDomElementHeight(Worksheet $sheet, int $row, array $attributeArray)`
- `processDomElementAlign(Worksheet $sheet, int $row, string $column, array $attributeArray)`
- `processDomElementVAlign(Worksheet $sheet, int $row, string $column, array $attributeArray)`
- `processDomElementDataFormat(Worksheet $sheet, int $row, string $column, array $attributeArray)`
- `processDomElementThTd(Worksheet $sheet, int &$row, string &$column, string &$cellContent, DOMElement $child, array &$attributeArray)`
- `processDomElement(DOMNode $element, Worksheet $sheet, int &$row, string &$column, string &$cellContent)`
- `ensureString($result)`
- `loadIntoExisting($filename, Spreadsheet $spreadsheet)`
- `loadFromString($content, ?Spreadsheet $spreadsheet = null)`
- `loadDocument(DOMDocument $document, Spreadsheet $spreadsheet)`
- `getSheetIndex()`
- `setSheetIndex($sheetIndex)`
- `applyInlineStyle(Worksheet &$sheet, $row, $column, $attributeArray)`
- `getStyleColor($value)`
- `insertImage(Worksheet $sheet, $column, $row, array $attributes)`
- `getBorderMappings()`
- `getBorderStyle($style)`
- `setBorderStyle(Style $cellStyle, $styleValue, $type)`

