# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageFactory.php`
- Type: PHP
- Size: 2160 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Responsible for creating Message instances.
@author Zaahid Bateson

@var MessageHelperService helper class for message manipulation routines.

Constructor

@param StreamFactory $sdf
@param PartStreamFilterManagerFactory $psf
@param PartFilterFactory $pf
@param MessageHelperService $mhs

Constructs a new Message object and returns it
@param PartBuilder $partBuilder
@param StreamInterface $stream
@return \ZBateson\MailMimeParser\Message\Part\MimePart

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\MessageFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\MessageFactory extends MimePartFactory`
- `ZBateson\MailMimeParser\Message\for`

**Functions/Methods**:
- `__construct(StreamFactory $sdf,
        PartStreamFilterManagerFactory $psf,
        PartFilterFactory $pf,
        MessageHelperService $mhs)`
- `newInstance(PartBuilder $partBuilder, StreamInterface $stream = null)`

