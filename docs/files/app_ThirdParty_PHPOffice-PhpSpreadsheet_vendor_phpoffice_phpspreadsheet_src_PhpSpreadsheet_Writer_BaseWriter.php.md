# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\BaseWriter.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\BaseWriter.php`
- Type: PHP
- Size: 3431 bytes

## Summary (from docblocks)

Write charts that are defined in the workbook?
Identifies whether the Writer should write definitions for any charts that exist in the PhpSpreadsheet object.
@var bool

Pre-calculate formulas
Forces PhpSpreadsheet to recalculate all formulae in a workbook when saving, so that the pre-calculated values are
immediately available to MS Excel or other office spreadsheet viewer when opening the file.
@var bool

Use disk caching where possible?
@var bool

Disk caching directory.
@var string

@var resource

@var bool

Open file handle.
@param resource|string $filename

Close file handle only if we opened it ourselves.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\BaseWriter.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\BaseWriter implements IWriter`

**Functions/Methods**:
- `getIncludeCharts()`
- `setIncludeCharts($includeCharts)`
- `getPreCalculateFormulas()`
- `setPreCalculateFormulas($precalculateFormulas)`
- `getUseDiskCaching()`
- `setUseDiskCaching($useDiskCache, $cacheDirectory = null)`
- `getDiskCachingDirectory()`
- `processFlags(int $flags)`
- `openFileHandle($filename)`
- `maybeCloseFileHandle()`

