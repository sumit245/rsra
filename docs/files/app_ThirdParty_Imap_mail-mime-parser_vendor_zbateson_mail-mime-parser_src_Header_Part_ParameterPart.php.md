# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ParameterPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ParameterPart.php`
- Type: PHP
- Size: 1853 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a name/value pair part of a header.

@author Zaahid Bateson

@var string the name of the parameter

@var string the RFC-1766 language tag if set.

Constructs a ParameterPart out of a name/value pair.  The name and
value are both mime-decoded if necessary.

If $language is provided, $name and $value are not mime-decoded. Instead,
they're taken as literals as part of a SplitParameterToken.

@param MbWrapper $charsetConverter
@param string $name
@param string $value
@param string $language

Returns the name of the parameter.

@return string

Returns the RFC-1766 (or subset) language tag, if the parameter is a
split RFC-2231 part with a language tag set.

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ParameterPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\ParameterPart extends MimeLiteralPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $name, $value, $language = null)`
- `getName()`
- `getLanguage()`

