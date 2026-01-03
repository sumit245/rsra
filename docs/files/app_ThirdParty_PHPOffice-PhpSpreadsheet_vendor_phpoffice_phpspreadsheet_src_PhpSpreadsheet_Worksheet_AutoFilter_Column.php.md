# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column.php`
- Type: PHP
- Size: 9534 bytes

## Summary (from docblocks)

Types of autofilter rules.
@var string[]

Join options for autofilter rules.
@var string[]

Autofilter.
@var null|AutoFilter

Autofilter Column Index.
@var string

Autofilter Column Filter Type.
@var string

Autofilter Multiple Rules And/Or.
@var string

Autofilter Column Rules.
@var Column\Rule[]

Autofilter Column Dynamic Attributes.
@var mixed[]

Create a new Column.
@param string $column Column (e.g. A)
@param AutoFilter $parent Autofilter for this column

Get AutoFilter column index as string eg: 'A'.
@return string

Set AutoFilter column index as string eg: 'A'.
@param string $column Column (e.g. A)
@return $this

Get this Column's AutoFilter Parent.
@return null|AutoFilter

Set this Column's AutoFilter Parent.
@return $this

Get AutoFilter Type.
@return string

Set AutoFilter Type.
@param string $filterType
@return $this

Get AutoFilter Multiple Rules And/Or Join.
@return string

Set AutoFilter Multiple Rules And/Or.
@param string $join And/Or
@return $this

Set AutoFilter Attributes.
@param mixed[] $attributes
@return $this

Set An AutoFilter Attribute.
@param string $name Attribute Name
@param int|string $value Attribute Value
@return $this

Get AutoFilter Column Attributes.
@return int[]|string[]

Get specific AutoFilter Column Attribute.
@param string $name Attribute Name
@return null|int|string

Get all AutoFilter Column Rules.
@return Column\Rule[]

Get a specified AutoFilter Column Rule.
@param int $index Rule index in the ruleset array
@return Column\Rule

Create a new AutoFilter Column Rule in the ruleset.
@return Column\Rule

Add a new AutoFilter Column Rule to the ruleset.
@return $this

Delete a specified AutoFilter Column Rule
If the number of rules is reduced to 1, then we reset And/Or logic to Or.
@param int $index Rule index in the ruleset array
@return $this

Delete all AutoFilter Column Rules.
@return $this

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `criteria`
- `options`
- `And`
- `autofilter`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\AutoFilter\Column.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column`

**Functions/Methods**:
- `__construct($column, ?AutoFilter $parent = null)`
- `setEvaluatedFalse()`
- `getColumnIndex()`
- `setColumnIndex($column)`
- `getParent()`
- `setParent(?AutoFilter $parent = null)`
- `getFilterType()`
- `setFilterType($filterType)`
- `getJoin()`
- `setJoin($join)`
- `setAttributes($attributes)`
- `setAttribute($name, $value)`
- `getAttributes()`
- `getAttribute($name)`
- `ruleCount()`
- `getRules()`
- `getRule($index)`
- `createRule()`
- `addRule(Column\Rule $rule)`
- `deleteRule($index)`
- `clearRules()`
- `__clone()`

