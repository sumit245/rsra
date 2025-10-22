# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Worksheet.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Worksheet.php`
- Type: PHP
- Size: 64522 bytes

## Summary (from docblocks)

Write worksheet to XML format.
@param string[] $stringTable
@param bool $includeCharts Flag indicating if we should write charts
@return string XML Output

Write SheetPr.

Write Dimension.

Write SheetViews.

Write SheetFormatPr.

Write Cols.

Write SheetProtection.

@var ConditionalDataBar $dataBar

Write ConditionalFormatting.

Write DataValidations.

Write Hyperlinks.

Write ProtectedRanges.

Write MergeCells.

Write PrintOptions.

Write PageMargins.

Write AutoFilter.

Write Table.

Write PageSetup.

Write Header / Footer.

Write Breaks.

Write SheetData.
@param string[] $stringTable String table

@param RichText|string $cellValue

@param RichText|string $cellValue
@param string[] $flippedStringTable

@param float|int $cellValue

Write Cell.
@param string $cellAddress Cell Address
@param string[] $flippedStringTable String table (flipped), for faster index searching

Write Drawings.
@param bool $includeCharts Flag indicating if we should include drawing details for charts

Write LegacyDrawing.

Write LegacyDrawingHF.

write <ExtLst>
only implementation conditionalFormattings.
@url https://docs.microsoft.com/en-us/openspecs/office_standards/ms-xlsx/07d607af-5618-4ca2-b683-6a78dc0d9627

@var Conditional $conditional

## References

**Database Tables (inferred)**
- `ms`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Worksheet.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet extends WriterPart`

**Functions/Methods**:
- `writeWorksheet(PhpspreadsheetWorksheet $worksheet, $stringTable = null, $includeCharts = false)`
- `writeSheetPr(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeDimension(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeSheetViews(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeSheetFormatPr(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeCols(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeSheetProtection(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeAttributeIf(XMLWriter $objWriter, $condition, string $attr, string $val)`
- `writeAttributeNotNull(XMLWriter $objWriter, string $attr, ?string $val)`
- `writeElementIf(XMLWriter $objWriter, $condition, string $attr, string $val)`
- `writeOtherCondElements(XMLWriter $objWriter, Conditional $conditional, string $cellCoordinate)`
- `writeTimePeriodCondElements(XMLWriter $objWriter, Conditional $conditional, string $cellCoordinate)`
- `writeTextCondElements(XMLWriter $objWriter, Conditional $conditional, string $cellCoordinate)`
- `writeExtConditionalFormattingElements(XMLWriter $objWriter, ConditionalFormattingRuleExtension $ruleExtension)`
- `writeDataBarElements(XMLWriter $objWriter, $dataBar)`
- `writeConditionalFormatting(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeDataValidations(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeHyperlinks(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeProtectedRanges(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeMergeCells(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writePrintOptions(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writePageMargins(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeAutoFilter(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeTable(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writePageSetup(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeHeaderFooter(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeBreaks(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeSheetData(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet, array $stringTable)`
- `writeCellInlineStr(XMLWriter $objWriter, string $mappedType, $cellValue)`
- `writeCellString(XMLWriter $objWriter, string $mappedType, $cellValue, array $flippedStringTable)`
- `writeCellNumeric(XMLWriter $objWriter, $cellValue)`
- `writeCellBoolean(XMLWriter $objWriter, string $mappedType, bool $cellValue)`
- `writeCellError(XMLWriter $objWriter, string $mappedType, string $cellValue, string $formulaerr = '#NULL!')`
- `writeCellFormula(XMLWriter $objWriter, string $cellValue, Cell $cell)`
- `writeCell(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet, string $cellAddress, array $flippedStringTable)`
- `writeDrawings(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet, $includeCharts = false)`
- `writeLegacyDrawing(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeLegacyDrawingHF(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeAlternateContent(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`
- `writeExtLst(XMLWriter $objWriter, PhpspreadsheetWorksheet $worksheet)`

