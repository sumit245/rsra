# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ReceivedConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ReceivedConsumer.php`
- Type: PHP
- Size: 4290 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses a Received header into ReceivedParts, ReceivedDomainParts, a DatePart,
and CommentParts.
Parts that don't correspond to any of the above are discarded.
@author Zaahid Bateson

ReceivedConsumer doesn't have any token separators of its own.
Sub-Consumers will return separators matching 'part' word separators, for
example 'from' and 'by', and ';' for date, etc...
@return string[] an array of regex pattern matchers

ReceivedConsumer doesn't have an end token, and so this just returns
false.
@param string $token
@return boolean false

ReceivedConsumer doesn't start consuming at a specific token, it's the
base handler for the Received header, and so this always returns false.

@codeCoverageIgnore
@param string $token
@return boolean false

Returns two {@see Received/DomainConsumer} instances, with FROM and BY as
part names, and 4 {@see Received/GenericReceivedConsumer} instances for
VIA, WITH, ID, and FOR part names, and
1 {@see Received/ReceivedDateConsumer} for the date/time stamp, and one
{@see CommentConsumer} to consume any comments.

@return AbstractConsumer[] the sub-consumers

Overridden to exclude the MimeLiteralPart pattern that comes by default
in AbstractConsumer.
@return string the regex pattern

Overridden to /not/ advance when the end token matches a start token for
a sub-consumer.
@param Iterator $tokens
@param bool $isStartToken

Overridden to combine all part values into a single string and return it
as an array with a single element.
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|
        \ZBateson\MailMimeParser\Header\Part\ReceivedDomainPart[]|
        \ZBateson\MailMimeParser\Header\Part\ReceivedPart[]|
        \ZBateson\MailMimeParser\Header\Part\DatePart[]|
        \ZBateson\MailMimeParser\Header\Part\CommentPart[]|array

## References

**Database Tables (inferred)**
- `and`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ReceivedConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\ReceivedConsumer extends AbstractConsumer`

**Functions/Methods**:
- `getTokenSeparators()`
- `isEndToken($token)`
- `isStartToken($token)`
- `getSubConsumers()`
- `getTokenSplitPattern()`
- `advanceToNextToken(Iterator $tokens, $isStartToken)`
- `processParts(array $parts)`

