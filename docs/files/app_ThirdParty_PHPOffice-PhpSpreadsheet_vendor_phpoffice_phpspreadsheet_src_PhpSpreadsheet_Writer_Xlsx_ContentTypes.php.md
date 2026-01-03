# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\ContentTypes.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\ContentTypes.php`
- Type: PHP
- Size: 12106 bytes

## Summary (from docblocks)

Write content types to XML format.
@param bool $includeCharts Flag indicating if we should include drawing details for charts
@return string XML Output

Get image mime type.
@param string $filename Filename
@return string Mime Type

Write Default content type.
@param string $partName Part name
@param string $contentType Content type

Write Override content type.
@param string $partName Part name
@param string $contentType Content type

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\ContentTypes.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\ContentTypes extends WriterPart`

**Functions/Methods**:
- `writeContentTypes(Spreadsheet $spreadsheet, $includeCharts = false)`
- `getImageMimeType($filename)`
- `writeDefaultContentType(XMLWriter $objWriter, $partName, $contentType)`
- `writeOverrideContentType(XMLWriter $objWriter, $partName, $contentType)`

