# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MimePartFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MimePartFactory.php`
- Type: PHP
- Size: 2024 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Responsible for creating MimePart instances.
@author Zaahid Bateson

@var PartFilterFactory an instance used for creating MimePart objects

Initializes dependencies.
@param StreamFactory $sdf
@param PartStreamFilterManagerFactory $psf
@param PartFilterFactory $pf

Constructs a new MimePart object and returns it

@param PartBuilder $partBuilder
@param StreamInterface $messageStream
@return \ZBateson\MailMimeParser\Message\Part\MimePart

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\MimePartFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\Factory\MimePartFactory extends MessagePartFactory`

**Functions/Methods**:
- `__construct(StreamFactory $sdf,
        PartStreamFilterManagerFactory $psf,
        PartFilterFactory $pf)`
- `newInstance(PartBuilder $partBuilder, StreamInterface $messageStream = null)`

