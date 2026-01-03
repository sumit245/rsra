# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedPart.php`
- Type: PHP
- Size: 939 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents one parameter in a parsed 'Received' header, e.g. the FROM or VIA
part.
Note that FROM and BY actually get parsed into a sub-class,
ReceivedDomainPart which keeps track of other sub-parts that can be parsed
from them.
@author Zaahid Bateson

Constructor.

@param MbWrapper $charsetConverter
@param string $name
@param string $value

## References

**Database Tables (inferred)**
- `or`
- `and`
- `them`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\ReceivedPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\ReceivedPart extends ParameterPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $name, $value)`

