# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Rels.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Rels.php`
- Type: PHP
- Size: 17762 bytes

## Summary (from docblocks)

Write relationships to XML format.
@return string XML Output

Write workbook relationships to XML format.
@return string XML Output

Write worksheet relationships to XML format.
Numbering is as follows:
    rId1                 - Drawings
 rId_hyperlink_x     - Hyperlinks
@param int $worksheetId
@param bool $includeCharts Flag indicating if we should write charts
@param int $tableRef Table ID
@return string XML Output

Write drawing relationships to XML format.
@param int $chartRef Chart ID
@param bool $includeCharts Flag indicating if we should write charts
@return string XML Output

Write header/footer drawing relationships to XML format.
@return string XML Output

Write Override content type.
@param int $id Relationship ID. rId will be prepended!
@param string $type Relationship type
@param string $target Relationship target
@param string $targetMode Relationship target mode

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Rels.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels extends WriterPart`

**Functions/Methods**:
- `writeRelationships(Spreadsheet $spreadsheet)`
- `writeWorkbookRelationships(Spreadsheet $spreadsheet)`
- `writeWorksheetRelationships(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet, $worksheetId = 1, $includeCharts = false, $tableRef = 1)`
- `writeUnparsedRelationship(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet, XMLWriter $objWriter, $relationship, $type)`
- `writeDrawingRelationships(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet, &$chartRef, $includeCharts = false)`
- `writeHeaderFooterDrawingRelationships(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet)`
- `writeVMLDrawingRelationships(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet)`
- `writeRelationship(XMLWriter $objWriter, $id, $type, $target, $targetMode = '')`
- `writeDrawingHyperLink(XMLWriter $objWriter, BaseDrawing $drawing, int $i)`

