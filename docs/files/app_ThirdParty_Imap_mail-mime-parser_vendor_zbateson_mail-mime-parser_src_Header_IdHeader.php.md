# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\IdHeader.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\IdHeader.php`
- Type: PHP
- Size: 1273 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Represents a Content-ID, Message-ID, In-Reply-To or References header.
For a multi-id header like In-Reply-To or References, all IDs can be
retrieved by calling ``` getIds() ```.  Otherwise, to retrieve the first (or
only) ID call ``` getValue() ```.

@author Zaahid Bateson

Returns an IdBaseConsumer.
@param ConsumerService $consumerService
@return \ZBateson\MailMimeParser\Header\Consumer\AbstractConsumer

Synonym for getValue().
@return string|null

Returns all IDs parsed for a multi-id header like References or
In-Reply-To.

@return string[]

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\IdHeader.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\IdHeader extends MimeEncodedHeader`

**Functions/Methods**:
- `getConsumer(ConsumerService $consumerService)`
- `getId()`
- `getIds()`

