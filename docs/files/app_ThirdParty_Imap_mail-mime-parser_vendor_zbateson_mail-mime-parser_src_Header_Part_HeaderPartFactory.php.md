# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPartFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPartFactory.php`
- Type: PHP
- Size: 4956 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Constructs and returns HeaderPart objects.
@author Zaahid Bateson

@var MbWrapper $charsetConverter passed to HeaderPart constructors
     for converting strings in HeaderPart::convertEncoding

Sets up dependencies.

@param MbWrapper $charsetConverter

Creates and returns a default HeaderPart for this factory, allowing
subclass factories for specialized HeaderParts.

The default implementation returns a new Token.

@param string $value
@return HeaderPart

Initializes and returns a new Token.

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\Token

Instantiates and returns a SplitParameterToken with the given name.

@param string $name
@return SplitParameterToken

Initializes and returns a new LiteralPart.

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\LiteralPart

Initializes and returns a new MimeLiteralPart.

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\MimeLiteralPart

Initializes and returns a new CommentPart.

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\CommentPart

Initializes and returns a new AddressPart.

@param string $name
@param string $email
@return \ZBateson\MailMimeParser\Header\Part\AddressPart

Initializes and returns a new AddressGroupPart

@param array $addresses
@param string $name
@return \ZBateson\MailMimeParser\Header\Part\AddressGroupPart

Initializes and returns a new DatePart

@param string $value
@return \ZBateson\MailMimeParser\Header\Part\DatePart

Initializes and returns a new ParameterPart.

@param string $name
@param string $value
@param string $language
@return \ZBateson\MailMimeParser\Header\Part\ParameterPart

Initializes and returns a new ReceivedPart.
@param string $name
@param string $value
@return \ZBateson\MailMimeParser\Header\Part\ReceivedPart

Initializes and returns a new ReceivedDomainPart.
@param string $name
@param string $value
@param string $ehloName
@param string $hostName
@param string $hostAddress
@return \ZBateson\MailMimeParser\Header\Part\ReceivedDomainPart

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\HeaderPartFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\HeaderPartFactory`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter)`
- `newInstance($value)`
- `newToken($value)`
- `newSplitParameterToken($name)`
- `newLiteralPart($value)`
- `newMimeLiteralPart($value)`
- `newCommentPart($value)`
- `newAddressPart($name, $email)`
- `newAddressGroupPart(array $addresses, $name = '')`
- `newDatePart($value)`
- `newParameterPart($name, $value, $language = null)`
- `newReceivedPart($name, $value)`
- `newReceivedDomainPart($name,
        $value,
        $ehloName = null,
        $hostName = null,
        $hostAddress = null)`

