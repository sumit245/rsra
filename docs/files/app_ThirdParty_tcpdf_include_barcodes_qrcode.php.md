# app\ThirdParty\tcpdf\include\barcodes\qrcode.php

- Path: `app\ThirdParty\tcpdf\include\barcodes\qrcode.php`
- Type: PHP
- Size: 78690 bytes

## Summary (from docblocks)

@file
Class to create QR-code arrays for TCPDF class.
QR Code symbol is a 2D barcode that can be scanned by handy terminals such as a mobile phone with CCD.
The capacity of QR Code is up to 7000 digits or 4000 characters, and has high robustness.
This class supports QR Code model 2, described in JIS (Japanese Industrial Standards) X0510:2004 or ISO/IEC 18004.
Currently the following features are not supported: ECI and FNC1 mode, Micro QR Code, QR Code model 1, Structured mode.
This class is derived from "PHP QR Code encoder" by Dominik Dzienia (http://phpqrcode.sourceforge.net/) based on "libqrencode C library 3.1.1." by Kentaro Fukuchi (http://megaui.net/fukuchi/works/qrencode/index.en.html), contains Reed-Solomon code written by Phil Karn, KA9Q. QR Code is registered trademark of DENSO WAVE INCORPORATED (http://www.denso-wave.com/qrcode/index-e.html).
Please read comments on this class source file for full copyright and license information.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.010

Indicate that definitions for this class are set

Encoding mode

Encoding mode numeric (0-9). 3 characters are encoded to 10bit length. In theory, 7089 characters or less can be stored in a QRcode.

Encoding mode alphanumeric (0-9A-Z $%*+-./:) 45characters. 2 characters are encoded to 11bit length. In theory, 4296 characters or less can be stored in a QRcode.

Encoding mode 8bit byte data. In theory, 2953 characters or less can be stored in a QRcode.

Encoding mode KANJI. A KANJI character (multibyte character) is encoded to 13bit length. In theory, 1817 characters or less can be stored in a QRcode.

Encoding mode STRUCTURED (currently unsupported)

Error correction level L : About 7% or less errors can be corrected.

Error correction level M : About 15% or less errors can be corrected.

Error correction level Q : About 25% or less errors can be corrected.

Error correction level H : About 30% or less errors can be corrected.

Maximum QR Code version.

Maximum matrix size for maximum version (version 40 is 177*177 matrix).

Matrix index to get width from $capacity array.

Matrix index to get number of words from $capacity array.

Matrix index to get remainder from $capacity array.

Matrix index to get error correction level from $capacity array.

Number of header bits for structured mode

Max number of symbols for structured mode

Down point base value for case 1 mask pattern (concatenation of same color in a line or a column)

Down point base value for case 2 mask pattern (module block of same color)

Down point base value for case 3 mask pattern (1:1:3:1:1(dark:bright:dark:bright:dark)pattern in a line or a column)

Down point base value for case 4 mask pattern (ration of dark modules in whole)

if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code

if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly

when QR_FIND_BEST_MASK === false

@class QRcode
Class to create QR-code arrays for TCPDF class.
QR Code symbol is a 2D barcode that can be scanned by handy terminals such as a mobile phone with CCD.
The capacity of QR Code is up to 7000 digits or 4000 characters, and has high robustness.
This class supports QR Code model 2, described in JIS (Japanese Industrial Standards) X0510:2004 or ISO/IEC 18004.
Currently the following features are not supported: ECI and FNC1 mode, Micro QR Code, QR Code model 1, Structured mode.
This class is derived from "PHP QR Code encoder" by Dominik Dzienia (http://phpqrcode.sourceforge.net/) based on "libqrencode C library 3.1.1." by Kentaro Fukuchi (http://megaui.net/fukuchi/works/qrencode/index.en.html), contains Reed-Solomon code written by Phil Karn, KA9Q. QR Code is registered trademark of DENSO WAVE INCORPORATED (http://www.denso-wave.com/qrcode/index-e.html).
Please read comments on this class source file for full copyright and license information.
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.010

Barcode array to be returned which is readable by TCPDF.
@protected

QR code version. Size of QRcode is defined as version. Version is from 1 to 40. Version 1 is 21*21 matrix. And 4 modules increases whenever 1 version increases. So version 40 is 177*177 matrix.
@protected

Levels of error correction. See definitions for possible values.
@protected

Encoding mode.
@protected

Boolean flag, if true the input string will be converted to uppercase.
@protected

Structured QR code (not supported yet).
@protected

Mask data.
@protected

Width.
@protected

Frame.
@protected

X position of bit.
@protected

Y position of bit.
@protected

Direction.
@protected

Single bit value.
@protected

Data code.
@protected

Error correction code.
@protected

Blocks.
@protected

Reed-Solomon blocks.
@protected

Counter.
@protected

Data length.
@protected

Error correction length.
@protected

Value b1.
@protected

Run length.
@protected

Input data string.
@protected

Input items.
@protected

Reed-Solomon items.
@protected

Array of frames.
@protected

Alphabet-numeric convesion table.
@protected

Array Table of the capacity of symbols.
See Table 1 (pp.13) and Table 12-16 (pp.30-36), JIS X0510:2004.
@protected

Array Length indicator.
@protected

Array Table of the error correction code (Reed-Solomon block).
See Table 12-16 (pp.30-36), JIS X0510:2004.
@protected

Array Positions of alignment patterns.
This array includes only the second and the third position of the alignment patterns. Rest of them can be calculated from the distance between them.
See Table 1 in Appendix E (pp.71) of JIS X0510:2004.
@protected

Array Version information pattern (BCH coded).
See Table 1 in Appendix D (pp.68) of JIS X0510:2004.
size: [QRSPEC_VERSION_MAX - 6]
@protected

Array Format information
@protected

This is the class constructor.
Creates a QRcode object
@param string $code code to represent using QRcode
@param string $eclevel error level: <ul><li>L : About 7% or less errors can be corrected.</li><li>M : About 15% or less errors can be corrected.</li><li>Q : About 25% or less errors can be corrected.</li><li>H : About 30% or less errors can be corrected.</li></ul>
@public
@since 1.0.000

Returns a barcode array which is readable by TCPDF
@return array barcode array readable by TCPDF;
@public

Convert the frame in binary form
@param array $frame array to binarize
@return array frame in binary form

Encode the input string to QR code
@param string $string input string to encode

Encode mask
@param int $mask masking mode

Set frame value at specified position
@param array $at x,y position
@param int $val value of the character to set

Get frame value at specified position
@param array $at x,y position
@return value at specified position

Return the next frame position
@return array of x,y coordinates

Initialize code.
@param array $spec array of ECC specification
@return int 0 in case of success, -1 in case of error

Return Reed-Solomon block code.
@return array rsblocks

Write Format Information on frame and returns the number of black bits
@param int $width frame width
@param array $frame frame
@param array $mask masking mode
@param int $level error correction level
@return int blacks

mask0
@param int $x X position
@param int $y Y position
@return int mask

mask1
@param int $x X position
@param int $y Y position
@return int mask

mask2
@param int $x X position
@param int $y Y position
@return int mask

mask3
@param int $x X position
@param int $y Y position
@return int mask

mask4
@param int $x X position
@param int $y Y position
@return int mask

mask5
@param int $x X position
@param int $y Y position
@return int mask

mask6
@param int $x X position
@param int $y Y position
@return int mask

mask7
@param int $x X position
@param int $y Y position
@return int mask

Return bitmask
@param int $maskNo mask number
@param int $width width
@param array $frame frame
@return array bitmask

makeMaskNo
@param int $maskNo
@param int $width
@param int $s
@param int $d
@param boolean $maskGenOnly
@return int b

makeMask
@param int $width
@param array $frame
@param int $maskNo
@param int $level
@return array mask

calcN1N3
@param int $length
@return int demerit

evaluateSymbol
@param int $width
@param array $frame
@return int demerit

mask
@param int $width
@param array $frame
@param int $level
@return array best mask

Return true if the character at specified position is a number
@param string $str string
@param int $pos characted position
@return boolean true of false

Return true if the character at specified position is an alphanumeric character
@param string $str string
@param int $pos characted position
@return boolean true of false

identifyMode
@param int $pos
@return int mode

eatNum
@return int run

eatAn
@return int run

eatKanji
@return int run

eat8
@return int run

splitString
@return int

toUpper

newInputItem
@param int $mode
@param int $size
@param array $data
@param array $bstream
@return array input item

encodeModeNum
@param array $inputitem
@param int $version
@return array input item

encodeModeAn
@param array $inputitem
@param int $version
@return array input item

encodeMode8
@param array $inputitem
@param int $version
@return array input item

encodeModeKanji
@param array $inputitem
@param int $version
@return array input item

encodeModeStructure
@param array $inputitem
@return array input item

encodeBitStream
@param array $inputitem
@param int $version
@return array input item

Append data to an input object.
The data is copied and appended to the input object.
@param array $items input items
@param int $mode encoding mode.
@param int $size size of data (byte).
@param array $data array of input data.
@return array items

insertStructuredAppendHeader
@param array $items
@param int $size
@param int $index
@param int $parity
@return array items

calcParity
@param array $items
@return int parity

checkModeNum
@param int $size
@param array $data
@return boolean true or false

Look up the alphabet-numeric conversion table (see JIS X0510:2004, pp.19).
@param int $c character value
@return int value

checkModeAn
@param int $size
@param array $data
@return boolean true or false

estimateBitsModeNum
@param int $size
@return int number of bits

estimateBitsModeAn
@param int $size
@return int number of bits

estimateBitsMode8
@param int $size
@return int number of bits

estimateBitsModeKanji
@param int $size
@return int number of bits

checkModeKanji
@param int $size
@param array $data
@return boolean true or false

Validate the input data.
@param int $mode encoding mode.
@param int $size size of data (byte).
@param array $data data to validate
@return boolean true in case of valid data, false otherwise

estimateBitStreamSize
@param array $items
@param int $version
@return int bits

estimateVersion
@param array $items
@return int version

lengthOfCode
@param int $mode
@param int $version
@param int $bits
@return int size

createBitStream
@param array $items
@return array of items and total bits

convertData
@param array $items
@return array items

Append Padding Bit to bitstream
@param array $bstream
@return array bitstream

mergeBitStream
@param array $items items
@return array bitstream

Returns a stream of bits.
@param int $items
@return array padded merged byte stream

Pack all bit streams padding bits into a byte array.
@param int $items
@return array padded merged byte stream

Return an array with zeros
@param int $setLength array size
@return array

Return new bitstream from number
@param int $bits number of bits
@param int $num number
@return array bitstream

Return new bitstream from bytes
@param int $size size
@param array $data bytes
@return array bitstream

Append one bitstream to another
@param array $bitstream original bitstream
@param array $append bitstream to append
@return array bitstream

Append one bitstream created from number to another
@param array $bitstream original bitstream
@param int $bits number of bits
@param int $num number
@return array bitstream

Append one bitstream created from bytes to another
@param array $bitstream original bitstream
@param int $size size
@param array $data bytes
@return array bitstream

Convert bitstream to bytes
@param array $bstream original bitstream
@return array of bytes

Replace a value on the array at the specified position
@param array $srctab
@param int $x X position
@param int $y Y position
@param string $repl value to replace
@param int $replLen length of the repl string
@return array srctab

Return maximum data code length (bytes) for the version.
@param int $version version
@param int $level error correction level
@return int maximum size (bytes)

Return maximum error correction code length (bytes) for the version.
@param int $version version
@param int $level error correction level
@return int ECC size (bytes)

Return the width of the symbol for the version.
@param int $version version
@return int width

Return the numer of remainder bits.
@param int $version version
@return int number of remainder bits

Return a version number that satisfies the input code length.
@param int $size input code length (bytes)
@param int $level error correction level
@return int version number

Return the size of length indicator for the mode and version.
@param int $mode encoding mode
@param int $version version
@return int the size of the appropriate length indicator (bits).

Return the maximum length for the mode and version.
@param int $mode encoding mode
@param int $version version
@return int the maximum length (bytes)

Return an array of ECC specification.
@param int $version version
@param int $level error correction level
@param array $spec an array of ECC specification contains as following: {# of type1 blocks, # of data code, # of ecc code, # of type2 blocks, # of data code}
@return array spec

Put an alignment marker.
@param array $frame frame
@param int $ox X center coordinate of the pattern
@param int $oy Y center coordinate of the pattern
@return array frame

Put an alignment pattern.
@param int $version version
@param array $frame frame
@param int $width width
@return array frame

Return BCH encoded version information pattern that is used for the symbol of version 7 or greater. Use lower 18 bits.
@param int $version version
@return string BCH encoded version information pattern

Return BCH encoded format information pattern.
@param array $mask
@param int $level error correction level
@return string BCH encoded format information pattern

Put a finder pattern.
@param array $frame frame
@param int $ox X center coordinate of the pattern
@param int $oy Y center coordinate of the pattern
@return array frame

Return a copy of initialized frame.
@param int $version version
@return array array of unsigned char.

Set new frame for the specified version.
@param int $version version
@return array array of unsigned char.

Return block number 0
@param array $spec
@return int value

Return block number 1
@param array $spec
@return int value

Return data codes 1
@param array $spec
@return int value

Return ecc codes 1
@param array $spec
@return int value

Return block number 2
@param array $spec
@return int value

Return data codes 2
@param array $spec
@return int value

Return ecc codes 2
@param array $spec
@return int value

Return data length
@param array $spec
@return int value

Return ecc length
@param array $spec
@return int value

Initialize a Reed-Solomon codec and add it to existing rsitems
@param int $symsize symbol size, bits
@param int $gfpoly  Field generator polynomial coefficients
@param int $fcr  first root of RS code generator polynomial, index form
@param int $prim  primitive element to generate polynomial roots
@param int $nroots RS code generator polynomial degree (number of roots)
@param int $pad  padding bytes at front of shortened block
@return array Array of RS values:<ul><li>mm = Bits per symbol;</li><li>nn = Symbols per block;</li><li>alpha_to = log lookup table array;</li><li>index_of = Antilog lookup table array;</li><li>genpoly = Generator polynomial array;</li><li>nroots = Number of generator;</li><li>roots = number of parity symbols;</li><li>fcr = First consecutive root, index form;</li><li>prim = Primitive element, index form;</li><li>iprim = prim-th root of 1, index form;</li><li>pad = Padding bytes in shortened block;</li><li>gfpoly</ul>.

modnn
@param array $rs RS values
@param int $x X position
@return int X osition

Initialize a Reed-Solomon codec and returns an array of values.
@param int $symsize symbol size, bits
@param int $gfpoly  Field generator polynomial coefficients
@param int $fcr  first root of RS code generator polynomial, index form
@param int $prim  primitive element to generate polynomial roots
@param int $nroots RS code generator polynomial degree (number of roots)
@param int $pad  padding bytes at front of shortened block
@return array Array of RS values:<ul><li>mm = Bits per symbol;</li><li>nn = Symbols per block;</li><li>alpha_to = log lookup table array;</li><li>index_of = Antilog lookup table array;</li><li>genpoly = Generator polynomial array;</li><li>nroots = Number of generator;</li><li>roots = number of parity symbols;</li><li>fcr = First consecutive root, index form;</li><li>prim = Primitive element, index form;</li><li>iprim = prim-th root of 1, index form;</li><li>pad = Padding bytes in shortened block;</li><li>gfpoly</ul>.

Encode a Reed-Solomon codec and returns the parity array
@param array $rs RS values
@param array $data data
@param array $parity parity
@return parity array

## References

**Database Tables (inferred)**
- `the`
- `1`
- `number`
- `bytes`
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\barcodes\qrcode.php`

**Classes**:
- `supports`
- `is`
- `supports`
- `is`
- `source`
- `are`
- `QRcode`
- `supports`
- `is`
- `source`
- `QRcode`
- `constructor`

**Functions/Methods**:
- `__construct($code, $eclevel = 'L')`
- `getBarcodeArray()`
- `binarize($frame)`
- `encodeString($string)`
- `encodeMask($mask)`
- `setFrameAt($at, $val)`
- `getFrameAt($at)`
- `getNextPosition()`
- `init($spec)`
- `getCode()`
- `writeFormatInformation($width, &$frame, $mask, $level)`
- `mask0($x, $y)`
- `mask1($x, $y)`
- `mask2($x, $y)`
- `mask3($x, $y)`
- `mask4($x, $y)`
- `mask5($x, $y)`
- `mask6($x, $y)`
- `mask7($x, $y)`
- `generateMaskNo($maskNo, $width, $frame)`
- `makeMaskNo($maskNo, $width, $s, &$d, $maskGenOnly=false)`
- `makeMask($width, $frame, $maskNo, $level)`
- `calcN1N3($length)`
- `evaluateSymbol($width, $frame)`
- `mask($width, $frame, $level)`
- `isdigitat($str, $pos)`
- `isalnumat($str, $pos)`
- `identifyMode($pos)`
- `eatNum()`
- `eatAn()`
- `eatKanji()`
- `eat8()`
- `splitString()`
- `toUpper()`
- `newInputItem($mode, $size, $data, $bstream=null)`
- `encodeModeNum($inputitem, $version)`
- `encodeModeAn($inputitem, $version)`
- `encodeMode8($inputitem, $version)`
- `encodeModeKanji($inputitem, $version)`
- `encodeModeStructure($inputitem)`
- `encodeBitStream($inputitem, $version)`
- `appendNewInputItem($items, $mode, $size, $data)`
- `insertStructuredAppendHeader($items, $size, $index, $parity)`
- `calcParity($items)`
- `checkModeNum($size, $data)`
- `lookAnTable($c)`
- `checkModeAn($size, $data)`
- `estimateBitsModeNum($size)`
- `estimateBitsModeAn($size)`
- `estimateBitsMode8($size)`
- `estimateBitsModeKanji($size)`
- `checkModeKanji($size, $data)`
- `check($mode, $size, $data)`
- `estimateBitStreamSize($items, $version)`
- `estimateVersion($items)`
- `lengthOfCode($mode, $version, $bits)`
- `createBitStream($items)`
- `convertData($items)`
- `appendPaddingBit($bstream)`
- `mergeBitStream($items)`
- `getBitStream($items)`
- `getByteStream($items)`
- `allocate($setLength)`
- `newFromNum($bits, $num)`
- `newFromBytes($size, $data)`
- `appendBitstream($bitstream, $append)`
- `appendNum($bitstream, $bits, $num)`
- `appendBytes($bitstream, $size, $data)`
- `bitstreamToByte($bstream)`
- `qrstrset($srctab, $x, $y, $repl, $replLen=false)`
- `getDataLength($version, $level)`
- `getECCLength($version, $level)`
- `getWidth($version)`
- `getRemainder($version)`
- `getMinimumVersion($size, $level)`
- `lengthIndicator($mode, $version)`
- `maximumWords($mode, $version)`
- `getEccSpec($version, $level, $spec)`
- `putAlignmentMarker($frame, $ox, $oy)`
- `putAlignmentPattern($version, $frame, $width)`
- `getVersionPattern($version)`
- `getFormatInfo($mask, $level)`
- `putFinderPattern($frame, $ox, $oy)`
- `createFrame($version)`
- `newFrame($version)`
- `rsBlockNum($spec)`
- `rsBlockNum1($spec)`
- `rsDataCodes1($spec)`
- `rsEccCodes1($spec)`
- `rsBlockNum2($spec)`
- `rsDataCodes2($spec)`
- `rsEccCodes2($spec)`
- `rsDataLength($spec)`
- `rsEccLength($spec)`
- `init_rs($symsize, $gfpoly, $fcr, $prim, $nroots, $pad)`
- `modnn($rs, $x)`
- `init_rs_char($symsize, $gfpoly, $fcr, $prim, $nroots, $pad)`
- `encode_rs_char($rs, $data, $parity)`

