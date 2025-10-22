# app\ThirdParty\tcpdf\include\tcpdf_colors.php

- Path: `app\ThirdParty\tcpdf\include\tcpdf_colors.php`
- Type: PHP
- Size: 14700 bytes

## Summary (from docblocks)

@file
PHP color class for TCPDF
@author Nicola Asuni
@package com.tecnick.tcpdf

@class TCPDF_COLORS
PHP color class for TCPDF
@package com.tecnick.tcpdf
@version 1.0.004
@author Nicola Asuni - info@tecnick.com

Array of WEB safe colors
@public static

Array of valid JavaScript color names
@public static

Array of Spot colors (C,M,Y,K,name)
Color keys must be in lowercase and without spaces.
As long as no open standard for spot colours exists, you have to buy a colour book by one of the colour manufacturers and insert the values and names of spot colours directly.
Common industry standard spot colors are: ANPA-COLOR, DIC, FOCOLTONE, GCMI, HKS, PANTONE, TOYO, TRUMATCH.
@public static

Return the Spot color array.
@param string $name Name of the spot color.
@param array $spotc Reference to an array of spot colors.
@return array|false Spot color array or false if not defined.
@since 5.9.125 (2011-10-03)
@public static

Returns an array (RGB or CMYK) from an html color name, or a six-digit (i.e. #3FE5AA), or three-digit (i.e. #7FF) hexadecimal color, or a javascript color array, or javascript color name.
@param string $hcolor HTML color.
@param array $spotc Reference to an array of spot colors.
@param array $defcol Color to return in case of error.
@return array|false RGB or CMYK color, or false in case of error.
@public static

Convert a color array into a string representation.
@param array $c Array of colors.
@return string The color array representation.
@since 5.9.137 (2011-12-01)
@public static

Convert color to javascript color.
@param string $color color name or "#RRGGBB"
@protected
@since 2.1.002 (2008-02-12)
@public static

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\tcpdf_colors.php`

**Classes**:
- `for`
- `TCPDF_COLORS`
- `for`
- `TCPDF_COLORS`
- `parent`

**Functions/Methods**:
- `getSpotColor($name, &$spotc)`
- `convertHTMLColorToDec($hcolor, &$spotc, $defcol=array('R'=>128,'G'=>128,'B'=>128)`
- `getColorStringFromArray($c)`
- `_JScolor($color)`

