# plugins\RestApi\ThirdParty\Requests\IDNAEncoder.php

- Path: `plugins\RestApi\ThirdParty\Requests\IDNAEncoder.php`
- Type: PHP
- Size: 11547 bytes

## Summary (from docblocks)

IDNA URL encoder
Note: Not fully compliant, as nameprep does nothing yet.
@package Requests
@subpackage Utilities
@see https://tools.ietf.org/html/rfc3490 IDNA specification
@see https://tools.ietf.org/html/rfc3492 Punycode/Bootstrap specification

ACE prefix used for IDNA
@see https://tools.ietf.org/html/rfc3490#section-5
@var string

#@+
Bootstrap constant for Punycode
@see https://tools.ietf.org/html/rfc3492#section-5
@var int

#@-

Encode a hostname using Punycode
@param string $string Hostname
@return string Punycode-encoded hostname

Convert a UTF-8 string to an ASCII string using Punycode
@throws Requests_Exception Provided string longer than 64 ASCII characters (`idna.provided_too_long`)
@throws Requests_Exception Prepared string longer than 64 ASCII characters (`idna.prepared_too_long`)
@throws Requests_Exception Provided string already begins with xn-- (`idna.provided_is_prefixed`)
@throws Requests_Exception Encoded string longer than 64 ASCII characters (`idna.encoded_too_long`)
@param string $string ASCII or UTF-8 string (max length 64 characters)
@return string ASCII string

Check whether a given string contains only ASCII characters
@internal (Testing found regex was the fastest implementation)
@param string $string
@return bool Is the string ASCII-only?

Prepare a string for use as an IDNA name
@todo Implement this based on RFC 3491 and the newer 5891
@param string $string
@return string Prepared string

Convert a UTF-8 string to a UCS-4 codepoint array
Based on Requests_IRI::replace_invalid_with_pct_encoding()
@throws Requests_Exception Invalid UTF-8 codepoint (`idna.invalidcodepoint`)
@param string $input
@return array Unicode code points

RFC3492-compliant encoder
@internal Pseudo-code from Section 6.3 is commented with "#" next to relevant code
@throws Requests_Exception On character outside of the domain (never happens with Punycode) (`idna.character_outside_domain`)
@param string $input UTF-8 encoded string to encode
@return string Punycode-encoded string

Convert a digit to its respective character
@see https://tools.ietf.org/html/rfc3492#section-5
@throws Requests_Exception On invalid digit (`idna.invalid_digit`)
@param int $digit Digit in the range 0-35
@return string Single character corresponding to digit

Adapt the bias
@see https://tools.ietf.org/html/rfc3492#section-6.1
@param int $delta
@param int $numpoints
@param bool $firsttime
@return int New bias
function adapt(delta,numpoints,firsttime):

## References

**Database Tables (inferred)**
- `Section`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\IDNAEncoder.php`

**Classes**:
- `Requests_IDNAEncoder`

**Functions/Methods**:
- `encode($string)`
- `to_ascii($string)`
- `is_ascii($string)`
- `nameprep($string)`
- `utf8_to_codepoints($input)`
- `punycode_encode($input)`
- `digit_to_char($digit)`
- `adapt(delta,numpoints,firsttime)`
- `adapt($delta, $numpoints, $firsttime)`

