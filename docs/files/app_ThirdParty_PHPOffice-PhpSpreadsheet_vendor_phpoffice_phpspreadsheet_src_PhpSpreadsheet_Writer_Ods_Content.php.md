# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Ods\Content.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Ods\Content.php`
- Type: PHP
- Size: 15045 bytes

## Summary (from docblocks)

@author     Alexander Pervakov <frost-nzcr4@jagmort.com>

Set parent Ods writer.

Write content.xml to XML format.
@return string XML Output

Write sheets.

@var Spreadsheet $spreadsheet

Write rows of the specified sheet.

Write cells of the specified row.

@var \PhpOffice\PhpSpreadsheet\Cell\Cell $cell

Write span.
@param int $curColumn
@param int $prevColumn

Write XF cell styles.

Write attributes for merged cell.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Ods\Content.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Ods\Content extends WriterPart`

**Functions/Methods**:
- `__construct(Ods $writer)`
- `write()`
- `writeSheets(XMLWriter $objWriter)`
- `writeRows(XMLWriter $objWriter, Worksheet $sheet, int $sheetIndex)`
- `writeCells(XMLWriter $objWriter, Row $row)`
- `writeCellSpan(XMLWriter $objWriter, $curColumn, $prevColumn)`
- `writeXfStyles(XMLWriter $writer, Spreadsheet $spreadsheet)`
- `writeCellMerge(XMLWriter $objWriter, Cell $cell)`

