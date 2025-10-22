# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\symfony\polyfill-mbstring\Mbstring.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\symfony\polyfill-mbstring\Mbstring.php`
- Type: PHP
- Size: 29167 bytes

## Summary (from docblocks)

Partial mbstring implementation in PHP, iconv based, UTF-8 centric.
Implemented:
- mb_chr                  - Returns a specific character from its Unicode code point
- mb_convert_encoding     - Convert character encoding
- mb_convert_variables    - Convert character code in variable(s)
- mb_decode_mimeheader    - Decode string in MIME header field
- mb_encode_mimeheader    - Encode string for MIME header XXX NATIVE IMPLEMENTATION IS REALLY BUGGED
- mb_decode_numericentity - Decode HTML numeric string reference to character
- mb_encode_numericentity - Encode character to HTML numeric string reference
- mb_convert_case         - Perform case folding on a string
- mb_detect_encoding      - Detect character encoding
- mb_get_info             - Get internal settings of mbstring
- mb_http_input           - Detect HTTP input character encoding
- mb_http_output          - Set/Get HTTP output character encoding
- mb_internal_encoding    - Set/Get internal character encoding
- mb_list_encodings       - Returns an array of all supported encodings
- mb_ord                  - Returns the Unicode code point of a character
- mb_output_handler       - Callback function converts character encoding in output buffer
- mb_scrub                - Replaces ill-formed byte sequences with substitute characters
- mb_strlen               - Get string length
- mb_strpos               - Find position of first occurrence of string in a string
- mb_strrpos              - Find position of last occurrence of a string in a string
- mb_str_split            - Convert a string to an array
- mb_strtolower           - Make a string lowercase
- mb_strtoupper           - Make a string uppercase
- mb_substitute_character - Set/Get substitution character
- mb_substr               - Get part of string
- mb_stripos              - Finds position of first occurrence of a string within another, case insensitive
- mb_stristr              - Finds first occurrence of a string within another, case insensitive
- mb_strrchr              - Finds the last occurrence of a character in a string within another
- mb_strrichr             - Finds the last occurrence of a character in a string within another, case insensitive
- mb_strripos             - Finds position of last occurrence of a string within another, case insensitive
- mb_strstr               - Finds first occurrence of a string within another
- mb_strwidth             - Return width of string
- mb_substr_count         - Count the number of substring occurrences
Not implemented:
- mb_convert_kana         - Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
- mb_ereg_*               - Regular expression with multibyte support
- mb_parse_str            - Parse GET/POST/COOKIE data and set global variable
- mb_preferred_mime_name  - Get MIME charset string
- mb_regex_encoding       - Returns current encoding for multibyte regex as string
- mb_regex_set_options    - Set/Get the default options for mbregex functions
- mb_send_mail            - Send encoded mail
- mb_split                - Split multibyte string using regular expression
- mb_strcut               - Get part of string
- mb_strimwidth           - Get truncated string with specified width
@author Nicolas Grekas <p@tchwork.com>
@internal

## References

**Database Tables (inferred)**
- `its`
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\symfony\polyfill-mbstring\Mbstring.php`

**Classes**:
- `Symfony\Polyfill\Mbstring\Mbstring`

**Functions/Methods**:
- `mb_convert_encoding($s, $toEncoding, $fromEncoding = null)`
- `mb_convert_variables($toEncoding, $fromEncoding, &...$vars)`
- `mb_decode_mimeheader($s)`
- `mb_encode_mimeheader($s, $charset = null, $transferEncoding = null, $linefeed = null, $indent = null)`
- `mb_decode_numericentity($s, $convmap, $encoding = null)`
- `mb_encode_numericentity($s, $convmap, $encoding = null, $is_hex = false)`
- `mb_convert_case($s, $mode, $encoding = null)`
- `mb_internal_encoding($encoding = null)`
- `mb_language($lang = null)`
- `mb_list_encodings()`
- `mb_encoding_aliases($encoding)`
- `mb_check_encoding($var = null, $encoding = null)`
- `mb_detect_encoding($str, $encodingList = null, $strict = false)`
- `mb_detect_order($encodingList = null)`
- `mb_strlen($s, $encoding = null)`
- `mb_strpos($haystack, $needle, $offset = 0, $encoding = null)`
- `mb_strrpos($haystack, $needle, $offset = 0, $encoding = null)`
- `mb_str_split($string, $split_length = 1, $encoding = null)`
- `mb_strtolower($s, $encoding = null)`
- `mb_strtoupper($s, $encoding = null)`
- `mb_substitute_character($c = null)`
- `mb_substr($s, $start, $length = null, $encoding = null)`
- `mb_stripos($haystack, $needle, $offset = 0, $encoding = null)`
- `mb_stristr($haystack, $needle, $part = false, $encoding = null)`
- `mb_strrchr($haystack, $needle, $part = false, $encoding = null)`
- `mb_strrichr($haystack, $needle, $part = false, $encoding = null)`
- `mb_strripos($haystack, $needle, $offset = 0, $encoding = null)`
- `mb_strstr($haystack, $needle, $part = false, $encoding = null)`
- `mb_get_info($type = 'all')`
- `mb_http_input($type = '')`
- `mb_http_output($encoding = null)`
- `mb_strwidth($s, $encoding = null)`
- `mb_substr_count($haystack, $needle, $encoding = null)`
- `mb_output_handler($contents, $status)`
- `mb_chr($code, $encoding = null)`
- `mb_ord($s, $encoding = null)`
- `getSubpart($pos, $part, $haystack, $encoding)`
- `html_encoding_callback(array $m)`
- `title_case(array $s)`
- `getData($file)`
- `getEncoding($encoding)`

