# app\ThirdParty\tcpdf\tcpdf_parser.php

- Path: `app\ThirdParty\tcpdf\tcpdf_parser.php`
- Type: PHP
- Size: 27600 bytes

## Summary (from docblocks)

@file
This is a PHP class for parsing PDF documents.<br>
@package com.tecnick.tcpdf
@author Nicola Asuni
@version 1.0.15

@class TCPDF_PARSER
This is a PHP class for parsing PDF documents.<br>
@package com.tecnick.tcpdf
@brief This is a PHP class for parsing PDF documents..
@version 1.0.15
@author Nicola Asuni - info@tecnick.com

Raw content of the PDF document.
@private

XREF data.
@protected

Array of PDF objects.
@protected

Class object for decoding filters.
@private

Array of configuration parameters.
@private

Parse a PDF document an return an array of objects.
@param string $data PDF data to parse.
@param array $cfg Array of configuration parameters:
			'die_for_errors' : if true termitate the program execution in case of error, otherwise thows an exception;
			'ignore_filter_decoding_errors' : if true ignore filter decoding errors;
			'ignore_missing_filter_decoders' : if true ignore missing filter decoding errors.
@public
@since 1.0.000 (2011-05-24)

Set the configuration parameters.
@param array $cfg Array of configuration parameters:
			'die_for_errors' : if true termitate the program execution in case of error, otherwise thows an exception;
			'ignore_filter_decoding_errors' : if true ignore filter decoding errors;
			'ignore_missing_filter_decoders' : if true ignore missing filter decoding errors.
@public

Return an array of parsed PDF document objects.
@return array Array of parsed PDF document objects.
@public
@since 1.0.000 (2011-06-26)

Get Cross-Reference (xref) table and trailer data from PDF document data.
@param int $offset xref offset (if know).
@param array $xref previous xref array (if any).
@return array containing xref and trailer data.
@protected
@since 1.0.000 (2011-05-24)

Decode the Cross-Reference section
@param int $startxref Offset at which the xref section starts (position of the 'xref' keyword).
@param array $xref Previous xref array (if any).
@return array containing xref and trailer data.
@protected
@since 1.0.000 (2011-06-20)

Decode the Cross-Reference Stream section
@param int $startxref Offset at which the xref section starts.
@param array $xref Previous xref array (if any).
@return array containing xref and trailer data.
@protected
@since 1.0.003 (2013-03-16)

Get object type, raw value and offset to next object
@param int $offset Object offset.
@return array containing object type, raw value and offset to next object
@protected
@since 1.0.000 (2011-06-20)

Get content of indirect object.
@param string $obj_ref Object number and generation number separated by underscore character.
@param int $offset Object offset.
@param boolean $decoding If true decode streams.
@return array containing object data.
@protected
@since 1.0.000 (2011-05-24)

Get the content of object, resolving indect object reference if necessary.
@param string $obj Object value.
@return array containing object data.
@protected
@since 1.0.000 (2011-06-26)

Decode the specified stream.
@param array $sdic Stream's dictionary array.
@param string $stream Stream to decode.
@return array containing decoded stream data and remaining filters.
@protected
@since 1.0.000 (2011-06-22)

Throw an exception or print an error message and die if the K_TCPDF_PARSER_THROW_EXCEPTION_ERROR constant is set to true.
@param string $msg The error message
@public
@since 1.0.000 (2011-05-23)

## References

**Database Tables (inferred)**
- `PDF`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\tcpdf\tcpdf_parser.php`

**Classes**:
- `for`
- `for`
- `for`
- `TCPDF_PARSER`
- `for`
- `for`
- `TCPDF_PARSER`

**Functions/Methods**:
- `__construct($data, $cfg=array()`
- `setConfig($cfg)`
- `getParsedData()`
- `getXrefData($offset=0, $xref=array()`
- `decodeXref($startxref, $xref=array()`
- `decodeXrefStream($startxref, $xref=array()`
- `getRawObject($offset=0)`
- `getIndirectObject($obj_ref, $offset=0, $decoding=true)`
- `getObjectVal($obj)`
- `decodeStream($sdic, $stream)`
- `Error($msg)`

