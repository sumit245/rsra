# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\Token.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\Token.php`
- Type: PHP
- Size: 1592 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Holds a string value token that will require additional processing by a
consumer prior to returning to a client.

A Token is meant to hold a value for further processing -- for instance when
consuming an address list header (like From or To) -- before it's known what
type of HeaderPart it is (could be an email address, could be a name, or
could be a group.)
@author Zaahid Bateson

Initializes a token.

@param MbWrapper $charsetConverter
@param string $value the token's value

Returns true if the value of the token is equal to a single space.

@return bool

Returns true if the value is a space.

@return bool

Returns true if the value is a space.

@return bool

## References

**Database Tables (inferred)**
- `or`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\Token.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\Token extends HeaderPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $value)`
- `isSpace()`
- `ignoreSpacesBefore()`
- `ignoreSpacesAfter()`

