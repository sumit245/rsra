# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartBuilderFactory.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartBuilderFactory.php`
- Type: PHP
- Size: 1454 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Responsible for creating PartBuilder instances.

The PartBuilder instance must be constructed with a MessagePartFactory
instance to construct a MessagePart sub-class after parsing a message into
PartBuilder instances.
@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\HeaderFactory the HeaderFactory
     instance

Initializes dependencies

@param HeaderFactory $headerFactory

Constructs a new PartBuilder object and returns it

@param \ZBateson\MailMimeParser\Message\Part\Factory\MessagePartFactory
       $messagePartFactory 
@return \ZBateson\MailMimeParser\Message\Part\PartBuilder

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\Factory\PartBuilderFactory.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\Factory\after`
- `ZBateson\MailMimeParser\Message\Part\Factory\PartBuilderFactory`

**Functions/Methods**:
- `__construct(HeaderFactory $headerFactory)`
- `newPartBuilder(MessagePartFactory $messagePartFactory)`

