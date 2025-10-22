# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Container.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Container.php`
- Type: PHP
- Size: 7770 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Dependency injection container for use by ZBateson\MailMimeParser - because a
more complex one seems like overkill.

Constructs objects and whatever dependencies they require.
@author Zaahid Bateson

@var PartBuilderFactory The PartBuilderFactory instance

@var PartFactoryService The PartFactoryService instance

@var PartFilterFactory The PartFilterFactory instance

@var PartStreamFilterManagerFactory The PartStreamFilterManagerFactory
     instance

@var \ZBateson\MailMimeParser\Header\HeaderFactory singleton 'service'
instance

@var \ZBateson\MailMimeParser\Header\Part\HeaderPartFactory singleton
'service' instance

@var \ZBateson\MailMimeParser\Header\Part\MimeLiteralPartFactory
singleton 'service' instance

@var \ZBateson\MailMimeParser\Header\Consumer\ConsumerService singleton
'service' instance

@var MessageHelperService Used to get MessageHelper singletons

@var StreamFactory

Constructs a Container - call singleton() to invoke

Returns a singleton 'service' instance for the given service named $var
with a class type of $class.

@param string $var the name of the service
@param string $class the name of the class
@return mixed the service object

Constructs and returns a new MessageParser object.

@return \ZBateson\MailMimeParser\Message\MessageParser

Returns a MessageHelperService instance.

@return MessageHelperService

Returns a PartFilterFactory instance
@return PartFilterFactory

Returns a PartFactoryService singleton.

@return PartFactoryService

Returns a PartBuilderFactory instance.

@return PartBuilderFactory

Returns the header factory service instance.

@return \ZBateson\MailMimeParser\Header\HeaderFactory

Returns a StreamFactory.
@return StreamFactory

Returns a PartStreamFilterManagerFactory.

@return PartStreamFilterManagerFactory

Returns a MbWrapper.

@return MbWrapper

Returns the part factory service

@return \ZBateson\MailMimeParser\Header\Part\HeaderPartFactory

Returns the MimeLiteralPartFactory service

@return \ZBateson\MailMimeParser\Header\Part\MimeLiteralPartFactory

Returns the header consumer service

@return \ZBateson\MailMimeParser\Header\Consumer\ConsumerService

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Container.php`

**Classes**:
- `ZBateson\MailMimeParser\Container`
- `ZBateson\MailMimeParser\type`
- `ZBateson\MailMimeParser\the`

**Functions/Methods**:
- `__construct()`
- `getInstance($var, $class)`
- `newMessageParser()`
- `getMessageHelperService()`
- `getPartFilterFactory()`
- `getPartFactoryService()`
- `getPartBuilderFactory()`
- `getHeaderFactory()`
- `getStreamFactory()`
- `getPartStreamFilterManagerFactory()`
- `getCharsetConverter()`
- `getHeaderPartFactory()`
- `getMimeLiteralPartFactory()`
- `getConsumerService()`

