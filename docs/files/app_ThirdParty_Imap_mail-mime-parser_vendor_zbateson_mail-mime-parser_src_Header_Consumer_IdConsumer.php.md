# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdConsumer.php`
- Type: PHP
- Size: 967 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a single ID from an ID header.  Begins consuming on a '<' char, and
ends on a '>' char.
@author Zaahid Bateson

Overridden to return patterns matching the beginning part of an ID ('<'
and '>' chars).

@return string[] the patterns

Returns true for '>'.

Returns true for '<'.

@param string $token
@return boolean false

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\IdConsumer extends GenericConsumer`

**Functions/Methods**:
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`

