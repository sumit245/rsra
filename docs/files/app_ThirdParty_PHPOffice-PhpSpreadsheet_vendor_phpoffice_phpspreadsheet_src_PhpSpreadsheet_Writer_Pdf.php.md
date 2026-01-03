# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Pdf.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Pdf.php`
- Type: PHP
- Size: 9278 bytes

## Summary (from docblocks)

Temporary storage directory.
@var string

Font.
@var string

Orientation (Over-ride).
@var ?string

Paper size (Over-ride).
@var ?int

Paper Sizes xRef List.
@var array

Create a new PDF Writer instance.
@param Spreadsheet $spreadsheet Spreadsheet object

Get Font.
@return string

Set font. Examples:
     'arialunicid0-chinese-simplified'
     'arialunicid0-chinese-traditional'
     'arialunicid0-korean'
     'arialunicid0-japanese'.
@param string $fontName
@return $this

Get Paper Size.
@return ?int

Set Paper Size.
@param int $paperSize Paper size see PageSetup::PAPERSIZE_*
@return self

Get Orientation.

Set Orientation.
@param string $orientation Page orientation see PageSetup::ORIENTATION_*
@return self

Get temporary storage directory.
@return string

Set temporary storage directory.
@param string $temporaryDirectory Temporary storage directory
@return self

Save Spreadsheet to PDF file, pre-save.
@param string $filename Name of the file to save as
@return resource

Save PhpSpreadsheet to PDF file, post-save.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Pdf.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Pdf extends Html`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `getFont()`
- `setFont($fontName)`
- `getPaperSize()`
- `setPaperSize($paperSize)`
- `getOrientation()`
- `setOrientation($orientation)`
- `getTempDir()`
- `setTempDir($temporaryDirectory)`
- `prepareForSave($filename)`
- `restoreStateAfterSave()`

