# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\BaseDrawing.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\BaseDrawing.php`
- Type: PHP
- Size: 11558 bytes

## Summary (from docblocks)

The editAs attribute, used only with two cell anchor.
@var string

Image counter.
@var int

Image index.
@var int

Name.
@var string

Description.
@var string

Worksheet.
@var null|Worksheet

Coordinates.
@var string

Offset X.
@var int

Offset Y.
@var int

Coordinates2.
@var string

Offset X2.
@var int

Offset Y2.
@var int

Width.
@var int

Height.
@var int

Pixel width of image. See $width for the size the Drawing will be in the sheet.
@var int

Pixel width of image. See $height for the size the Drawing will be in the sheet.
@var int

Proportional resize.
@var bool

Rotation.
@var int

Shadow.
@var Drawing\Shadow

Image hyperlink.
@var null|Hyperlink

Image type.
@var int

Create a new BaseDrawing.

Set Worksheet.
@param bool $overrideOld If a Worksheet has already been assigned, overwrite it and remove image from old Worksheet?

Set width and height with proportional resize.
Example:
<code>
$objDrawing->setResizeProportional(true);
$objDrawing->setWidthAndHeight(160,120);
</code>
@author Vincent@luo MSN:kele_100@hotmail.com

Get hash code.
@return string Hash code

Implement PHP __clone to create a deep clone, not just a shallow copy.

Set Fact Sizes and Type of Image.

Get Image Type.

## References

**Database Tables (inferred)**
- `old`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\BaseDrawing.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing implements IComparable`

**Functions/Methods**:
- `__construct()`
- `getImageIndex()`
- `getName()`
- `setName(string $name)`
- `getDescription()`
- `setDescription(string $description)`
- `getWorksheet()`
- `setWorksheet(?Worksheet $worksheet = null, bool $overrideOld = false)`
- `getCoordinates()`
- `setCoordinates(string $coordinates)`
- `getOffsetX()`
- `setOffsetX(int $offsetX)`
- `getOffsetY()`
- `setOffsetY(int $offsetY)`
- `getCoordinates2()`
- `setCoordinates2(string $coordinates2)`
- `getOffsetX2()`
- `setOffsetX2(int $offsetX2)`
- `getOffsetY2()`
- `setOffsetY2(int $offsetY2)`
- `getWidth()`
- `setWidth(int $width)`
- `getHeight()`
- `setHeight(int $height)`
- `setWidthAndHeight(int $width, int $height)`
- `getResizeProportional()`
- `setResizeProportional(bool $resizeProportional)`
- `getRotation()`
- `setRotation(int $rotation)`
- `getShadow()`
- `setShadow(?Drawing\Shadow $shadow = null)`
- `getHashCode()`
- `__clone()`
- `setHyperlink(?Hyperlink $hyperlink = null)`
- `getHyperlink()`
- `setSizesAndType(string $path)`
- `getType()`
- `getImageWidth()`
- `getImageHeight()`
- `getEditAs()`
- `setEditAs(string $editAs)`
- `validEditAs()`

