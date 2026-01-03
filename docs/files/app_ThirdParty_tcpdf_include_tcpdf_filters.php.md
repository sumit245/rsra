# app\ThirdParty\tcpdf\include\tcpdf_filters.php

- Path: `app\ThirdParty\tcpdf\include\tcpdf_filters.php`
- Type: PHP
- Size: 14729 bytes

## Summary (from docblocks)

@file
This is a PHP class for decoding common PDF filters (PDF 32000-2008 - 7.4 Filters).<br>
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.001

@class TCPDF_FILTERS
This is a PHP class for decoding common PDF filters (PDF 32000-2008 - 7.4 Filters).<br>
@package com.tecnick.tcpdf
@brief This is a PHP class for decoding common PDF filters.
@version 1.0.001
@author Nicola Asuni - info@tecnick.com

Define a list of available filter decoders.
@private static

Get a list of available decoding filters.
@return array Array of available filter decoders.
@since 1.0.000 (2011-05-23)
@public static

Decode data using the specified filter type.
@param string $filter Filter name.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

Standard
Default decoding filter (leaves data unchanged).
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

ASCIIHexDecode
Decodes data encoded in an ASCII hexadecimal representation, reproducing the original binary data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

ASCII85Decode
Decodes data encoded in an ASCII base-85 representation, reproducing the original binary data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

LZWDecode
Decompresses data encoded using the LZW (Lempel-Ziv-Welch) adaptive compression method, reproducing the original text or binary data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

FlateDecode
Decompresses data encoded using the zlib/deflate compression method, reproducing the original text or binary data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

RunLengthDecode
Decompresses data encoded using a byte-oriented run-length encoding algorithm.
@param string $data Data to decode.
@since 1.0.000 (2011-05-23)
@public static

CCITTFaxDecode (NOT IMPLEMETED - RETURN AN EXCEPTION)
Decompresses data encoded using the CCITT facsimile standard, reproducing the original data (typically monochrome image data at 1 bit per pixel).
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

JBIG2Decode (NOT IMPLEMETED - RETURN AN EXCEPTION)
Decompresses data encoded using the JBIG2 standard, reproducing the original monochrome (1 bit per pixel) image data (or an approximation of that data).
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

DCTDecode (NOT IMPLEMETED - RETURN AN EXCEPTION)
Decompresses data encoded using a DCT (discrete cosine transform) technique based on the JPEG standard, reproducing image sample data that approximates the original data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

JPXDecode (NOT IMPLEMETED - RETURN AN EXCEPTION)
Decompresses data encoded using the wavelet-based JPEG2000 standard, reproducing the original image data.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

Crypt (NOT IMPLEMETED - RETURN AN EXCEPTION)
Decrypts data encrypted by a security handler, reproducing the data as it was before encryption.
@param string $data Data to decode.
@return string Decoded data string.
@since 1.0.000 (2011-05-23)
@public static

Throw an exception.
@param string $msg The error message
@since 1.0.000 (2011-05-23)
@public static

## References

**Database Tables (inferred)**
- `string`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\include\tcpdf_filters.php`

**Classes**:
- `for`
- `for`
- `TCPDF_FILTERS`
- `for`
- `for`
- `TCPDF_FILTERS`

**Functions/Methods**:
- `getAvailableFilters()`
- `decodeFilter($filter, $data)`
- `decodeFilterStandard($data)`
- `decodeFilterASCIIHexDecode($data)`
- `decodeFilterASCII85Decode($data)`
- `decodeFilterLZWDecode($data)`
- `decodeFilterFlateDecode($data)`
- `decodeFilterRunLengthDecode($data)`
- `decodeFilterCCITTFaxDecode($data)`
- `decodeFilterJBIG2Decode($data)`
- `decodeFilterDCTDecode($data)`
- `decodeFilterJPXDecode($data)`
- `decodeFilterCrypt($data)`
- `Error($msg)`

