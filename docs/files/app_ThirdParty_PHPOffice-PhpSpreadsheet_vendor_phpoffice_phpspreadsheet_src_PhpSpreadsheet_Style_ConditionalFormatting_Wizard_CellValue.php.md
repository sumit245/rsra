# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\Wizard\CellValue.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\Wizard\CellValue.php`
- Type: PHP
- Size: 7146 bytes

## Summary (from docblocks)

@method CellValue equals($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue notEquals($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue greaterThan($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue greaterThanOrEqual($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue lessThan($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue lessThanOrEqual($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue between($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue notBetween($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)
@method CellValue and($value, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)

@var string

@var array

@var string[]

@param mixed $operand

@param mixed $value
@return float|int|string

@param string $methodName
@param mixed[] $arguments

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\Wizard\CellValue.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\Wizard\CellValue extends WizardAbstract implements WizardInterface`

**Functions/Methods**:
- `__construct(string $cellRange)`
- `operator(string $operator)`
- `operand(int $index, $operand, string $operandValueType = Wizard::VALUE_TYPE_LITERAL)`
- `wrapValue($value, string $operandValueType)`
- `getConditional()`
- `unwrapString(string $condition)`
- `fromConditional(Conditional $conditional, string $cellRange = 'A1')`
- `__call($methodName, $arguments)`

