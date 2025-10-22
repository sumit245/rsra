# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Workbook.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Workbook.php`
- Type: PHP
- Size: 41458 bytes

## Summary (from docblocks)

Formula parser.
@var \PhpOffice\PhpSpreadsheet\Writer\Xls\Parser

The BIFF file size for the workbook.
@var int
@see calcSheetOffsets()

XF Writers.
@var \PhpOffice\PhpSpreadsheet\Writer\Xls\Xf[]

Array containing the colour palette.
@var array

The codepage indicates the text encoding used for strings.
@var int

The country code used for localization.
@var int

Workbook.
@var Spreadsheet

Fonts writers.
@var Font[]

Added fonts. Maps from font's hash => index in workbook.
@var array

Shared number formats.
@var array

Added number formats. Maps from numberFormat's hash => index in workbook.
@var array

Sizes of the binary worksheet streams.
@var array

Offsets of the binary worksheet streams relative to the start of the global workbook stream.
@var array

Total number of shared strings in workbook.
@var int

Number of unique shared strings in workbook.
@var int

Array of unique shared strings in workbook.
@var array

Color cache.

Escher object corresponding to MSODRAWINGGROUP.
@var null|\PhpOffice\PhpSpreadsheet\Shared\Escher

Class constructor.
@param Spreadsheet $spreadsheet The Workbook
@param int $str_total Total number of strings
@param int $str_unique Total number of unique strings
@param array $str_table String Table
@param array $colors Colour Table
@param Parser $parser The formula parser created for the Workbook

Add a new XF writer.
@param bool $isStyleXf Is it a style XF?
@return int Index to XF record

Add a font to added fonts.
@return int Index to FONT record

Alter color palette adding a custom color.
@param string $rgb E.g. 'FF00AA'
@return int Color index

Sets the colour palette to the Excel 97+ default.

Assemble worksheets into a workbook and send the BIFF data to an OLE
storage.
@param array $worksheetSizes The sizes in bytes of the binary worksheet streams
@return string Binary data for workbook stream

Calculate offsets for Worksheet BOF records.

Store the Excel FONT records.

Store user defined numerical formats i.e. FORMAT records.

Write all XF records.

Write all STYLE records.

Writes all the DEFINEDNAME records (BIFF8).
So far this is only used for repeating rows/columns (print titles) and print areas.

local scope.
@phpstan-ignore-next-line

Write a DEFINEDNAME record for BIFF8 using explicit binary formula data.
@param string $name The name in UTF-8
@param string $formulaData The binary formula data
@param int $sheetIndex 1-based sheet index the defined name applies to. 0 = global
@param bool $isBuiltIn Built-in name?
@return string Complete binary record data

Write a short NAME record.
@param string $name
@param int $sheetIndex 1-based sheet index the defined name applies to. 0 = global
@param int[][] $rangeBounds range boundaries
@param bool $isHidden
@return string Complete binary record data

Stores the CODEPAGE biff record.

Write Excel BIFF WINDOW1 record.

Writes Excel BIFF BOUNDSHEET record.
@param int $offset Location of worksheet BOF

Write Internal SUPBOOK record.

Writes the Excel BIFF EXTERNSHEET record. These references are used by
formulas.

Write Excel BIFF STYLE records.

Writes Excel FORMAT record for non "built-in" numerical formats.
@param string $format Custom format string
@param int $ifmt Format index code

Write DATEMODE record to indicate the date system in use (1904 or 1900).

Stores the COUNTRY record for localization.
@return string

Write the RECALCID record.
@return string

Stores the PALETTE biff record.

Handling of the SST continue blocks is complicated by the need to include an
additional continuation byte depending on whether the string is split between
blocks or whether it starts at the beginning of the block. (There are also
additional complications that will arise later when/if Rich Strings are
supported).
The Excel documentation says that the SST record should be followed by an
EXTSST record. The EXTSST record is a hash table that is used to optimise
access to SST. However, despite the documentation it doesn't seem to be
required so we will ignore it.
@return string Binary data

Writes the MSODRAWINGGROUP record if needed. Possibly split using CONTINUE records.

Get Escher object.

Set Escher object.

## References

**Database Tables (inferred)**
- `the`
- `font`
- `numberFormat`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Workbook.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xls\library`
- `PhpOffice\PhpSpreadsheet\Writer\Xls\Workbook extends BIFFwriter`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet, &$str_total, &$str_unique, &$str_table, &$colors, Parser $parser)`
- `addXfWriter(Style $style, $isStyleXf = false)`
- `addFont(\PhpOffice\PhpSpreadsheet\Style\Font $font)`
- `addColor($rgb)`
- `setPaletteXl97()`
- `writeWorkbook(array $worksheetSizes)`
- `calcSheetOffsets()`
- `writeAllFonts()`
- `writeAllNumberFormats()`
- `writeAllXfs()`
- `writeAllStyles()`
- `parseDefinedNameValue(DefinedName $definedName)`
- `writeAllDefinedNamesBiff8()`
- `writeDefinedNameBiff8($name, $formulaData, $sheetIndex = 0, $isBuiltIn = false)`
- `writeShortNameBiff8($name, $sheetIndex, $rangeBounds, $isHidden = false)`
- `writeCodepage()`
- `writeWindow1()`
- `writeBoundSheet(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet, $offset)`
- `writeSupbookInternal()`
- `writeExternalsheetBiff8()`
- `writeStyle()`
- `writeNumberFormat($format, $ifmt)`
- `writeDateMode()`
- `writeCountry()`
- `writeRecalcId()`
- `writePalette()`
- `writeSharedStringsTable()`
- `writeMsoDrawingGroup()`
- `getEscher()`
- `setEscher(?\PhpOffice\PhpSpreadsheet\Shared\Escher $escher)`

