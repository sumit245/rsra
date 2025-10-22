# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractText.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractText.php`
- Type: PHP
- Size: 929 bytes

## Summary (from docblocks)

Represents a text based condition. Text based conditions use a contains
restriction.

Text to be used for the condition.
@var string

Constructor.
@param string $text optional text for the condition

Converts the condition to a string that can be sent to the IMAP server.
@return string

Returns the keyword that the condition represents.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractText.php`

**Classes**:
- `Ddeboer\Imap\Search\AbstractText implements ConditionInterface`

**Functions/Methods**:
- `__construct(string $text)`
- `toString()`
- `getKeyword()`

