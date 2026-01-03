# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Font.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Font.php`
- Type: PHP
- Size: 27145 bytes

## Summary (from docblocks)

Character set codes used by BIFF5-8 in Font records

Font filenames

AutoSize method.
@var string

Path to folder containing TrueType font .ttf files.
@var string

How wide is a default column for a given default font and size?
Empirical data found by inspecting real Excel files and reading off the pixel width
in Microsoft Office Excel 2007.
@var array

Set autoSize method.
@param string $method see self::AUTOSIZE_METHOD_*
@return bool Success or failure

Get autoSize method.
@return string

Set the path to the folder containing .ttf files. There should be a trailing slash.
Typical locations on variout some platforms:
   <ul>
       <li>C:/Windows/Fonts/</li>
       <li>/usr/share/fonts/truetype/</li>
       <li>~/.fonts/</li>
</ul>.
@param string $folderPath

Get the path to the folder containing .ttf files.
@return string

Calculate an (approximate) OpenXML column width, based on font size and text contained.
@param FontStyle $font Font object
@param RichText|string $cellText Text to calculate width
@param int $rotation Rotation angle
@param null|FontStyle $defaultFont Font object
@param bool $filterAdjustment Add space for Autofilter or Table dropdown

Get GD text width in pixels for a string of text in a certain font at a certain rotation angle.

Get approximate width in pixels for a string of text in a certain font at a certain rotation angle.
@param string $columnText
@param int $rotation
@return int Text width in pixels (no padding added)

Calculate an (approximate) pixel size, based on a font points size.
@param int $fontSizeInPoints Font size (in points)
@return int Font size (in pixels)

Calculate an (approximate) pixel size, based on inch size.
@param int $sizeInInch Font size (in inch)
@return int Size (in pixels)

Calculate an (approximate) pixel size, based on centimeter size.
@param int $sizeInCm Font size (in centimeters)
@return float Size (in pixels)

Returns the font path given the font.
@return string Path to TrueType font file

Returns the associated charset for the font name.
@param string $fontName Font name
@return int Character set code

Get the effective column width for columns without a column dimension or column with width -1
For example, for Calibri 11 this is 9.140625 (64 px).
@param FontStyle $font The workbooks default font
@param bool $returnAsPixels true = return column width in pixels, false = return in OOXML units
@return mixed Column width

Get the effective row height for rows without a row dimension or rows with height -1
For example, for Calibri 11 this is 15 points.
@param FontStyle $font The workbooks default font
@return float Row height in points

## References

**Database Tables (inferred)**
- `pixel`
- `font`
- `Calibri`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Font.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Font`

**Functions/Methods**:
- `setAutoSizeMethod($method)`
- `getAutoSizeMethod()`
- `setTrueTypeFontPath($folderPath)`
- `getTrueTypeFontPath()`
- `calculateColumnWidth(FontStyle $font,
        $cellText = '',
        $rotation = 0,
        ?FontStyle $defaultFont = null,
        bool $filterAdjustment = false)`
- `getTextWidthPixelsExact(string $text, FontStyle $font, int $rotation = 0)`
- `getTextWidthPixelsApprox($columnText, FontStyle $font, $rotation = 0)`
- `fontSizeToPixels($fontSizeInPoints)`
- `inchSizeToPixels($sizeInInch)`
- `centimeterSizeToPixels($sizeInCm)`
- `getTrueTypeFontFileFromFont(FontStyle $font)`
- `getCharsetFromFontName($fontName)`
- `getDefaultColumnWidthByFont(FontStyle $font, $returnAsPixels = false)`
- `getDefaultRowHeightByFont(FontStyle $font)`

