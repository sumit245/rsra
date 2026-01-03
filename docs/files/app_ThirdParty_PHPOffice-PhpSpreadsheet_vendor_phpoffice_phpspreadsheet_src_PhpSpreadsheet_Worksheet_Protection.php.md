# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Protection.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Protection.php`
- Type: PHP
- Size: 11913 bytes

## Summary (from docblocks)

Sheet.
@var bool

Objects.
@var bool

Scenarios.
@var bool

Format cells.
@var bool

Format columns.
@var bool

Format rows.
@var bool

Insert columns.
@var bool

Insert rows.
@var bool

Insert hyperlinks.
@var bool

Delete columns.
@var bool

Delete rows.
@var bool

Select locked cells.
@var bool

Sort.
@var bool

AutoFilter.
@var bool

Pivot tables.
@var bool

Select unlocked cells.
@var bool

Hashed password.
@var string

Algorithm name.
@var string

Salt value.
@var string

Spin count.
@var int

Create a new Protection.

Is some sort of protection enabled?
@return bool

Get Sheet.
@return bool

Set Sheet.
@param bool $sheet
@return $this

Get Objects.
@return bool

Set Objects.
@param bool $objects
@return $this

Get Scenarios.
@return bool

Set Scenarios.
@param bool $scenarios
@return $this

Get FormatCells.
@return bool

Set FormatCells.
@param bool $formatCells
@return $this

Get FormatColumns.
@return bool

Set FormatColumns.
@param bool $formatColumns
@return $this

Get FormatRows.
@return bool

Set FormatRows.
@param bool $formatRows
@return $this

Get InsertColumns.
@return bool

Set InsertColumns.
@param bool $insertColumns
@return $this

Get InsertRows.
@return bool

Set InsertRows.
@param bool $insertRows
@return $this

Get InsertHyperlinks.
@return bool

Set InsertHyperlinks.
@param bool $insertHyperLinks
@return $this

Get DeleteColumns.
@return bool

Set DeleteColumns.
@param bool $deleteColumns
@return $this

Get DeleteRows.
@return bool

Set DeleteRows.
@param bool $deleteRows
@return $this

Get SelectLockedCells.
@return bool

Set SelectLockedCells.
@param bool $selectLockedCells
@return $this

Get Sort.
@return bool

Set Sort.
@param bool $sort
@return $this

Get AutoFilter.
@return bool

Set AutoFilter.
@param bool $autoFilter
@return $this

Get PivotTables.
@return bool

Set PivotTables.
@param bool $pivotTables
@return $this

Get SelectUnlockedCells.
@return bool

Set SelectUnlockedCells.
@param bool $selectUnlockedCells
@return $this

Get hashed password.
@return string

Set Password.
@param string $password
@param bool $alreadyHashed If the password has already been hashed, set this to true
@return $this

Create a pseudorandom string.

Get algorithm name.

Set algorithm name.

Get salt value.

Set salt value.

Get spin count.

Set spin count.

Verify that the given non-hashed password can "unlock" the protection.

Implement PHP __clone to create a deep clone, not just a shallow copy.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Worksheet\Protection.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Worksheet\Protection`

**Functions/Methods**:
- `__construct()`
- `isProtectionEnabled()`
- `getSheet()`
- `setSheet($sheet)`
- `getObjects()`
- `setObjects($objects)`
- `getScenarios()`
- `setScenarios($scenarios)`
- `getFormatCells()`
- `setFormatCells($formatCells)`
- `getFormatColumns()`
- `setFormatColumns($formatColumns)`
- `getFormatRows()`
- `setFormatRows($formatRows)`
- `getInsertColumns()`
- `setInsertColumns($insertColumns)`
- `getInsertRows()`
- `setInsertRows($insertRows)`
- `getInsertHyperlinks()`
- `setInsertHyperlinks($insertHyperLinks)`
- `getDeleteColumns()`
- `setDeleteColumns($deleteColumns)`
- `getDeleteRows()`
- `setDeleteRows($deleteRows)`
- `getSelectLockedCells()`
- `setSelectLockedCells($selectLockedCells)`
- `getSort()`
- `setSort($sort)`
- `getAutoFilter()`
- `setAutoFilter($autoFilter)`
- `getPivotTables()`
- `setPivotTables($pivotTables)`
- `getSelectUnlockedCells()`
- `setSelectUnlockedCells($selectUnlockedCells)`
- `getPassword()`
- `setPassword($password, $alreadyHashed = false)`
- `generateSalt()`
- `getAlgorithm()`
- `setAlgorithm(string $algorithm)`
- `getSalt()`
- `setSalt(string $salt)`
- `getSpinCount()`
- `setSpinCount(int $spinCount)`
- `verify(string $password)`
- `__clone()`

