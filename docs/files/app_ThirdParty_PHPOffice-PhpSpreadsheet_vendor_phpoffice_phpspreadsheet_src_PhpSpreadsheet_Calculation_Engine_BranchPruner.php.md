# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\BranchPruner.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\BranchPruner.php`
- Type: PHP
- Size: 6314 bytes

## Summary (from docblocks)

@var bool

Used to generate unique store keys.
@var int

currently pending storeKey (last item of the storeKeysStack.
@var ?string

@var string[]

@var bool[]

@var bool[]

@var bool[]

@var int[]

@var null|string

@var null|string

@var null|string

@var null|string

@param mixed $value

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engine\BranchPruner.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engine\BranchPruner`

**Functions/Methods**:
- `__construct(bool $branchPruningEnabled)`
- `clearBranchStore()`
- `initialiseForLoop()`
- `initialiseCondition()`
- `initialiseThen()`
- `initialiseElse()`
- `decrementDepth()`
- `incrementDepth()`
- `functionCall(string $functionName)`
- `argumentSeparator()`
- `closingBrace($value)`
- `currentCondition()`
- `currentOnlyIf()`
- `currentOnlyIfNot()`
- `getUnusedBranchStoreKey()`

