# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdBaseConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdBaseConsumer.php`
- Type: PHP
- Size: 3023 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Serves as a base-consumer for ID headers (like Message-ID and Content-ID).

IdBaseConsumer handles invalidly-formatted IDs not within '<' and '>'
characters.  Processing for validly-formatted IDs are passed on to its
sub-consumer, IdConsumer.
@author Zaahid Bateson

Returns the following as sub-consumers:
 - \ZBateson\MailMimeParser\Header\Consumer\CommentConsumer
 - \ZBateson\MailMimeParser\Header\Consumer\QuotedStringConsumer
 - \ZBateson\MailMimeParser\Header\Consumer\IdConsumer
@return AbstractConsumer[] the sub-consumers

Returns '\s+' as a whitespace separator.

@return string[] an array of regex pattern matchers

IdBaseConsumer doesn't have start/end tokens, and so always returns
false.

@param string $token
@return boolean false

IdBaseConsumer doesn't have start/end tokens, and so always returns
false.

@codeCoverageIgnore
@param string $token
@return boolean false

Returns null for whitespace, and LiteralPart for anything else.

@param string $token the token
@param bool $isLiteral set to true if the token represents a literal -
       e.g. an escaped token
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart|null the
        constructed header part or null if the token should be ignored

Overridden to filter out any found CommentPart objects.
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\IdBaseConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\IdBaseConsumer extends AbstractConsumer`

**Functions/Methods**:
- `getSubConsumers()`
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`
- `getPartForToken($token, $isLiteral)`
- `processParts(array $parts)`

