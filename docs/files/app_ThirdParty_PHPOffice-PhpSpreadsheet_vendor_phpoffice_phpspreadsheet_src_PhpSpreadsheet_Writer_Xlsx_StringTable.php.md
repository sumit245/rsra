# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\StringTable.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\StringTable.php`
- Type: PHP
- Size: 9780 bytes

## Summary (from docblocks)

Create worksheet stringtable.
@param Worksheet $worksheet Worksheet
@param string[] $existingTable Existing table to eventually merge with
@return string[] String table for worksheet

Write string table to XML format.
@param string[] $stringTable
@return string XML Output

Write Rich Text.
@param string $prefix Optional Namespace prefix

Write Rich Text.
@param RichText|string $richText text string or Rich text
@param string $prefix Optional Namespace prefix

Flip string table (for index searching).
@param array $stringTable Stringtable
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\StringTable.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\StringTable extends WriterPart`

**Functions/Methods**:
- `createStringTable(Worksheet $worksheet, $existingTable = null)`
- `writeStringTable(array $stringTable)`
- `writeRichText(XMLWriter $objWriter, RichText $richText, $prefix = null)`
- `writeRichTextForCharts(XMLWriter $objWriter, $richText = null, $prefix = null)`
- `flipStringTable(array $stringTable)`

