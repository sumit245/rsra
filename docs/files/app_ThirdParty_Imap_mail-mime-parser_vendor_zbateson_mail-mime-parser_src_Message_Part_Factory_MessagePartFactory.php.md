# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MessagePartFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MessagePartFactory.php`
- Type: PHP
- Size: 3496 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Abstract factory for subclasses of MessagePart.
@author Zaahid Bateson

@var PartStreamFilterManagerFactory responsible for creating
     PartStreamFilterManager instances

@var StreamFactory the StreamFactory instance

@var MessagePartFactory[] cached instances of MessagePartFactory
     sub-classes

Initializes class dependencies.
@param StreamFactory $streamFactory
@param PartStreamFilterManagerFactory $psf

Sets a cached singleton instance.
@param MessagePartFactory $instance

Returns a cached singleton instance if one exists, or null if one hasn't
been created yet.
@return MessagePartFactory

Returns the singleton instance for the class.
@param StreamFactory $sdf
@param PartStreamFilterManagerFactory $psf
@param PartFilterFactory $pf
@param MessageHelperService $mhs
@return MessagePartFactory

Constructs a new MessagePart object and returns it

@param PartBuilder $partBuilder
@param StreamInterface $messageStream
@return \ZBateson\MailMimeParser\Message\Part\MessagePart

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MessagePartFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\Factory\MessagePartFactory`
- `ZBateson\MailMimeParser\Message\Part\Factory\dependencies`

**Functions/Methods**:
- `__construct(StreamFactory $streamFactory,
        PartStreamFilterManagerFactory $psf)`
- `setCachedInstance(MessagePartFactory $instance)`
- `getCachedInstance()`
- `getInstance(StreamFactory $sdf,
        PartStreamFilterManagerFactory $psf,
        PartFilterFactory $pf = null,
        MessageHelperService $mhs = null)`
- `newInstance(PartBuilder $partBuilder, StreamInterface $messageStream = null)`

