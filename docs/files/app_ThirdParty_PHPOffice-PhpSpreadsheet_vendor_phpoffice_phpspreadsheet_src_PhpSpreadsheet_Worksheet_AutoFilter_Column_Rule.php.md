# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column\Rule.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column\Rule.php`
- Type: PHP
- Size: 14938 bytes

## Summary (from docblocks)

Autofilter Column.
@var ?Column

Autofilter Rule Type.
@var string

Autofilter Rule Value.
@var int|int[]|string|string[]

Autofilter Rule Operator.
@var string

DateTimeGrouping Group Value.
@var string

Create a new Rule.

Get AutoFilter Rule Type.
@return string

Set AutoFilter Rule Type.
@param string $ruleType see self::AUTOFILTER_RULETYPE_*
@return $this

Get AutoFilter Rule Value.
@return int|int[]|string|string[]

Set AutoFilter Rule Value.
@param int|int[]|string|string[] $value
@return $this

Get AutoFilter Rule Operator.
@return string

Set AutoFilter Rule Operator.
@param string $operator see self::AUTOFILTER_COLUMN_RULE_*
@return $this

Get AutoFilter Rule Grouping.
@return string

Set AutoFilter Rule Grouping.
@param string $grouping
@return $this

Set AutoFilter Rule.
@param string $operator see self::AUTOFILTER_COLUMN_RULE_*
@param int|int[]|string|string[] $value
@param string $grouping
@return $this

Get this Rule's AutoFilter Column Parent.
@return ?Column

Set this Rule's AutoFilter Column Parent.
@return $this

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `the`
- `autofilter`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column\Rule.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column\Rule`

**Functions/Methods**:
- `__construct(?Column $parent = null)`
- `setEvaluatedFalse()`
- `getRuleType()`
- `setRuleType($ruleType)`
- `getValue()`
- `setValue($value)`
- `getOperator()`
- `setOperator($operator)`
- `getGrouping()`
- `setGrouping($grouping)`
- `setRule($operator, $value, $grouping = null)`
- `getParent()`
- `setParent(?Column $parent = null)`
- `__clone()`

