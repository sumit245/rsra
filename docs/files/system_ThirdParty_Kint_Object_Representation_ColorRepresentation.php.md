# system\ThirdParty\Kint\Object\Representation\ColorRepresentation.php

- Path: `system\ThirdParty\Kint\Object\Representation\ColorRepresentation.php`
- Type: PHP
- Size: 18464 bytes

## Summary (from docblocks)

@var float[] Psalm bug workaround

Turns HSL color to RGB. Black magic.
@param float $h Hue
@param float $s Saturation
@param float $l Lightness
@return int[] RGB array

Converts RGB to HSL. Color inversion of previous black magic is white magic?
@param float|int $red   Red
@param float|int $green Green
@param float|int $blue  Blue
@return float[] HSL array

Helper function for hslToRgb. Even blacker magic.
@param float $m1
@param float $m2
@param float $hue
@return float Color value

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Object\Representation\ColorRepresentation.php`

**Classes**:
- `Kint\Object\Representation\ColorRepresentation extends Representation`

**Functions/Methods**:
- `__construct($value)`
- `getColor($variant = null)`
- `hasAlpha($variant = null)`
- `setValues($value)`
- `setValuesFromHex($hex)`
- `setValuesFromFunction($value)`
- `hslToRgb($h, $s, $l)`
- `rgbToHsl($red, $green, $blue)`
- `hueToRgb($m1, $m2, $hue)`

