# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\GridLines.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\GridLines.php`
- Type: PHP
- Size: 12115 bytes

## Summary (from docblocks)

Created by PhpStorm.
User: Wiktor Trzonkowski
Date: 7/2/14
Time: 2:36 PM.

Properties of Class:
Object State (State for Minor Tick Mark) @var bool
Line Properties @var  array of mixed
Shadow Properties @var  array of mixed
Glow Properties @var  array of mixed
Soft Properties @var  array of mixed.

Get Object State.
@return bool

Change Object State to True.
@return $this

Set Line Color Properties.
@param string $value
@param int $alpha
@param string $colorType

Set Line Color Properties.
@param float $lineWidth
@param string $compoundType
@param string $dashType
@param string $capType
@param string $joinType
@param string $headArrowType
@param string $headArrowSize
@param string $endArrowType
@param string $endArrowSize

Get Line Color Property.
@param string $propertyName
@return string

Get Line Style Property.
@param array|string $elements
@return string

Set Glow Properties.
@param float $size
@param string $colorValue
@param int $colorAlpha
@param string $colorType

Get Glow Color Property.
@param string $propertyName
@return string

Get Glow Size.
@return string

Set Glow Size.
@param float $size
@return $this

Set Glow Color.
@param string $color
@param int $alpha
@param string $colorType
@return $this

Get Line Style Arrow Parameters.
@param string $arrowSelector
@param string $propertySelector
@return string

Set Shadow Properties.
@param int $presets
@param string $colorValue
@param string $colorType
@param string $colorAlpha
@param string $blur
@param int $angle
@param float $distance

Set Shadow Presets Properties.
@param int $presets
@return $this

Set Shadow Properties Values.
@param mixed $reference
@return $this

Set Shadow Color.
@param string $color
@param int $alpha
@param string $colorType
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
@return string

Set Soft Edges Size.
@param float $size

Get Soft Edges Size.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Chart\GridLines.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Chart\GridLines extends Properties`

**Functions/Methods**:
- `getObjectState()`
- `activateObject()`
- `setLineColorProperties($value, $alpha = 0, $colorType = self::EXCEL_COLOR_TYPE_STANDARD)`
- `setLineStyleProperties($lineWidth = null, $compoundType = null, $dashType = null, $capType = null, $joinType = null, $headArrowType = null, $headArrowSize = null, $endArrowType = null, $endArrowSize = null)`
- `getLineColorProperty($propertyName)`
- `getLineStyleProperty($elements)`
- `setGlowProperties($size, $colorValue = null, $colorAlpha = null, $colorType = null)`
- `getGlowColor($propertyName)`
- `getGlowSize()`
- `setGlowSize($size)`
- `setGlowColor($color, $alpha, $colorType)`
- `getLineStyleArrowParameters($arrowSelector, $propertySelector)`
- `setShadowProperties($presets, $colorValue = null, $colorType = null, $colorAlpha = null, $blur = null, $angle = null, $distance = null)`
- `setShadowPresetsProperties($presets)`
- `setShadowPropertiesMapValues(array $propertiesMap, &$reference = null)`
- `setShadowColor($color, $alpha, $colorType)`
- `setShadowBlur($blur)`
- `setShadowAngle($angle)`
- `setShadowDistance($distance)`
- `getShadowProperty($elements)`
- `setSoftEdgesSize($size)`
- `getSoftEdgesSize()`

