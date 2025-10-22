# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Multiplication.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Multiplication.php`
- Type: PHP
- Size: 2916 bytes

## Summary (from docblocks)

Execute the multiplication
@param mixed $value The matrix or numeric value to multiply the current base value by
@throws Exception If the provided argument is not appropriate for the operation
@return $this The operation object, allowing multiple multiplications to be chained

Execute the multiplication for a scalar
@param mixed $value The numeric value to multiply with the current base value
@return $this The operation object, allowing multiple mutiplications to be chained

Execute the multiplication for a matrix
@param Matrix $value The numeric value to multiply with the current base value
@return $this The operation object, allowing multiple mutiplications to be chained
@throws Exception If the provided argument is not appropriate for the operation

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\matrix\classes\src\Operators\Multiplication.php`

**Classes**:
- `Matrix\Operators\Multiplication extends Operator`

**Functions/Methods**:
- `execute($value, string $type = 'multiplication')`
- `multiplyScalar($value, string $type = 'multiplication')`
- `multiplyMatrix(Matrix $value, string $type = 'multiplication')`

