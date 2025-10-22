# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\CommentConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\CommentConsumer.php`
- Type: PHP
- Size: 3690 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Consumes all tokens within parentheses as comments.

Parenthetical comments in mime-headers can be nested within one
another.  The outer-level continues after an inner-comment ends.
Additionally, quoted-literals may exist with comments as well meaning
a parenthesis inside a quoted string would not begin or end a comment
section.

In order to satisfy these specifications, CommentConsumer inherits
from GenericConsumer which defines CommentConsumer and
QuotedStringConsumer as sub-consumers.

Examples:
X-Mime-Header: Some value (comment)
X-Mime-Header: Some value (comment (nested comment) still in comment)
X-Mime-Header: Some value (comment "and part of original ) comment" -
     still a comment)
@author Zaahid Bateson

Returns patterns matching open and close parenthesis characters
as separators.

@return string[] the patterns

Returns true if the token is an open parenthesis character, '('.

@param string $token
@return bool

Returns true if the token is a close parenthesis character, ')'.

@param string $token
@return bool

Instantiates and returns Part\Token objects.  Tokens from this
and sub-consumers are combined into a Part\CommentPart in
combineParts.

@param string $token
@param bool $isLiteral
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart

Calls $tokens->next() and returns.

The default implementation checks if the current token is an end token,
and will not advance past it.  Because a comment part of a header can be
nested, its implementation must advance past its own 'end' token.

@param Iterator $tokens
@param bool $isStartToken

Post processing involves creating a single Part\CommentPart out of
generated parts from tokens.  The Part\CommentPart is returned in an
array.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|array

## References

**Database Tables (inferred)**
- `GenericConsumer`
- `this`
- `tokens`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\CommentConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\CommentConsumer extends GenericConsumer`

**Functions/Methods**:
- `getTokenSeparators()`
- `isStartToken($token)`
- `isEndToken($token)`
- `getPartForToken($token, $isLiteral)`
- `advanceToNextToken(Iterator $tokens, $isStartToken)`
- `processParts(array $parts)`

