# system\ThirdParty\Kint\Object\BlobObject.php

- Path: `system\ThirdParty\Kint\Object\BlobObject.php`
- Type: PHP
- Size: 6039 bytes

## Summary (from docblocks)

@var array Character encodings to detect
@see https://secure.php.net/function.mb-detect-order
In practice, mb_detect_encoding can only successfully determine the
difference between the following common charsets at once without
breaking things for one of the other charsets:
- ASCII
- UTF-8
- SJIS
- EUC-JP
The order of the charsets is significant. If you put UTF-8 before ASCII
it will never match ASCII, because UTF-8 is a superset of ASCII.
Similarly, SJIS and EUC-JP frequently match UTF-8 strings, so you should
check UTF-8 first. SJIS and EUC-JP seem to work either way, but SJIS is
more common so it should probably be first.
While you're free to experiment with other charsets, remember to keep
this behavior in mind when setting up your char_encodings array.
This depends on the mbstring extension

@var array Legacy character encodings to detect
@see https://secure.php.net/function.iconv
Assuming the other encoding checks fail, this will perform a
simple iconv conversion to check for invalid bytes. If any are
found it will not match.
This can be useful for ambiguous single byte encodings like
windows-125x and iso-8859-x which have practically undetectable
differences because they use every single byte available.
This is *NOT* reliable and should not be trusted implicitly. As
with char_encodings, the order of the charsets is significant.
This depends on the iconv extension

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Object\BlobObject.php`

**Classes**:
- `Kint\Object\BlobObject extends BasicObject`

**Functions/Methods**:
- `getType()`
- `getValueShort()`
- `transplant(BasicObject $old)`
- `strlen($string, $encoding = false)`
- `substr($string, $start, $length = null, $encoding = false)`
- `detectEncoding($string)`

