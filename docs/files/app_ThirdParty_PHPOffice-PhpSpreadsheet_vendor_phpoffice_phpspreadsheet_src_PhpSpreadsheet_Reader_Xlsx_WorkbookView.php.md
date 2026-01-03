# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\WorkbookView.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\WorkbookView.php`
- Type: PHP
- Size: 5800 bytes

## Summary (from docblocks)

@var Spreadsheet

@param mixed $mainNS

@param mixed $value

Convert an 'xsd:boolean' XML value to a PHP boolean value.
A valid 'xsd:boolean' XML value can be one of the following
four values: 'true', 'false', '1', '0'.  It is case sensitive.
Note that just doing '(bool) $xsdBoolean' is not safe,
since '(bool) "false"' returns true.
@see https://www.w3.org/TR/xmlschema11-2/#boolean
@param string $xsdBoolean An XML string value of type 'xsd:boolean'
@return bool  Boolean value

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\WorkbookView.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xlsx\WorkbookView`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `viewSettings(SimpleXMLElement $xmlWorkbook, $mainNS, array $mapSheetId, bool $readDataOnly)`
- `testSimpleXml($value)`
- `getAttributes(?SimpleXMLElement $value, string $ns = '')`
- `castXsdBooleanToBool(string $xsdBoolean)`
- `horizontalScroll(SimpleXMLElement $workbookViewAttributes)`
- `verticalScroll(SimpleXMLElement $workbookViewAttributes)`
- `sheetTabs(SimpleXMLElement $workbookViewAttributes)`
- `minimized(SimpleXMLElement $workbookViewAttributes)`
- `autoFilterDateGrouping(SimpleXMLElement $workbookViewAttributes)`
- `firstSheet(SimpleXMLElement $workbookViewAttributes)`
- `visibility(SimpleXMLElement $workbookViewAttributes)`
- `tabRatio(SimpleXMLElement $workbookViewAttributes)`

