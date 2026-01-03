# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\SearchExpression.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\SearchExpression.php`
- Type: PHP
- Size: 1068 bytes

## Summary (from docblocks)

Defines a search expression that can be used to look up email messages.

The conditions that together represent the expression.
@var array

Adds a new condition to the expression.
@param ConditionInterface $condition the condition to be added
@return self

Converts the expression to a string that can be sent to the IMAP server.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\SearchExpression.php`

**Classes**:
- `Ddeboer\Imap\SearchExpression implements ConditionInterface`

**Functions/Methods**:
- `addCondition(ConditionInterface $condition)`
- `toString()`

