# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderFactory.php`
- Type: PHP
- Size: 4847 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Constructs various AbstractHeader types depending on the type of header
passed.

If the passed header resolves to a specific defined header type, it is parsed
as such.  Otherwise, a GenericHeader is instantiated and returned.  Headers
are mapped as follows:

AddressHeader: From, To, Cc, Bcc, Sender, Reply-To, Resent-From, Resent-To,
Resent-Cc, Resent-Bcc, Resent-Reply-To, Delivered-To
DateHeader: Date, Resent-Date, Delivery-Date, Expires, Expiry-Date, Reply-By
ParameterHeader: Content-Type, Content-Disposition
IdHeader: Message-ID, Content-ID, In-Reply-To, References
ReceivedHeader: Received
@author Zaahid Bateson

@var ConsumerService the passed ConsumerService providing
AbstractConsumer singletons.

@var \ZBateson\MailMimeParser\Header\Part\MimeLiteralPartFactory for
mime decoding.

@var string[][] maps AbstractHeader types to headers.

@var string Defines the generic AbstractHeader type to use for headers
that aren't mapped in $types

Instantiates member variables with the passed objects.

@param ConsumerService $consumerService
@param MimeLiteralPartFactory $mimeLiteralPartFactory

Returns the string in lower-case, and with non-alphanumeric characters
stripped out.
@param string $header
@return string

Returns the name of an AbstractHeader class for the passed header name.

@param string $name
@return string

Creates an AbstractHeader instance for the passed header name and value,
and returns it.

@param string $name
@param string $value
@return \ZBateson\MailMimeParser\Header\AbstractHeader

Creates and returns a HeaderContainer.
@return HeaderContainer;

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\HeaderFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\HeaderFactory`
- `ZBateson\MailMimeParser\Header\for`

**Functions/Methods**:
- `__construct(ConsumerService $consumerService, MimeLiteralPartFactory $mimeLiteralPartFactory)`
- `getNormalizedHeaderName($header)`
- `getClassFor($name)`
- `newInstance($name, $value)`
- `newHeaderContainer()`

