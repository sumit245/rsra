# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\SheetView.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\SheetView.php`
- Type: PHP
- Size: 4413 bytes

## Summary (from docblocks)

ZoomScale.
Valid values range from 10 to 400.
@var int

ZoomScaleNormal.
Valid values range from 10 to 400.
@var int

ShowZeros.
If true, "null" values from a calculation will be shown as "0". This is the default Excel behaviour and can be changed
with the advanced worksheet option "Show a zero in cells that have zero value"
@var bool

View.
Valid values range from 10 to 400.
@var string

Create a new SheetView.

Get ZoomScale.
@return int

Set ZoomScale.
Valid values range from 10 to 400.
@param int $zoomScale
@return $this

Get ZoomScaleNormal.
@return int

Set ZoomScale.
Valid values range from 10 to 400.
@param int $zoomScaleNormal
@return $this

Set ShowZeroes setting.
@param bool $showZeros

@return bool

Get View.
@return string

Set View.
Valid values are
       'normal'            self::SHEETVIEW_NORMAL
       'pageLayout'        self::SHEETVIEW_PAGE_LAYOUT
       'pageBreakPreview'  self::SHEETVIEW_PAGE_BREAK_PREVIEW
@param string $sheetViewType
@return $this

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `10`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\SheetView.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\SheetView`

**Functions/Methods**:
- `__construct()`
- `getZoomScale()`
- `setZoomScale($zoomScale)`
- `getZoomScaleNormal()`
- `setZoomScaleNormal($zoomScaleNormal)`
- `setShowZeros($showZeros)`
- `getShowZeros()`
- `getView()`
- `setView($sheetViewType)`
- `__clone()`

