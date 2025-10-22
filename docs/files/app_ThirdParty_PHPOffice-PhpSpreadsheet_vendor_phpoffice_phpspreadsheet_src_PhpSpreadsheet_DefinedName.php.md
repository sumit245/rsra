# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\DefinedName.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\DefinedName.php`
- Type: PHP
- Size: 6426 bytes

## Summary (from docblocks)

Name.
@var string

Worksheet on which the defined name can be resolved.
@var Worksheet

Value of the named object.
@var string

Is the defined named local? (i.e. can only be used on $this->worksheet).
@var bool

Scope.
@var Worksheet

Whether this is a named range or a named formula.
@var bool

Create a new Defined Name.

Create a new defined name, either a range or a formula.

Get name.

Set name.

Get worksheet.

Set worksheet.

Get range or formula value.

Set range or formula  value.

Get localOnly.

Set localOnly.

Get scope.

Set scope.

Identify whether this is a named range or a named formula.

Resolve a named range to a regular cell range or formula.

Implement PHP __clone to create a deep clone, not just a shallow copy.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\DefinedName.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\DefinedName`

**Functions/Methods**:
- `__construct(string $name,
        ?Worksheet $worksheet = null,
        ?string $value = null,
        bool $localOnly = false,
        ?Worksheet $scope = null)`
- `createInstance(string $name,
        ?Worksheet $worksheet = null,
        ?string $value = null,
        bool $localOnly = false,
        ?Worksheet $scope = null)`
- `testIfFormula(string $value)`
- `getName()`
- `setName(string $name)`
- `getWorksheet()`
- `setWorksheet(?Worksheet $worksheet)`
- `getValue()`
- `setValue(string $value)`
- `getLocalOnly()`
- `setLocalOnly(bool $localScope)`
- `getScope()`
- `setScope(?Worksheet $worksheet)`
- `isFormula()`
- `resolveName(string $definedName, Worksheet $worksheet, string $sheetName = '')`
- `__clone()`

