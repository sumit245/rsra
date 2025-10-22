# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ASN1.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ASN1.php`
- Type: PHP
- Size: 53215 bytes

## Summary (from docblocks)

Pure-PHP ASN.1 Parser
PHP version 5
ASN.1 provides the semantics for data encoded using various schemes.  The most commonly
utilized scheme is DER or the "Distinguished Encoding Rules".  PEM's are base64 encoded
DER blobs.
\phpseclib\File\ASN1 decodes and encodes DER formatted messages and places them in a semantic context.
Uses the 1988 ASN.1 syntax.
@category  File
@package   ASN1
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2012 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP ASN.1 Parser
@package ASN1
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
Tag Classes
@access private
@link http://www.itu.int/ITU-T/studygroups/com17/languages/X.690-0207.pdf#page=12

#@-

#@+
Tag Classes
@access private
@link http://www.obj-sys.com/asn1tutorial/node124.html

#@-

#@+
More Tag Classes
@access private
@link http://www.obj-sys.com/asn1tutorial/node10.html

#@-

#@+
Tag Aliases
These tags are kinda place holders for other tags.
@access private

#@-

ASN.1 object identifier
@var array
@access private
@link http://en.wikipedia.org/wiki/Object_identifier

Default date format
@var string
@access private
@link http://php.net/class.datetime

Default date format
@var array
@access private
@see self::setTimeFormat()
@see self::asn1map()
@link http://php.net/class.datetime

Filters
If the mapping type is self::TYPE_ANY what do we actually encode it as?
@var array
@access private
@see self::_encode_der()

Type mapping table for the ANY type.
Structured or unknown types are mapped to a \phpseclib\File\ASN1\Element.
Unambiguous types get the direct mapping (int/real/bool).
Others are mapped as a choice, with an extra indexing level.
@var array
@access public

String type to character size mapping table.
Non-convertable types are absent from this table.
size == 0 indicates variable length encoding.
@var array
@access public

Parse BER-encoding
Serves a similar purpose to openssl's asn1parse
@param string $encoded
@return array
@access public

Parse BER-encoding (Helper function)
Sometimes we want to get the BER encoding of a particular tag.  $start lets us do that without having to reencode.
$encoded is passed by reference for the recursive calls done for self::TYPE_BIT_STRING and
self::TYPE_OCTET_STRING. In those cases, the indefinite length is used.
@param string $encoded
@param int $start
@param int $encoded_pos
@return array
@access private

ASN.1 Map
Provides an ASN.1 semantic mapping ($mapping) from a parsed BER-encoding to a human readable format.
"Special" mappings may be applied on a per tag-name basis via $special.
@param array $decoded
@param array $mapping
@param array $special
@return array
@access public

ASN.1 Encode
DER-encodes an ASN.1 semantic mapping ($mapping).  Some libraries would probably call this function
an ASN.1 compiler.
"Special" mappings can be applied via $special.
@param string $source
@param string $mapping
@param int $idx
@return string
@access public

ASN.1 Encode (Helper function)
@param string $source
@param string $mapping
@param int $idx
@return string
@access private

DER-encode the length
DER supports lengths up to (2**8)**127, however, we'll only support lengths up to (2**8)**4.  See
{@link http://itu.int/ITU-T/studygroups/com17/languages/X.690-0207.pdf#p=13 X.690 paragraph 8.1.3} for more information.
@access private
@param int $length
@return string

BER-decode the time
Called by _decode_ber() and in the case of implicit tags asn1map().
@access private
@param string $content
@param int $tag
@return string

Set the time format
Sets the time / date format for asn1map().
@access public
@param string $format

Load OIDs
Load the relevant OIDs for a particular ASN.1 semantic mapping.
@access public
@param array $oids

Load filters
See \phpseclib\File\X509, etc, for an example.
@access public
@param array $filters

String Shift
Inspired by array_shift
@param string $string
@param int $index
@return string
@access private

String type conversion
This is a lazy conversion, dealing only with character size.
No real conversion table is used.
@param string $in
@param int $from
@param int $to
@return string
@access public

## References

**Database Tables (inferred)**
- `this`
- `all`
- `a`
- `X`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ASN1.php`

**Classes**:
- `phpseclib\File\ASN1`
- `phpseclib\File\is`
- `phpseclib\File\distinguishes`
- `phpseclib\File\number`
- `phpseclib\File\match`
- `phpseclib\File\match`

**Functions/Methods**:
- `decodeBER($encoded)`
- `_decode_ber($encoded, $start = 0, $encoded_pos = 0)`
- `asn1map($decoded, $mapping, $special = array()`
- `encodeDER($source, $mapping, $special = array()`
- `_encode_der($source, $mapping, $idx = null, $special = array()`
- `_encodeLength($length)`
- `_decodeTime($content, $tag)`
- `setTimeFormat($format)`
- `loadOIDs($oids)`
- `loadFilters($filters)`
- `_string_shift(&$string, $index = 1)`
- `convert($in, $from = self::TYPE_UTF8_STRING, $to = self::TYPE_UTF8_STRING)`

