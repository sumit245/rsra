# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractDate.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractDate.php`
- Type: PHP
- Size: 1152 bytes

## Summary (from docblocks)

Represents a date condition.

Format for dates to be sent to the IMAP server.
@var string

The date to be used for the condition.
@var DateTimeInterface

Constructor.
@param DateTimeInterface $date optional date for the condition

Converts the condition to a string that can be sent to the IMAP server.
@return string

Returns the keyword that the condition represents.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\AbstractDate.php`

**Classes**:
- `Ddeboer\Imap\Search\AbstractDate implements ConditionInterface`

**Functions/Methods**:
- `__construct(DateTimeInterface $date, string $dateFormat = 'j-M-Y')`
- `toString()`
- `getKeyword()`

