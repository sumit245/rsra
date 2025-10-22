# app\ThirdParty\tcpdf\tcpdf_barcodes_2d.php

- Path: `app\ThirdParty\tcpdf\tcpdf_barcodes_2d.php`
- Type: PHP
- Size: 14671 bytes

## Summary (from docblocks)

@file
PHP class to creates array representations for 2D barcodes to be used with TCPDF.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.015

@class TCPDF2DBarcode
PHP class to creates array representations for 2D barcodes to be used with TCPDF (http://www.tcpdf.org).
@package com.tecnick.tcpdf
@version 1.0.015
@author Nicola Asuni

Array representation of barcode.
@protected

This is the class constructor.
Return an array representations for 2D barcodes:<ul>
<li>$arrcode['code'] code to be printed on text label</li>
<li>$arrcode['num_rows'] required number of rows</li>
<li>$arrcode['num_cols'] required number of columns</li>
<li>$arrcode['bcode'][$r][$c] value of the cell is $r row and $c column (0 = transparent, 1 = black)</li></ul>
@param string $code code to print
@param string $type type of barcode: <ul><li>DATAMATRIX : Datamatrix (ISO/IEC 16022)</li><li>PDF417 : PDF417 (ISO/IEC 15438:2006)</li><li>PDF417,a,e,t,s,f,o0,o1,o2,o3,o4,o5,o6 : PDF417 with parameters: a = aspect ratio (width/height); e = error correction level (0-8); t = total number of macro segments; s = macro segment index (0-99998); f = file ID; o0 = File Name (text); o1 = Segment Count (numeric); o2 = Time Stamp (numeric); o3 = Sender (text); o4 = Addressee (text); o5 = File Size (numeric); o6 = Checksum (numeric). NOTES: Parameters t, s and f are required for a Macro Control Block, all other parameters are optional. To use a comma character ',' on text options, replace it with the character 255: "\xff".</li><li>QRCODE : QRcode Low error correction</li><li>QRCODE,L : QRcode Low error correction</li><li>QRCODE,M : QRcode Medium error correction</li><li>QRCODE,Q : QRcode Better error correction</li><li>QRCODE,H : QR-CODE Best error correction</li><li>RAW: raw mode - comma-separad list of array rows</li><li>RAW2: raw mode - array rows are surrounded by square parenthesis.</li><li>TEST : Test matrix</li></ul>

Return an array representations of barcode.
@return array

Send barcode as SVG image object to the standard output.
@param int $w Width of a single rectangle element in user units.
@param int $h Height of a single rectangle element in user units.
@param string $color Foreground color (in SVG format) for bar elements (background is transparent).
@public

Return a SVG string representation of barcode.
@param int $w Width of a single rectangle element in user units.
@param int $h Height of a single rectangle element in user units.
@param string $color Foreground color (in SVG format) for bar elements (background is transparent).
@return string SVG code.
@public

Return an HTML representation of barcode.
@param int $w Width of a single rectangle element in pixels.
@param int $h Height of a single rectangle element in pixels.
@param string $color Foreground color for bar elements (background is transparent).
@return string HTML code.
@public

Send a PNG image representation of barcode (requires GD or Imagick library).
@param int $w Width of a single rectangle element in pixels.
@param int $h Height of a single rectangle element in pixels.
@param array $color RGB (0-255) foreground color for bar elements (background is transparent).
@public

Return a PNG image representation of barcode (requires GD or Imagick library).
@param int $w Width of a single rectangle element in pixels.
@param int $h Height of a single rectangle element in pixels.
@param array $color RGB (0-255) foreground color for bar elements (background is transparent).
@return string|Imagick|false image or false in case of error.
@public

Set the barcode.
@param string $code code to print
@param string $type type of barcode: <ul><li>DATAMATRIX : Datamatrix (ISO/IEC 16022)</li><li>PDF417 : PDF417 (ISO/IEC 15438:2006)</li><li>PDF417,a,e,t,s,f,o0,o1,o2,o3,o4,o5,o6 : PDF417 with parameters: a = aspect ratio (width/height); e = error correction level (0-8); t = total number of macro segments; s = macro segment index (0-99998); f = file ID; o0 = File Name (text); o1 = Segment Count (numeric); o2 = Time Stamp (numeric); o3 = Sender (text); o4 = Addressee (text); o5 = File Size (numeric); o6 = Checksum (numeric). NOTES: Parameters t, s and f are required for a Macro Control Block, all other parameters are optional. To use a comma character ',' on text options, replace it with the character 255: "\xff".</li><li>QRCODE : QRcode Low error correction</li><li>QRCODE,L : QRcode Low error correction</li><li>QRCODE,M : QRcode Medium error correction</li><li>QRCODE,Q : QRcode Better error correction</li><li>QRCODE,H : QR-CODE Best error correction</li><li>RAW: raw mode - comma-separad list of array rows</li><li>RAW2: raw mode - array rows are surrounded by square parenthesis.</li><li>TEST : Test matrix</li></ul>
@return void

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\tcpdf_barcodes_2d.php`

**Classes**:
- `to`
- `to`
- `TCPDF2DBarcode`
- `to`
- `TCPDF2DBarcode`
- `constructor`

**Functions/Methods**:
- `__construct($code, $type)`
- `getBarcodeArray()`
- `getBarcodeSVG($w=3, $h=3, $color='black')`
- `getBarcodeSVGcode($w=3, $h=3, $color='black')`
- `getBarcodeHTML($w=10, $h=10, $color='black')`
- `getBarcodePNG($w=3, $h=3, $color=array(0,0,0)`
- `getBarcodePngData($w=3, $h=3, $color=array(0,0,0)`
- `setBarcode($code, $type)`

