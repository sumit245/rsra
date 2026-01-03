# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\DateConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\DateConsumer.php`
- Type: PHP
- Size: 1249 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a date header into a Part\DatePart taking care of comment and quoted
parts as necessary.
@author Zaahid Bateson

Returns a Part\LiteralPart for the current token

@param string $token
@param bool $isLiteral
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart

Concatenates the passed parts and constructs a single Part\DatePart,
returning it in an array with a single element.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\DateConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\DateConsumer extends GenericConsumer`

**Functions/Methods**:
- `getPartForToken($token, $isLiteral)`
- `processParts(array $parts)`

