# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\CommentPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\CommentPart.php`
- Type: PHP
- Size: 1144 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a mime header comment -- text in a structured mime header
value existing within parentheses.
@author Zaahid Bateson

@var string the contents of the comment

Constructs a MimeLiteralPart, decoding the value if it's mime-encoded.

@param MbWrapper $charsetConverter
@param string $token

Returns the comment's text.

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\CommentPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\CommentPart extends MimeLiteralPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $token)`
- `getComment()`

