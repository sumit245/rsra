# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx.php`
- Type: PHP
- Size: 25493 bytes

## Summary (from docblocks)

Office2003 compatibility.
@var bool

Private Spreadsheet.
@var Spreadsheet

Private string table.
@var string[]

Private unique Conditional HashTable.
@var HashTable<Conditional>

Private unique Style HashTable.
@var HashTable<\PhpOffice\PhpSpreadsheet\Style\Style>

Private unique Fill HashTable.
@var HashTable<Fill>

Private unique \PhpOffice\PhpSpreadsheet\Style\Font HashTable.
@var HashTable<Font>

Private unique Borders HashTable.
@var HashTable<Borders>

Private unique NumberFormat HashTable.
@var HashTable<NumberFormat>

Private unique \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet\BaseDrawing HashTable.
@var HashTable<BaseDrawing>

Private handle for zip stream.
@var ZipStream

@var Chart

@var Comments

@var ContentTypes

@var DocProps

@var Drawing

@var Rels

@var RelsRibbon

@var RelsVBA

@var StringTable

@var Style

@var Theme

@var Table

@var Workbook

@var Worksheet

Create a new Xlsx Writer.

Save PhpSpreadsheet to file.
@param resource|string $filename

@var callable

Get Spreadsheet object.
@return Spreadsheet

Set Spreadsheet object.
@param Spreadsheet $spreadsheet PhpSpreadsheet object
@return $this

Get string table.
@return string[]

Get Style HashTable.
@return HashTable<\PhpOffice\PhpSpreadsheet\Style\Style>

Get Conditional HashTable.
@return HashTable<Conditional>

Get Fill HashTable.
@return HashTable<Fill>

Get \PhpOffice\PhpSpreadsheet\Style\Font HashTable.
@return HashTable<Font>

Get Borders HashTable.
@return HashTable<Borders>

Get NumberFormat HashTable.
@return HashTable<NumberFormat>

Get \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet\BaseDrawing HashTable.
@return HashTable<BaseDrawing>

Get Office2003 compatibility.
@return bool

Set Office2003 compatibility.
@param bool $office2003compatibility Office2003 compatibility?
@return $this

@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx extends BaseWriter`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `getWriterPartChart()`
- `getWriterPartComments()`
- `getWriterPartContentTypes()`
- `getWriterPartDocProps()`
- `getWriterPartDrawing()`
- `getWriterPartRels()`
- `getWriterPartRelsRibbon()`
- `getWriterPartRelsVBA()`
- `getWriterPartStringTable()`
- `getWriterPartStyle()`
- `getWriterPartTheme()`
- `getWriterPartTable()`
- `getWriterPartWorkbook()`
- `getWriterPartWorksheet()`
- `save($filename, int $flags = 0)`
- `getSpreadsheet()`
- `setSpreadsheet(Spreadsheet $spreadsheet)`
- `getStringTable()`
- `getStyleHashTable()`
- `getStylesConditionalHashTable()`
- `getFillHashTable()`
- `getFontHashTable()`
- `getBordersHashTable()`
- `getNumFmtHashTable()`
- `getDrawingHashTable()`
- `getOffice2003Compatibility()`
- `setOffice2003Compatibility($office2003compatibility)`
- `addZipFile(string $path, string $content)`
- `addZipFiles(array $zipContent)`
- `processDrawing(WorksheetDrawing $drawing)`

