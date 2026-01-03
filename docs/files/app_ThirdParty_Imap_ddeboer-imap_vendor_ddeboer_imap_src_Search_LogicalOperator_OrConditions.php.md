# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\LogicalOperator\OrConditions.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\LogicalOperator\OrConditions.php`
- Type: PHP
- Size: 1251 bytes

## Summary (from docblocks)

Represents an OR operator. Messages only need to match one of the conditions
after this operator to match the expression.

The conditions that together represent the expression.
@var array

Adds a new condition to the expression.
@param ConditionInterface $condition the condition to be added

Returns the keyword that the condition represents.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Search\LogicalOperator\OrConditions.php`

**Classes**:
- `Ddeboer\Imap\Search\LogicalOperator\OrConditions implements ConditionInterface`

**Functions/Methods**:
- `__construct(array $conditions)`
- `addCondition(ConditionInterface $condition)`
- `toString()`

