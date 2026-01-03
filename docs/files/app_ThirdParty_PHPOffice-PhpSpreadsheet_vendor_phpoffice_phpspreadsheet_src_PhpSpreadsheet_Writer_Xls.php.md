# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls.php`
- Type: PHP
- Size: 35636 bytes

## Summary (from docblocks)

PhpSpreadsheet object.
@var Spreadsheet

Total number of shared strings in workbook.
@var int

Number of unique shared strings in workbook.
@var int

Array of unique shared strings in workbook.
@var array

Color cache. Mapping between RGB value and color index.
@var array

Formula parser.
@var Parser

Identifier clusters for drawings. Used in MSODRAWINGGROUP record.
@var array

Basic OLE object summary information.
@var string

Extended OLE object document summary information.
@var string

@var Workbook

@var Worksheet[]

Create a new Xls Writer.
@param Spreadsheet $spreadsheet PhpSpreadsheet object

Save Spreadsheet to file.
@param resource|string $filename

Build the Worksheet Escher objects.

Build the Escher object corresponding to the MSODRAWINGGROUP record.

Build the OLE Part for DocumentSummary Information.
@return string

@param float|int $dataProp

Build the OLE Part for Summary Information.
@return string

## References

**Database Tables (inferred)**
- `rich`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xls extends BaseWriter`
- `PhpOffice\PhpSpreadsheet\Writer\id`
- `PhpOffice\PhpSpreadsheet\Writer\id`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `save($filename, int $flags = 0)`
- `buildWorksheetEschers()`
- `processMemoryDrawing(BstoreContainer &$bstoreContainer, MemoryDrawing $drawing, string $renderingFunctionx)`
- `processDrawing(BstoreContainer &$bstoreContainer, Drawing $drawing)`
- `processBaseDrawing(BstoreContainer &$bstoreContainer, BaseDrawing $drawing)`
- `checkForDrawings()`
- `buildWorkbookEscher()`
- `writeDocumentSummaryInformation()`
- `writeSummaryPropOle($dataProp, int &$dataSection_NumProps, array &$dataSection, int $sumdata, int $typdata)`
- `writeSummaryProp(string $dataProp, int &$dataSection_NumProps, array &$dataSection, int $sumdata, int $typdata)`
- `writeSummaryInformation()`

