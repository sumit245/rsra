# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\CyclicReferenceStack.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\CyclicReferenceStack.php`
- Type: PHP
- Size: 1256 bytes

## Summary (from docblocks)

The call stack for calculated cells.
@var mixed[]

Return the number of entries on the stack.
@return int

Push a new entry onto the stack.
@param mixed $value

Pop the last entry from the stack.
@return mixed

Test to see if a specified entry exists on the stack.
@param mixed $value The value to test
@return bool

Clear the stack.

Return an array of all entries on the stack.
@return mixed[]

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\CyclicReferenceStack.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engine\CyclicReferenceStack`

**Functions/Methods**:
- `count()`
- `push($value)`
- `pop()`
- `onStack($value)`
- `clear()`
- `showStack()`

