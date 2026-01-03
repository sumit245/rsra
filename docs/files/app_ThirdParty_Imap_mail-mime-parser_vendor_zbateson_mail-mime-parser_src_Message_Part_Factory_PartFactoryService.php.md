# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartFactoryService.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartFactoryService.php`
- Type: PHP
- Size: 3195 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Responsible for creating singleton instances of MessagePartFactory and its
subclasses.
@author Zaahid Bateson

@var PartFilterFactory the PartFilterFactory instance

@var PartStreamFilterManagerFactory the PartStreamFilterManagerFactory
     instance

@var StreamFactory the StreamFactory instance

@var MessageHelperService the MessageHelperService instance

@param PartFilterFactory $partFilterFactory
@param StreamFactory $streamFactory
@param PartStreamFilterManagerFactory $partStreamFilterManagerFactory
@param MessageHelperService $messageHelperService

Returns the MessageFactory singleton instance.

@return MessageFactory

Returns the MimePartFactory singleton instance.

@return MimePartFactory

Returns the NonMimePartFactory singleton instance.

@return NonMimePartFactory

Returns the UUEncodedPartFactory singleton instance.

@return UUEncodedPartFactory

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartFactoryService.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\Factory\PartFactoryService`

**Functions/Methods**:
- `__construct(PartFilterFactory $partFilterFactory,
        StreamFactory $streamFactory,
        PartStreamFilterManagerFactory $partStreamFilterManagerFactory,
        MessageHelperService $messageHelperService)`
- `getMessageFactory()`
- `getMimePartFactory()`
- `getNonMimePartFactory()`
- `getUUEncodedPartFactory()`

