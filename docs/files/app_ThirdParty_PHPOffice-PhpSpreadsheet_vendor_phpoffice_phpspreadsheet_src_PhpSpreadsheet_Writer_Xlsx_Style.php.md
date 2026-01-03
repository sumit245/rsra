# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Style.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Style.php`
- Type: PHP
- Size: 24192 bytes

## Summary (from docblocks)

Write styles to XML format.
@return string XML Output

Write Fill.

Write Gradient Fill.

Write Pattern Fill.

Write Font.

Write Border.

Write Cell Style Xf.

Write Cell Style Dxf.

Write BorderPr.
@param string $name Element name

Write NumberFormat.
@param int $id Number Format identifier

Get an array of all styles.
@return \PhpOffice\PhpSpreadsheet\Style\Style[] All styles in PhpSpreadsheet

Get an array of all conditional styles.
@return Conditional[] All conditional styles in PhpSpreadsheet

Get an array of all fills.
@return Fill[] All fills in PhpSpreadsheet

@var \PhpOffice\PhpSpreadsheet\Style\Style $style

Get an array of all fonts.
@return Font[] All fonts in PhpSpreadsheet

@var \PhpOffice\PhpSpreadsheet\Style\Style $style

Get an array of all borders.
@return Borders[] All borders in PhpSpreadsheet

@var \PhpOffice\PhpSpreadsheet\Style\Style $style

Get an array of all number formats.
@return NumberFormat[] All number formats in PhpSpreadsheet

@var \PhpOffice\PhpSpreadsheet\Style\Style $style

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx\Style.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xlsx\Style extends WriterPart`

**Functions/Methods**:
- `writeStyles(Spreadsheet $spreadsheet)`
- `writeFill(XMLWriter $objWriter, Fill $fill)`
- `writeGradientFill(XMLWriter $objWriter, Fill $fill)`
- `writePatternColors(Fill $fill)`
- `writePatternFill(XMLWriter $objWriter, Fill $fill)`
- `writeFont(XMLWriter $objWriter, Font $font)`
- `writeBorder(XMLWriter $objWriter, Borders $borders)`
- `writeCellStyleXf(XMLWriter $objWriter, \PhpOffice\PhpSpreadsheet\Style\Style $style, Spreadsheet $spreadsheet)`
- `writeCellStyleDxf(XMLWriter $objWriter, \PhpOffice\PhpSpreadsheet\Style\Style $style)`
- `writeBorderPr(XMLWriter $objWriter, $name, Border $border)`
- `writeNumFmt(XMLWriter $objWriter, NumberFormat $numberFormat, $id = 0)`
- `allStyles(Spreadsheet $spreadsheet)`
- `allConditionalStyles(Spreadsheet $spreadsheet)`
- `allFills(Spreadsheet $spreadsheet)`
- `allFonts(Spreadsheet $spreadsheet)`
- `allBorders(Spreadsheet $spreadsheet)`
- `allNumberFormats(Spreadsheet $spreadsheet)`

