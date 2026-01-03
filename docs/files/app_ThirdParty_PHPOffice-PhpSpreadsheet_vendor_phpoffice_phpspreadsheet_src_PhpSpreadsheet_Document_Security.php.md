# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Security.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Security.php`
- Type: PHP
- Size: 3076 bytes

## Summary (from docblocks)

LockRevision.
@var bool

LockStructure.
@var bool

LockWindows.
@var bool

RevisionsPassword.
@var string

WorkbookPassword.
@var string

Create a new Document Security instance.

Is some sort of document security enabled?

Set RevisionsPassword.
@param string $password
@param bool $alreadyHashed If the password has already been hashed, set this to true
@return $this

Set WorkbookPassword.
@param string $password
@param bool $alreadyHashed If the password has already been hashed, set this to true
@return $this

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Security.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Document\Security`

**Functions/Methods**:
- `__construct()`
- `isSecurityEnabled()`
- `getLockRevision()`
- `setLockRevision(?bool $locked)`
- `getLockStructure()`
- `setLockStructure(?bool $locked)`
- `getLockWindows()`
- `setLockWindows(?bool $locked)`
- `getRevisionsPassword()`
- `setRevisionsPassword(?string $password, bool $alreadyHashed = false)`
- `getWorkbookPassword()`
- `setWorkbookPassword(?string $password, bool $alreadyHashed = false)`

