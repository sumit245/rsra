# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AbstractHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AbstractHeader.php`
- Type: PHP
- Size: 3403 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Abstract base class representing a mime email's header.
The base class sets up the header's consumer, sets the name of the header and
calls the consumer to parse the header's value.
AbstractHeader::getConsumer is an abstract method that must be overridden to
return an appropriate Consumer\AbstractConsumer type.
@author Zaahid Bateson

@var string the name of the header

@var \ZBateson\MailMimeParser\Header\Part\HeaderPart[] the header's parts
(as returned from the consumer)

@var string the raw value

Assigns the header's name and raw value, then calls getConsumer and
setParseHeaderValue to extract a parsed value.
@param ConsumerService $consumerService
@param string $name
@param string $value

Returns the header's Consumer
@param ConsumerService $consumerService
@return \ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer

Calls the consumer and assigns the parsed parts to member variables.
The default implementation assigns the returned value to $this->part.
@param AbstractConsumer $consumer

Returns an array of HeaderPart objects associated with this header.
@return \ZBateson\MailMimeParser\Header\Part\HeaderPart[]

Returns the parsed value of the header -- calls getValue on $this->part
@return string

Returns the raw value of the header prior to any processing.
@return string

Returns the name of the header.
@return string

Returns the string representation of the header.  At the moment this is
just in the form of:
<HeaderName>: <RawValue>
No additional processing is performed (for instance to wrap long lines.)
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\AbstractHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\representing`
- `ZBateson\MailMimeParser\Header\sets`
- `ZBateson\MailMimeParser\Header\AbstractHeader`

**Functions/Methods**:
- `__construct(ConsumerService $consumerService, $name, $value)`
- `getConsumer(ConsumerService $consumerService)`
- `setParseHeaderValue(AbstractConsumer $consumer)`
- `getParts()`
- `getValue()`
- `getRawValue()`
- `getName()`
- `__toString()`

