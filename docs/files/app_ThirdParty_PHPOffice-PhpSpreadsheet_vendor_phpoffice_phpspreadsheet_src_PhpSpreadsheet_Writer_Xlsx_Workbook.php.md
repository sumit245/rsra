# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Workbook.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Workbook.php`
- Type: PHP
- Size: 7966 bytes

## Summary (from docblocks)

Write workbook to XML format.
@param bool $recalcRequired Indicate whether formulas should be recalculated before writing
@return string XML Output

Write file version.

Write WorkbookPr.

Write BookViews.

Write WorkbookProtection.

Write calcPr.
@param bool $recalcRequired Indicate whether formulas should be recalculated before writing

Write sheets.

Write sheet.
@param string $worksheetName Sheet name
@param int $worksheetId Sheet id
@param int $relId Relationship ID
@param string $sheetState Sheet state (visible, hidden, veryHidden)

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Workbook.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Workbook extends WriterPart`

**Functions/Methods**:
- `writeWorkbook(Spreadsheet $spreadsheet, $recalcRequired = false)`
- `writeFileVersion(XMLWriter $objWriter)`
- `writeWorkbookPr(XMLWriter $objWriter)`
- `writeBookViews(XMLWriter $objWriter, Spreadsheet $spreadsheet)`
- `writeWorkbookProtection(XMLWriter $objWriter, Spreadsheet $spreadsheet)`
- `writeCalcPr(XMLWriter $objWriter, $recalcRequired = true)`
- `writeSheets(XMLWriter $objWriter, Spreadsheet $spreadsheet)`
- `writeSheet(XMLWriter $objWriter, $worksheetName, $worksheetId = 1, $relId = 1, $sheetState = 'visible')`

