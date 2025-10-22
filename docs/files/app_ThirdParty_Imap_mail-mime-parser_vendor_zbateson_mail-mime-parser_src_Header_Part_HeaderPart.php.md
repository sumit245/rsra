# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPart.php`
- Type: PHP
- Size: 2813 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Abstract base class representing a single part of a parsed header.
@author Zaahid Bateson

@var string the value of the part

@var MbWrapper $charsetConverter the charset converter used for
     converting strings in HeaderPart::convertEncoding

Sets up dependencies.

@param MbWrapper $charsetConverter

Returns the part's value.

@return string the value of the part

Returns the value of the part (which is a string).

@return string the value

Returns true if spaces before this part should be ignored.  True is only
returned for MimeLiterals if the part begins with a mime-encoded string,
Tokens if the Token's value is a single space, and for CommentParts.

@return bool

Returns true if spaces after this part should be ignored.  True is only
returned for MimeLiterals if the part ends with a mime-encoded string
Tokens if the Token's value is a single space, and for CommentParts.

@return bool

Ensures the encoding of the passed string is set to UTF-8.

The method does nothing if the passed $from charset is UTF-8 already, or
if $force is set to false and mb_check_encoding for $str returns true
for 'UTF-8'.

@param string $str
@param string $from
@param boolean $force
@return string utf-8 string

## References

**Database Tables (inferred)**
- `charset`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\representing`
- `ZBateson\MailMimeParser\Header\Part\HeaderPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter)`
- `getValue()`
- `__toString()`
- `ignoreSpacesBefore()`
- `ignoreSpacesAfter()`
- `convertEncoding($str, $from = 'ISO-8859-1', $force = false)`

