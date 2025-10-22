# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Token\Stack.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Token\Stack.php`
- Type: PHP
- Size: 3049 bytes

## Summary (from docblocks)

@var BranchPruner

The parser stack for formulae.
@var mixed[]

Count of entries in the parser stack.
@var int

Return the number of entries on the stack.

Push a new entry onto the stack.
@param mixed $value

@param mixed $value

Pop the last entry from the stack.

Return an entry from the stack without removing it.

Clear the stack.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Token\Stack.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Token\Stack`

**Functions/Methods**:
- `__construct(BranchPruner $branchPruner)`
- `count()`
- `push(string $type, $value, ?string $reference = null)`
- `pushStackItem(array $stackItem)`
- `getStackItem(string $type, $value, ?string $reference = null)`
- `pop()`
- `last(int $n = 1)`
- `clear()`

