# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Color.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Color.php`
- Type: PHP
- Size: 14500 bytes

## Summary (from docblocks)

ARGB - Alpha RGB.
@var null|string

@var bool

Create a new Color.
@param string $colorValue ARGB value for the colour, or named colour
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Color

@var Style

@var Border|Fill $sharedComponent

Build style array from subcomponents.
@param array $array
@return array

@var Style

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getFont()->getColor()->applyFromArray(['rgb' => '808080']);
</code>
@param array $styleArray Array containing style information
@return $this

Get ARGB.

Set ARGB.
@param string $colorValue  ARGB value, or a named color
@return $this

Get RGB.

Set RGB.
@param string $colorValue RGB value, or a named color
@return $this

Get a specified colour component of an RGB value.
@param string $rgbValue The colour as an RGB value (e.g. FF00CCCC or CCDDEE
@param int $offset Position within the RGB value to extract
@param bool $hex Flag indicating whether the component should be returned as a hex or a
                                   decimal value
@return int|string The extracted colour component

Get the red colour component of an RGB value.
@param string $rgbValue The colour as an RGB value (e.g. FF00CCCC or CCDDEE
@param bool $hex Flag indicating whether the component should be returned as a hex or a
                                   decimal value
@return int|string The red colour component

Get the green colour component of an RGB value.
@param string $rgbValue The colour as an RGB value (e.g. FF00CCCC or CCDDEE
@param bool $hex Flag indicating whether the component should be returned as a hex or a
                                   decimal value
@return int|string The green colour component

Get the blue colour component of an RGB value.
@param string $rgbValue The colour as an RGB value (e.g. FF00CCCC or CCDDEE
@param bool $hex Flag indicating whether the component should be returned as a hex or a
                                   decimal value
@return int|string The blue colour component

Adjust the brightness of a color.
@param string $hexColourValue The colour as an RGBA or RGB value (e.g. FF00CCCC or CCDDEE)
@param float $adjustPercentage The percentage by which to adjust the colour as a float from -1 to 1
@return string The adjusted colour as an RGBA or RGB value (e.g. FF00CCCC or CCDDEE)

@var int $red

@var int $green

@var int $blue

Get indexed color.
@param int $colorIndex Index entry point into the colour array
@param bool $background Flag to indicate whether default background or foreground colour
                                           should be returned if the indexed colour doesn't exist
@return Color

Get hash code.
@return string Hash code

## References

**Database Tables (inferred)**
- `subcomponents`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Color.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Color extends Supervisor`

**Functions/Methods**:
- `__construct($colorValue = self::COLOR_BLACK, $isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `validateColor(?string $colorValue)`
- `getARGB()`
- `setARGB(?string $colorValue = self::COLOR_BLACK)`
- `getRGB()`
- `setRGB(?string $colorValue = self::COLOR_BLACK)`
- `getColourComponent($rgbValue, $offset, $hex = true)`
- `getRed($rgbValue, $hex = true)`
- `getGreen($rgbValue, $hex = true)`
- `getBlue($rgbValue, $hex = true)`
- `changeBrightness($hexColourValue, $adjustPercentage)`
- `indexedColor($colorIndex, $background = false, ?array $palette = null)`
- `getHashCode()`
- `exportArray1()`
- `getHasChanged()`

