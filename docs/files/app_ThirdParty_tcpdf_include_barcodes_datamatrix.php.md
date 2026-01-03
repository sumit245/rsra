# app\ThirdParty\tcpdf\include\barcodes\datamatrix.php

- Path: `app\ThirdParty\tcpdf\include\barcodes\datamatrix.php`
- Type: PHP
- Size: 42698 bytes

## Summary (from docblocks)

@file
Class to create DataMatrix ECC 200 barcode arrays for TCPDF class.
DataMatrix (ISO/IEC 16022:2006) is a 2-dimensional bar code.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.008

Indicate that definitions for this class are set

ASCII encoding: ASCII character 0 to 127 (1 byte per CW)

C40 encoding: Upper-case alphanumeric (3/2 bytes per CW)

TEXT encoding: Lower-case alphanumeric (3/2 bytes per CW)

X12 encoding: ANSI X12 (3/2 byte per CW)

EDIFACT encoding: ASCII character 32 to 94 (4/3 bytes per CW)

BASE 256 encoding: ASCII character 0 to 255 (1 byte per CW)

ASCII extended encoding: ASCII character 128 to 255 (1/2 byte per CW)

ASCII number encoding: ASCII digits (2 bytes per CW)

@class Datamatrix
Class to create DataMatrix ECC 200 barcode arrays for TCPDF class.
DataMatrix (ISO/IEC 16022:2006) is a 2-dimensional bar code.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.004

Barcode array to be returned which is readable by TCPDF.
@protected

Store last used encoding for data codewords.
@protected

Table of Data Matrix ECC 200 Symbol Attributes:<ul>
<li>total matrix rows (including finder pattern)</li>
<li>total matrix cols (including finder pattern)</li>
<li>total matrix rows (without finder pattern)</li>
<li>total matrix cols (without finder pattern)</li>
<li>region data rows (with finder pattern)</li>
<li>region data col (with finder pattern)</li>
<li>region data rows (without finder pattern)</li>
<li>region data col (without finder pattern)</li>
<li>horizontal regions</li>
<li>vertical regions</li>
<li>regions</li>
<li>data codewords</li>
<li>error codewords</li>
<li>blocks</li>
<li>data codewords per block</li>
<li>error codewords per block</li>
</ul>
@protected

Map encodation modes whit character sets.
@protected

Basic set of characters for each encodation mode.
@protected

This is the class constructor.
Creates a datamatrix object
@param string $code Code to represent using Datamatrix.
@public

Returns a barcode array which is readable by TCPDF
@return array barcode array readable by TCPDF;
@public

Product of two numbers in a Power-of-Two Galois Field
@param int $a first number to multiply.
@param int $b second number to multiply.
@param array $log Log table.
@param array $alog Anti-Log table.
@param int $gf Number of Factors of the Reed-Solomon polynomial.
@return int product
@protected

Add error correction codewords to data codewords array (ANNEX E).
@param array $wd Array of datacodewords.
@param int $nb Number of blocks.
@param int $nd Number of data codewords per block.
@param int $nc Number of correction codewords per block.
@param int $gf numner of fields on log/antilog table (power of 2).
@param int $pp The value of its prime modulus polynomial (301 for ECC200).
@return array data codewords + error codewords
@protected

Return the 253-state codeword
@param int $cwpad Pad codeword.
@param int $cwpos Number of data codewords from the beginning of encoded data.
@return int pad codeword
@protected

Return the 255-state codeword
@param int $cwpad Pad codeword.
@param int $cwpos Number of data codewords from the beginning of encoded data.
@return int pad codeword
@protected

Returns true if the char belongs to the selected mode
@param int $chr Character (byte) to check.
@param int $mode Current encoding mode.
@return boolean true if the char is of the selected mode.
@protected

The look-ahead test scans the data to be encoded to find the best mode (Annex P - steps from J to S).
@param string $data data to encode
@param int $pos current position
@param int $mode current encoding mode
@return int encoding mode
@protected

Get the switching codeword to a new encoding mode (latch codeword)
@param int $mode New encoding mode.
@return int Switch codeword.
@protected

Choose the minimum matrix size and return the max number of data codewords.
@param int $numcw Number of current codewords.
@return int number of data codewords in matrix
@protected

Get high level encoding using the minimum symbol data characters for ECC 200
@param string $data data to encode
@return array of codewords
@protected

Places "chr+bit" with appropriate wrapping within array[].
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $row Row number.
@param int $col Column number.
@param int $chr Char byte.
@param int $bit Bit.
@return array
@protected

Places the 8 bits of a utah-shaped symbol character.
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $row Row number.
@param int $col Column number.
@param int $chr Char byte.
@return array
@protected

Places the 8 bits of the first special corner case.
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $chr Char byte.
@return array
@protected

Places the 8 bits of the second special corner case.
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $chr Char byte.
@return array
@protected

Places the 8 bits of the third special corner case.
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $chr Char byte.
@return array
@protected

Places the 8 bits of the fourth special corner case.
(Annex F - ECC 200 symbol character placement)
@param array $marr Array of symbols.
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@param int $chr Char byte.
@return array
@protected

Build a placement map.
(Annex F - ECC 200 symbol character placement)
@param int $nrow Number of rows.
@param int $ncol Number of columns.
@return array
@protected

## References

**Database Tables (inferred)**
- `the`
- `J`
- `EDIFACT`
- `B256`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\barcodes\datamatrix.php`

**Classes**:
- `are`
- `Datamatrix`
- `Datamatrix`
- `constructor`

**Functions/Methods**:
- `__construct($code)`
- `getBarcodeArray()`
- `getGFProduct($a, $b, $log, $alog, $gf)`
- `getErrorCorrection($wd, $nb, $nd, $nc, $gf=256, $pp=301)`
- `get253StateCodeword($cwpad, $cwpos)`
- `get255StateCodeword($cwpad, $cwpos)`
- `isCharMode($chr, $mode)`
- `lookAheadTest($data, $pos, $mode)`
- `getSwitchEncodingCodeword($mode)`
- `getMaxDataCodewords($numcw)`
- `getHighLevelEncoding($data)`
- `placeModule($marr, $nrow, $ncol, $row, $col, $chr, $bit)`
- `placeUtah($marr, $nrow, $ncol, $row, $col, $chr)`
- `placeCornerA($marr, $nrow, $ncol, $chr)`
- `placeCornerB($marr, $nrow, $ncol, $chr)`
- `placeCornerC($marr, $nrow, $ncol, $chr)`
- `placeCornerD($marr, $nrow, $ncol, $chr)`
- `getPlacementMap($nrow, $ncol)`

