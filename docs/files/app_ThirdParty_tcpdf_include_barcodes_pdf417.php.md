# app\ThirdParty\tcpdf\include\barcodes\pdf417.php

- Path: `app\ThirdParty\tcpdf\include\barcodes\pdf417.php`
- Type: PHP
- Size: 53865 bytes

## Summary (from docblocks)

@file
Class to create PDF417 barcode arrays for TCPDF class.
PDF417 (ISO/IEC 15438:2006) is a 2-dimensional stacked bar code created by Symbol Technologies in 1991.
(requires PHP bcmath extension)
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.005

Indicate that definitions for this class are set

Row height respect X dimension of single module

Horizontal quiet zone in modules

Vertical quiet zone in modules

@class PDF417
Class to create PDF417 barcode arrays for TCPDF class.
PDF417 (ISO/IEC 15438:2006) is a 2-dimensional stacked bar code created by Symbol Technologies in 1991.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.003

Barcode array to be returned which is readable by TCPDF.
@protected

Start pattern.
@protected

Stop pattern.
@protected

Array of text Compaction Sub-Modes (values 0xFB - 0xFF are used for submode changers).
@protected

Array of switching codes for Text Compaction Sub-Modes.
@protected

Clusters of codewords (0, 3, 6)<br/>
Values are hex equivalents of binary representation of bars (1 = bar, 0 = space).<br/>
The codewords numbered from 900 to 928 have special meaning, some enable to switch between modes in order to optimise the code:<ul>
<li>900 : Switch to "Text" mode</li>
<li>901 : Switch to "Byte" mode</li>
<li>902 : Switch to "Numeric" mode</li>
<li>903 - 912 : Reserved</li>
<li>913 : Switch to "Octet" only for the next codeword</li>
<li>914 - 920 : Reserved</li>
<li>921 : Initialization</li>
<li>922 : Terminator codeword for Macro PDF control block</li>
<li>923 : Sequence tag to identify the beginning of optional fields in the Macro PDF control block</li>
<li>924 : Switch to "Byte" mode (If the total number of byte is multiple of 6)</li>
<li>925 : Identifier for a user defined Extended Channel Interpretation (ECI)</li>
<li>926 : Identifier for a general purpose ECI format</li>
<li>927 : Identifier for an ECI of a character set or code page</li>
<li>928 : Macro marker codeword to indicate the beginning of a Macro PDF Control Block</li>
</ul>
@protected

Array of factors of the Reed-Solomon polynomial equations used for error correction; one sub array for each correction level (0-8).
@protected

This is the class constructor.
Creates a PDF417 object
@param string $code code to represent using PDF417
@param int $ecl error correction level (0-8); default -1 = automatic correction level
@param float $aspectratio the width to height of the symbol (excluding quiet zones)
@param array $macro information for macro block
@public

Returns a barcode array which is readable by TCPDF
@return array barcode array readable by TCPDF;
@public

Returns the error correction level (0-8) to be used
@param int $ecl error correction level
@param int $numcw number of data codewords
@return int error correction level
@protected

Returns the error correction codewords
@param array $cw array of codewords including Symbol Length Descriptor and pad
@param int $ecl error correction level 0-8
@return array of error correction codewords
@protected

Create array of sequences from input
@param string $code code
@return array bi-dimensional array containing characters and classification
@protected

Compact data by mode.
@param int $mode compaction mode number
@param string $code data to compact
@param boolean $addmode if true add the mode codeword at first position
@return array of codewords
@protected

## References

**Database Tables (inferred)**
- `900`
- `input`
- `lower`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\barcodes\pdf417.php`

**Classes**:
- `are`
- `PDF417`
- `PDF417`
- `constructor`

**Functions/Methods**:
- `__construct($code, $ecl=-1, $aspectratio=2, $macro=array()`
- `getBarcodeArray()`
- `getErrorCorrectionLevel($ecl, $numcw)`
- `getErrorCorrection($cw, $ecl)`
- `getInputSequences($code)`
- `getCompaction($mode, $code, $addmode=true)`

