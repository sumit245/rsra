# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\GenericConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\GenericConsumer.php`
- Type: PHP
- Size: 6381 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

A minimal implementation of AbstractConsumer defining a CommentConsumer and
QuotedStringConsumer as sub-consumers, and splitting tokens by whitespace.
Note that GenericConsumer should be instantiated with a
MimeLiteralPartFactory instead of a HeaderPartFactory.  Sub-classes may not
need MimeLiteralPartFactory instances though.

@author Zaahid Bateson

Returns \ZBateson\MailMimeParser\Header\Consumer\CommentConsumer and
\ZBateson\MailMimeParser\Header\Consumer\QuotedStringConsumer as
sub-consumers.

@return AbstractConsumer[] the sub-consumers

Returns the regex '\s+' (whitespace) pattern matcher as a token marker so
the header value is split along whitespace characters.  GenericConsumer
filters out whitespace-only tokens from getPartForToken.

The whitespace character delimits mime-encoded parts for decoding.

@return string[] an array of regex pattern matchers

GenericConsumer doesn't have start/end tokens, and so always returns
false.

@param string $token
@return boolean false

GenericConsumer doesn't have start/end tokens, and so always returns
false.

@codeCoverageIgnore
@param string $token
@return boolean false

Returns true if a space should be added based on the passed last and next
parts.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart $nextPart
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart $lastPart
@return bool

Loops over the $parts array from the current position, checks if the
space should be added, then adds it to $retParts and returns.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $retParts
@param int $curIndex
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart $spacePart
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart $lastPart

Checks if the passed space part should be added to the returned parts and
adds it.

Never adds a space if it's the first part, otherwise only add it if
either part isn't set to ignore the space

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $retParts
@param int $curIndex
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart $spacePart

Returns true if the passed HeaderPart is a Token instance and a space.

@param HeaderPart $part
@return bool

Filters out ignorable spaces between parts in the passed array.

Spaces with parts on either side of it that specify they can be ignored
are filtered out.  filterIgnoredSpaces is called from within
processParts, and if needed by an implementing class that overrides
processParts, must be specifically called.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]

Overridden to combine all part values into a single string and return it
as an array with a single element.

@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\LiteralPart[]|array

## References

**Database Tables (inferred)**
- `getPartForToken`
- `the`
- `within`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\GenericConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\GenericConsumer extends AbstractConsumer`
- `ZBateson\MailMimeParser\Header\Consumer\that`

**Functions/Methods**:
- `getSubConsumers()`
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`
- `shouldAddSpace(HeaderPart $nextPart, HeaderPart $lastPart)`
- `addSpaceToRetParts(array $parts,
        array &$retParts,
        $curIndex,
        HeaderPart &$spacePart,
        HeaderPart $lastPart)`
- `addSpaces(array $parts, array &$retParts, $curIndex, HeaderPart &$spacePart = null)`
- `isSpaceToken(HeaderPart $part)`
- `filterIgnoredSpaces(array $parts)`
- `processParts(array $parts)`

