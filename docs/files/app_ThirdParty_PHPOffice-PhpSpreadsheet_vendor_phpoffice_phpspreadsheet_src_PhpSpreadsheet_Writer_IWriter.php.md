# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\IWriter.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\IWriter.php`
- Type: PHP
- Size: 2786 bytes

## Summary (from docblocks)

IWriter constructor.
@param Spreadsheet $spreadsheet The spreadsheet that we want to save using this Writer

Write charts in workbook?
       If this is true, then the Writer will write definitions for any charts that exist in the PhpSpreadsheet object.
       If false (the default) it will ignore any charts defined in the PhpSpreadsheet object.
@return bool

Set write charts in workbook
       Set to true, to advise the Writer to include any charts that exist in the PhpSpreadsheet object.
       Set to false (the default) to ignore charts.
@param bool $includeCharts
@return IWriter

Get Pre-Calculate Formulas flag
    If this is true (the default), then the writer will recalculate all formulae in a workbook when saving,
       so that the pre-calculated values are immediately available to MS Excel or other office spreadsheet
       viewer when opening the file
    If false, then formulae are not calculated on save. This is faster for saving in PhpSpreadsheet, but slower
       when opening the resulting file in MS Excel, because Excel has to recalculate the formulae itself.
@return bool

Set Pre-Calculate Formulas
       Set to true (the default) to advise the Writer to calculate all formulae on save
       Set to false to prevent precalculation of formulae on save.
@param bool $precalculateFormulas Pre-Calculate Formulas?
@return IWriter

Save PhpSpreadsheet to file.
@param resource|string $filename Name of the file to save

Get use disk caching where possible?
@return bool

Set use disk caching where possible?
@param bool $useDiskCache
@param string $cacheDirectory Disk caching directory
@return IWriter

Get disk caching directory.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\IWriter.php`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `getIncludeCharts()`
- `setIncludeCharts($includeCharts)`
- `getPreCalculateFormulas()`
- `setPreCalculateFormulas($precalculateFormulas)`
- `save($filename, int $flags = 0)`
- `getUseDiskCaching()`
- `setUseDiskCaching($useDiskCache, $cacheDirectory = null)`
- `getDiskCachingDirectory()`

