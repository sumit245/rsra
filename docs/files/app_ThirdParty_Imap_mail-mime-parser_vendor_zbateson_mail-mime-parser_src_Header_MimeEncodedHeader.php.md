# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\MimeEncodedHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\MimeEncodedHeader.php`
- Type: PHP
- Size: 1921 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Allows a header to be mime-encoded and be decoded with a consumer after
decoding.
The entire header's value must only consist of mime-encoded parts for this to
apply.

@author Zaahid Bateson

@var \ZBateson\MailMimeParser\Header\Part\MimeLiteralPartFactory for
mime decoding.

Includes
@param ConsumerService $consumerService
@param string $name
@param string $value

Mime-decodes the raw value if the whole raw value only consists of mime-
encoded parts and whitespace prior to invoking the passed consumer.
@param AbstractConsumer $consumer

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\MimeEncodedHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\MimeEncodedHeader extends AbstractHeader`

**Functions/Methods**:
- `__construct(MimeLiteralPartFactory $mimeLiteralPartFactory,
        ConsumerService $consumerService,
        $name,
        $value)`
- `setParseHeaderValue(AbstractConsumer $consumer)`

