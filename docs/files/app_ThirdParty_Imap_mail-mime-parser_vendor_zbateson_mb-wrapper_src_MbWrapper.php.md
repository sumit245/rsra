# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mb-wrapper\src\MbWrapper.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mb-wrapper\src\MbWrapper.php`
- Type: PHP
- Size: 15207 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MbWrapper project.
@license http://opensource.org/licenses/bsd-license.php BSD

Helper class for converting strings between charsets, finding a multibyte
strings length, and creating a substring.
MbWrapper prefers PHP's mb_* extension first, and reverts to iconv_* if the
charsets aren't listed as supported by mb_list_encodings().
A list of aliased charsets are maintained to support the greatest number of
charsets.  In addition, when searching for a charset, separator characters
such as dashes are removed, and searches are always performed
case-insensitively.  This is to support strange reported encodings in emails,
etc...
@author Zaahid Bateson

@var array aliased charsets supported by mb_convert_encoding.
     The alias is stripped of any non-alphanumeric characters (so CP367
     is equal to CP-367) when comparing.
     Some of these translations are already supported by
     mb_convert_encoding on "my" PHP 5.5.9, but may not be supported in
     other implementations or versions since they're not part of
     documented support.

@var array aliased charsets supported by iconv.

@var string[] An array of encodings supported by the mb_* extension, as
     returned by mb_list_encodings(), with the key set to the charset's
     name afte

@var string[] cached lookups for quicker retrieval

Initializes the static mb_* encoding array.

The passed charset is uppercased, and stripped of non-alphanumeric
characters before being returned.
@param string|string[] $charset
@return string|string[]

Converts the passed string's charset from the passed $fromCharset to the
passed $toCharset

The function attempts to use mb_convert_encoding if possible, and falls
back to iconv if not.  If the source or destination character sets aren't
supported, a blank string is returned.

@param string $str
@return string

Returns true if the passed string is valid in the $charset encoding.
Either uses mb_check_encoding, or iconv if it's not a supported mb
encoding.
@param type $str
@param type $charset

Uses either mb_strlen or iconv_strlen to return the number of characters
in the passed $str for the given $charset
@param string $str
@param string $charset
@return int

Uses either mb_substr or iconv_substr to create and return a substring of
the passed $str.
@param string $str
@param string $charset
@param int $start
@param int $length
@return string

Looks up a charset from mb_list_encodings and identified aliases,
checking if the lookup has been cached already first.
If the encoding is not listed, the method will return false.
On success, the method will return the charset name as accepted by mb_*.
@param string $cs
@param bool $mbSupported
@return string|bool

Looks up the passed charset in self::$iconvAliases, returning the mapped
charset if applicable.  Otherwise returns charset.

@param string $cs
@return string the mapped charset (if mapped) or $cs otherwise

## References

**Database Tables (inferred)**
- `the`
- `mb_list_encodings`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mb-wrapper\src\MbWrapper.php`

**Classes**:
- `ZBateson\MbWrapper\for`
- `ZBateson\MbWrapper\MbWrapper`

**Functions/Methods**:
- `__construct()`
- `getNormalizedCharset($charset)`
- `convert($str, $fromCharset, $toCharset)`
- `checkEncoding($str, $charset)`
- `getLength($str, $charset)`
- `getSubstr($str, $charset, $start, $length = null)`
- `getMbCharset($cs)`
- `getIconvAlias($cs)`

