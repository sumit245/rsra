# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ConsumerService.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ConsumerService.php`
- Type: PHP
- Size: 6171 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Simple service provider for consumer singletons.
@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\Part\HeaderPartFactory the
HeaderPartFactory instance used to create HeaderParts.

@var \ZBateson\MailMimeParser\Header\Part\MimeLiteralPartFactory used for
GenericConsumer instances.

@var Received\DomainConsumer[]|
     Received\GenericReceivedConsumer[]|
     Received\ReceivedDateConsumer[] an array of sub-received header
     consumer instances.

Sets up the HeaderPartFactory member variable.

@param HeaderPartFactory $partFactory
@param MimeLiteralPartFactory $mimeLiteralPartFactory

Returns the AddressBaseConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\AddressBaseConsumer

Returns the AddressConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\AddressConsumer

Returns the AddressGroupConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\AddressGroupConsumer

Returns the CommentConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\CommentConsumer

Returns the GenericConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\GenericConsumer

Returns the SubjectConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\SubjectConsumer

Returns the QuotedStringConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\QuotedStringConsumer

Returns the DateConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\DateConsumer

Returns the ParameterConsumer singleton instance.

@return \ZBateson\MailMimeParser\Header\Consumer\ParameterConsumer

Returns the consumer instance corresponding to the passed part name of a
Received header.
@param string $partName
@return \ZBateson\MailMimeParser\Header\Consumer\Received\FromConsumer

Returns the ReceivedConsumer singleton instance.
@return \ZBateson\MailMimeParser\Header\Consumer\ReceivedConsumer

Returns the IdConsumer singleton instance.
@return \ZBateson\MailMimeParser\Header\Consumer\IdConsumer

Returns the IdBaseConsumer singleton instance.
@return \ZBateson\MailMimeParser\Header\Consumer\IdBaseConsumer

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\ConsumerService.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\ConsumerService`

**Functions/Methods**:
- `__construct(HeaderPartFactory $partFactory, MimeLiteralPartFactory $mimeLiteralPartFactory)`
- `getAddressBaseConsumer()`
- `getAddressConsumer()`
- `getAddressGroupConsumer()`
- `getCommentConsumer()`
- `getGenericConsumer()`
- `getSubjectConsumer()`
- `getQuotedStringConsumer()`
- `getDateConsumer()`
- `getParameterConsumer()`
- `getSubReceivedConsumer($partName)`
- `getReceivedConsumer()`
- `getIdConsumer()`
- `getIdBaseConsumer()`

