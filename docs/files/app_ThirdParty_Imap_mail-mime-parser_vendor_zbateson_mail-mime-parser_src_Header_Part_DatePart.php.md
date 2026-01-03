# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\DatePart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\DatePart.php`
- Type: PHP
- Size: 2398 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a header into a DateTime object.
@author Zaahid Bateson

@var DateTime the parsed date, or null if the date could not be parsed

Tries parsing the passed token as an RFC 2822 date, and failing that into
an RFC 822 date, and failing that, tries to parse it by calling
``` new DateTime($value) ```.
@param MbWrapper $charsetConverter
@param string $token

Parse date string token
@param string $dateToken Date token as string
@return \DateTime|false Returns \DateTime or false on failure.

Returns a DateTime object or false if it can't be parsed.
@return DateTime

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\DatePart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\DatePart extends LiteralPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $token)`
- `parseDateToken($dateToken)`
- `getDateTime()`

