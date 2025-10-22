# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\SplitParameterToken.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\SplitParameterToken.php`
- Type: PHP
- Size: 5246 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Holds a running value for an RFC-2231 split header parameter.

ParameterConsumer creates SplitParameterTokens when a split header parameter
is first found, and adds subsequent split parts to an already created one if
the parameter name matches.
@author Zaahid Bateson

@var string name of the parameter.

@var string[] keeps encoded parts values that need to be decoded.  Keys
     are set to the index part of the split parameter and used for
     sorting before decoding/concatenating.

@var string[] contains literal parts that don't require any decoding (and
     are therefore ISO-8859-1 (technically should be 7bit US-ASCII but
     allowing 8bit shouldn't be an issue as elsewhere in MMP).

@var string RFC-1766 (or subset) language code with optional subtags,
     regions, etc...

@var string charset of content in $encodedParts.

Initializes a SplitParameterToken.

@param MbWrapper $charsetConverter
@param string $name the parameter's name

Extracts charset and language from an encoded value, setting them on the
current object if $index is 0 and adds the value part to the encodedParts
array.

@param string $value
@param int $index

Adds the passed part to the running array of values.

If $isEncoded is true, language and charset info is extracted from the
value, and the value is decoded before returning in getValue.

The value of the parameter is sorted based on the passed $index
arguments when adding before concatenating when re-constructing the
value.

@param string $value
@param boolean $isEncoded
@param int $index

Traverses $this->encodedParts until a non-sequential key is found, or the
end of the array is found.

This allows encoded parts of a split parameter to be split anywhere and
reconstructed.

The returned string is converted to UTF-8 before being returned.

@return string

Reconstructs the value of the split parameter into a single UTF-8 string
and returns it.

@return string

Returns the name of the parameter.

@return string

Returns the language of the parameter if set, or null if not.

@return string

## References

**Database Tables (inferred)**
- `an`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\SplitParameterToken.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\SplitParameterToken extends HeaderPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $name)`
- `extractMetaInformationAndValue($value, $index)`
- `addPart($value, $isEncoded, $index)`
- `getNextEncodedValue()`
- `getValue()`
- `getName()`
- `getLanguage()`

