# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Conditional.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Conditional.php`
- Type: PHP
- Size: 7411 bytes

## Summary (from docblocks)

Condition type.
@var string

Operator type.
@var string

Text.
@var string

Stop on this condition, if it matches.
@var bool

Condition.
@var (bool|float|int|string)[]

@var ConditionalDataBar

Style.
@var Style

Create a new Conditional.

Get Condition type.
@return string

Set Condition type.
@param string $type Condition type, see self::CONDITION_*
@return $this

Get Operator type.
@return string

Set Operator type.
@param string $type Conditional operator type, see self::OPERATOR_*
@return $this

Get text.
@return string

Set text.
@param string $text
@return $this

Get StopIfTrue.
@return bool

Set StopIfTrue.
@param bool $stopIfTrue
@return $this

Get Conditions.
@return (bool|float|int|string)[]

Set Conditions.
@param bool|float|int|string|(bool|float|int|string)[] $conditions Condition
@return $this

Add Condition.
@param bool|float|int|string $condition Condition
@return $this

Get Style.
@return Style

Set Style.
@return $this

get DataBar.
@return null|ConditionalDataBar

set DataBar.
@return $this

Get hash code.
@return string Hash code

Implement PHP __clone to create a deep clone, not just a shallow copy.

Verify if param is valid condition type.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Conditional.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Conditional implements IComparable`

**Functions/Methods**:
- `__construct()`
- `getConditionType()`
- `setConditionType($type)`
- `getOperatorType()`
- `setOperatorType($type)`
- `getText()`
- `setText($text)`
- `getStopIfTrue()`
- `setStopIfTrue($stopIfTrue)`
- `getConditions()`
- `setConditions($conditions)`
- `addCondition($condition)`
- `getStyle()`
- `setStyle(Style $style)`
- `getDataBar()`
- `setDataBar(ConditionalDataBar $dataBar)`
- `getHashCode()`
- `__clone()`
- `isValidConditionType(string $type)`

