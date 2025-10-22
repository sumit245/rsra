# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\ReceivedDateConsumer.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\ReceivedDateConsumer.php`
- Type: PHP
- Size: 970 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Parses the date portion of a Received header into a DatePart.
The only difference between DateConsumer and ReceivedDateConsumer is the
addition of a start token, ';', and a token separator (also ';').
@author Zaahid Bateson

Returns true if the token is a ';'

@param string $token
@return boolean

Returns an array containing ';'.
@return string[] an array of regex pattern matchers

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Consumer\Received\ReceivedDateConsumer.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Consumer\Received\ReceivedDateConsumer extends DateConsumer`

**Functions/Methods**:
- `isStartToken($token)`
- `getTokenSeparators()`

