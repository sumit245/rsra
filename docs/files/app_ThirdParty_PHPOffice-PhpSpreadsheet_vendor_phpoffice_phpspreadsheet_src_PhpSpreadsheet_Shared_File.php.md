# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\File.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\File.php`
- Type: PHP
- Size: 5624 bytes

## Summary (from docblocks)

Use Temp or File Upload Temp for temporary files.
@var bool

Set the flag indicating whether the File Upload Temp directory should be used for temporary files.

Get the flag indicating whether the File Upload Temp directory should be used for temporary files.

Verify if a file exists.

Returns canonicalized absolute pathname, also for ZIP archives.

Get the systems temporary directory.

Assert that given path is an existing file and is readable, otherwise throw exception.

Same as assertFile, except return true/false and don't throw Exception.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\File.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\File`

**Functions/Methods**:
- `setUseUploadTempDirectory(bool $useUploadTempDir)`
- `getUseUploadTempDirectory()`
- `validateZipFirst4(string $zipFile)`
- `fileExists(string $filename)`
- `realpath(string $filename)`
- `sysGetTempDir()`
- `temporaryFilename()`
- `assertFile(string $filename, string $zipMember = '')`
- `testFileNoThrow(string $filename, ?string $zipMember = null)`

