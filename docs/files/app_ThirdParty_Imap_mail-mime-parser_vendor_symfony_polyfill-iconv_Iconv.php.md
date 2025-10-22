# app\ThirdParty\Imap\mail-mime-parser\vendor\symfony\polyfill-iconv\Iconv.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\symfony\polyfill-iconv\Iconv.php`
- Type: PHP
- Size: 22669 bytes

## Summary (from docblocks)

iconv implementation in pure PHP, UTF-8 centric.
Implemented:
- iconv              - Convert string to requested character encoding
- iconv_mime_decode  - Decodes a MIME header field
- iconv_mime_decode_headers - Decodes multiple MIME header fields at once
- iconv_get_encoding - Retrieve internal configuration variables of iconv extension
- iconv_set_encoding - Set current setting for character encoding conversion
- iconv_mime_encode  - Composes a MIME header field
- iconv_strlen       - Returns the character count of string
- iconv_strpos       - Finds position of first occurrence of a needle within a haystack
- iconv_strrpos      - Finds the last occurrence of a needle within a haystack
- iconv_substr       - Cut out part of a string
Charsets available for conversion are defined by files
in the charset/ directory and by Iconv::$alias below.
You're welcome to send back any addition you make.
@author Nicolas Grekas <p@tchwork.com>
@internal

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\symfony\polyfill-iconv\Iconv.php`

**Classes**:
- `Symfony\Polyfill\Iconv\Iconv`

**Functions/Methods**:
- `iconv($inCharset, $outCharset, $str)`
- `iconv_mime_decode_headers($str, $mode = 0, $charset = null)`
- `iconv_mime_decode($str, $mode = 0, $charset = null)`
- `iconv_get_encoding($type = 'all')`
- `iconv_set_encoding($type, $charset)`
- `iconv_mime_encode($fieldName, $fieldValue, $pref = null)`
- `iconv_strlen($s, $encoding = null)`
- `strlen1($s, $encoding = null)`
- `strlen2($s, $encoding = null)`
- `iconv_strpos($haystack, $needle, $offset = 0, $encoding = null)`
- `iconv_strrpos($haystack, $needle, $encoding = null)`
- `iconv_substr($s, $start, $length = 2147483647, $encoding = null)`
- `loadMap($type, $charset, &$map)`
- `utf8ToUtf8($str, $ignore)`
- `mapToUtf8(&$result, array $map, $str, $ignore)`
- `mapFromUtf8(&$result, array $map, $str, $ignore, $translit)`
- `qpByteCallback(array $m)`
- `pregOffset($offset)`
- `getData($file)`

