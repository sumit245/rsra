# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Drawing.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Drawing.php`
- Type: PHP
- Size: 20622 bytes

## Summary (from docblocks)

Write drawings to XML format.
@param bool $includeCharts Flag indicating if we should include drawing details for charts
@return string XML Output

@var BaseDrawing $pDrawing

Write drawings to XML format.
@param int $relationId

Write drawings to XML format.
@param int $relationId
@param null|int $hlinkClickId

Write VML header/footer images to XML format.
@return string XML Output

Write VML comment to XML format.
@param string $reference Reference

Get an array of all drawings.
@return BaseDrawing[] All drawings in PhpSpreadsheet

@param null|int $hlinkClickId

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Drawing.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Drawing extends WriterPart`

**Functions/Methods**:
- `writeDrawings(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet, $includeCharts = false)`
- `writeChart(XMLWriter $objWriter, \PhpOffice\PhpSpreadsheet\Chart\Chart $chart, $relationId = -1)`
- `writeDrawing(XMLWriter $objWriter, BaseDrawing $drawing, $relationId = -1, $hlinkClickId = null)`
- `writeVMLHeaderFooterImages(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $worksheet)`
- `writeVMLHeaderFooterImage(XMLWriter $objWriter, $reference, HeaderFooterDrawing $image)`
- `allDrawings(Spreadsheet $spreadsheet)`
- `writeHyperLinkDrawing(XMLWriter $objWriter, $hlinkClickId)`
- `stringEmu(int $pixelValue)`

