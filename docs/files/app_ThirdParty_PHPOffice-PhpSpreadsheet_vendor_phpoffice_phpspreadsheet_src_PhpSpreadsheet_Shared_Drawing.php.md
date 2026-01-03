# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Drawing.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Drawing.php`
- Type: PHP
- Size: 8015 bytes

## Summary (from docblocks)

Convert pixels to EMU.
@param int $pixelValue Value in pixels
@return int Value in EMU

Convert EMU to pixels.
@param int|SimpleXMLElement $emuValue Value in EMU
@return int Value in pixels

Convert pixels to column width. Exact algorithm not known.
By inspection of a real Excel file using Calibri 11, one finds 1000px ~ 142.85546875
This gives a conversion factor of 7. Also, we assume that pixels and font size are proportional.
@param int $pixelValue Value in pixels
@return float|int Value in cell dimension

Convert column width from (intrinsic) Excel units to pixels.
@param float $cellWidth Value in cell dimension
@param \PhpOffice\PhpSpreadsheet\Style\Font $defaultFont Default font of the workbook
@return int Value in pixels

Convert pixels to points.
@param int $pixelValue Value in pixels
@return float Value in points

Convert points to pixels.
@param int $pointValue Value in points
@return int Value in pixels

Convert degrees to angle.
@param int $degrees Degrees
@return int Angle

Convert angle to degrees.
@param int|SimpleXMLElement $angle Angle
@return int Degrees

Create a new image from file. By alexander at alexauto dot nl.
@see http://www.php.net/manual/en/function.imagecreatefromwbmp.php#86214
@param string $bmpFilename Path to Windows DIB (BMP) image
@return GdImage|resource

@phpstan-ignore-next-line

@phpstan-ignore-next-line

@phpstan-ignore-next-line

@phpstan-ignore-next-line

## References

**Database Tables (inferred)**
- `Calibri`
- `file`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Drawing.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Drawing`

**Functions/Methods**:
- `pixelsToEMU($pixelValue)`
- `EMUToPixels($emuValue)`
- `pixelsToCellDimension($pixelValue, \PhpOffice\PhpSpreadsheet\Style\Font $defaultFont)`
- `cellDimensionToPixels($cellWidth, \PhpOffice\PhpSpreadsheet\Style\Font $defaultFont)`
- `pixelsToPoints($pixelValue)`
- `pointsToPixels($pointValue)`
- `degreesToAngle($degrees)`
- `angleToDegrees($angle)`
- `imagecreatefrombmp($bmpFilename)`

