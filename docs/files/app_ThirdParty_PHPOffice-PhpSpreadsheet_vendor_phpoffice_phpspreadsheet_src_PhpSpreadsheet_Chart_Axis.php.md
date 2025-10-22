# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Axis.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Axis.php`
- Type: PHP
- Size: 15140 bytes

## Summary (from docblocks)

Created by PhpStorm.
User: Wiktor Trzonkowski
Date: 6/17/14
Time: 12:11 PM.

Axis Number.
@var mixed[]

Axis Options.
@var mixed[]

Fill Properties.
@var mixed[]

Line Properties.
@var mixed[]

Line Style Properties.
@var mixed[]

Shadow Properties.
@var mixed[]

Glow Properties.
@var mixed[]

Soft Edge Properties.
@var mixed[]

Get Series Data Type.
@param mixed $format_code

Get Axis Number Format Data Type.
@return string

Get Axis Number Source Linked.
@return string

Set Axis Options Properties.
@param string $axisLabels
@param string $horizontalCrossesValue
@param string $horizontalCrosses
@param string $axisOrientation
@param string $majorTmt
@param string $minorTmt
@param string $minimum
@param string $maximum
@param string $majorUnit
@param string $minorUnit

Get Axis Options Property.
@param string $property
@return string

Set Axis Orientation Property.
@param string $orientation

Set Fill Property.
@param string $color
@param int $alpha
@param string $AlphaType

Set Line Property.
@param string $color
@param int $alpha
@param string $alphaType

Get Fill Property.
@param string $property
@return string

Get Line Property.
@param string $property
@return string

Set Line Style Properties.
@param float $lineWidth
@param string $compoundType
@param string $dashType
@param string $capType
@param string $joinType
@param string $headArrowType
@param string $headArrowSize
@param string $endArrowType
@param string $endArrowSize

Get Line Style Property.
@param array|string $elements
@return string

Get Line Style Arrow Excel Width.
@param string $arrow
@return string

Get Line Style Arrow Excel Length.
@param string $arrow
@return string

Set Shadow Properties.
@param int $shadowPresets
@param string $colorValue
@param string $colorType
@param string $colorAlpha
@param float $blur
@param int $angle
@param float $distance

Set Shadow Color.
@param int $presets
@return $this

Set Shadow Properties from Mapped Values.
@param mixed $reference
@return $this

Set Shadow Color.
@param string $color
@param int $alpha
@param string $alphaType
@return $this

Set Shadow Blur.
@param float $blur
@return $this

Set Shadow Angle.
@param int $angle
@return $this

Set Shadow Distance.
@param float $distance
@return $this

Get Shadow Property.
@param string|string[] $elements
@return null|array|int|string

Set Glow Properties.
@param float $size
@param string $colorValue
@param int $colorAlpha
@param string $colorType

Get Glow Property.
@param array|string $property
@return string

Set Glow Color.
@param float $size
@return $this

Set Glow Color.
@param string $color
@param int $alpha
@param string $colorType
@return $this

Set Soft Edges Size.
@param float $size

Get Soft Edges Size.
@return string

## References

**Database Tables (inferred)**
- `Mapped`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\Axis.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Chart\Axis extends Properties`

**Functions/Methods**:
- `setAxisNumberProperties($format_code)`
- `getAxisNumberFormat()`
- `getAxisNumberSourceLinked()`
- `setAxisOptionsProperties($axisLabels, $horizontalCrossesValue = null, $horizontalCrosses = null, $axisOrientation = null, $majorTmt = null, $minorTmt = null, $minimum = null, $maximum = null, $majorUnit = null, $minorUnit = null)`
- `getAxisOptionsProperty($property)`
- `setAxisOrientation($orientation)`
- `setFillParameters($color, $alpha = 0, $AlphaType = self::EXCEL_COLOR_TYPE_ARGB)`
- `setLineParameters($color, $alpha = 0, $alphaType = self::EXCEL_COLOR_TYPE_ARGB)`
- `getFillProperty($property)`
- `getLineProperty($property)`
- `setLineStyleProperties($lineWidth = null, $compoundType = null, $dashType = null, $capType = null, $joinType = null, $headArrowType = null, $headArrowSize = null, $endArrowType = null, $endArrowSize = null)`
- `getLineStyleProperty($elements)`
- `getLineStyleArrowWidth($arrow)`
- `getLineStyleArrowLength($arrow)`
- `setShadowProperties($shadowPresets, $colorValue = null, $colorType = null, $colorAlpha = null, $blur = null, $angle = null, $distance = null)`
- `setShadowPresetsProperties($presets)`
- `setShadowPropertiesMapValues(array $propertiesMap, &$reference = null)`
- `setShadowColor($color, $alpha, $alphaType)`
- `setShadowBlur($blur)`
- `setShadowAngle($angle)`
- `setShadowDistance($distance)`
- `getShadowProperty($elements)`
- `setGlowProperties($size, $colorValue = null, $colorAlpha = null, $colorType = null)`
- `getGlowProperty($property)`
- `setGlowSize($size)`
- `setGlowColor($color, $alpha, $colorType)`
- `setSoftEdges($size)`
- `getSoftEdgesSize()`

