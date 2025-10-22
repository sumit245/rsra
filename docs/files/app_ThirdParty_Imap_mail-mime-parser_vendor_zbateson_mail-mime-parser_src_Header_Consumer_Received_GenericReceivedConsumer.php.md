# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\GenericReceivedConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\GenericReceivedConsumer.php`
- Type: PHP
- Size: 4707 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Consumes simple literal strings for parts of a Received header.
Starts consuming when the initialized $partName string is located, for
instance when initialized with "FROM", will start consuming on " FROM" or
"FROM ".
The consumer ends when any possible "Received" header part is found, namely
on one of the following tokens: from, by, via, with, id, for, or when the
start token for the date stamp is found, ';'.
The consumer allows comments in and around the consumer... although the
Received header specification only allows them before a part, for example,
technically speaking this is valid:
"FROM machine (host) (comment) BY machine"
However, this is not:
"FROM machine (host) BY machine WITH (comment) ESMTP"
The consumer will allow both.
@author Zaahid Bateson

@var string the current part name being parsed.

Constructor overridden to include $partName parameter.
@param ConsumerService $consumerService
@param HeaderPartFactory $partFactory
@param string $partName

Returns the name of the part being parsed.
This is always the lower-case name provided to the constructor, not the
actual string that started the consumer, which could be in any case.
@return string

Overridden to return a CommentConsumer.
@return AbstractConsumer[] the sub-consumers

Returns true if the passed token matches (case-insensitively)
$this->getPartName() with optional whitespace surrounding it.
@param string $token
@return bool

Returns true if the token matches (case-insensitively) any of the
following, with optional surrounding whitespace:
o from
o by
o via
o with
o id
o for
o ;
@param string $token
@return boolean

Returns a whitespace separator (for filtering ignorable whitespace
between parts), and a separator matching the current part name as
returned by $this->getPartName().
@return string[] an array of regex pattern matchers

Overridden to combine all part values into a single string and return it
as the first element, followed by any comment elements as subsequent
elements.
@param \ZBateson\MailMimeParser\Header\Part\HeaderPart[] $parts
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]|
        \ZBateson\MailMimeParser\Header\Part\CommentPart[]|
        array

## References

**Database Tables (inferred)**
- `machine`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\GenericReceivedConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\Received\GenericReceivedConsumer extends GenericConsumer`

**Functions/Methods**:
- `__construct(ConsumerService $consumerService, HeaderPartFactory $partFactory, $partName)`
- `getPartName()`
- `getSubConsumers()`
- `isStartToken($token)`
- `isEndToken($token)`
- `getTokenSeparators()`
- `processParts(array $parts)`

