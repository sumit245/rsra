# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Xf.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Xf.php`
- Type: PHP
- Size: 12303 bytes

## Summary (from docblocks)

Style XF or a cell XF ?
@var bool

Index to the FONT record. Index 4 does not exist.
@var int

An index (2 bytes) to a FORMAT record (number format).
@var int

1 bit, apparently not used.
@var int

The cell's foreground color.
@var int

The cell's background color.
@var int

Color of the bottom border of the cell.
@var int

Color of the top border of the cell.
@var int

Color of the left border of the cell.
@var int

Color of the right border of the cell.
@var int

@var int

@var int

@var Style

Constructor.
@param Style $style The XF format

Generate an Excel BIFF XF record (style or cell).
@return string The XF record

Is this a style XF ?
@param bool $value

Sets the cell's bottom border color.
@param int $colorIndex Color index

Sets the cell's top border color.
@param int $colorIndex Color index

Sets the cell's left border color.
@param int $colorIndex Color index

Sets the cell's right border color.
@param int $colorIndex Color index

Sets the cell's diagonal border color.
@param int $colorIndex Color index

Sets the cell's foreground color.
@param int $colorIndex Color index

Sets the cell's background color.
@param int $colorIndex Color index

Sets the index to the number format record
It can be date, time, currency, etc...
@param int $numberFormatIndex Index to format record

Set the font index.
@param int $value Font index, note that value 4 does not exist

Map to BIFF8 codes for text rotation angle.
@param int $textRotation
@return int

Map locked values.
@param string $locked
@return int

Map hidden.
@param string $hidden
@return int

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\Xf.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xls\library`
- `PhpOffice\PhpSpreadsheet\Writer\Xls\Xf`

**Functions/Methods**:
- `__construct(Style $style)`
- `writeXf()`
- `setIsStyleXf($value)`
- `setBottomColor($colorIndex)`
- `setTopColor($colorIndex)`
- `setLeftColor($colorIndex)`
- `setRightColor($colorIndex)`
- `setDiagColor($colorIndex)`
- `setFgColor($colorIndex)`
- `setBgColor($colorIndex)`
- `setNumberFormatIndex($numberFormatIndex)`
- `setFontIndex($value)`
- `mapTextRotation($textRotation)`
- `mapLocked($locked)`
- `mapHidden($hidden)`

