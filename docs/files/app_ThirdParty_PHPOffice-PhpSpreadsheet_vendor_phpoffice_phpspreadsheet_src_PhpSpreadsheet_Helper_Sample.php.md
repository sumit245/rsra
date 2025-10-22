# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Helper\Sample.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Helper\Sample.php`
- Type: PHP
- Size: 6213 bytes

## Summary (from docblocks)

Helper class to be used in sample code.

Returns whether we run on CLI or browser.
@return bool

Return the filename currently being executed.
@return string

Whether we are executing the index page.
@return bool

Return the page title.
@return string

Return the page heading.
@return string

Returns an array of all known samples.
@return string[][] [$name => $path]

Write documents.
@param string $filename
@param string[] $writers

Returns the temporary directory and make sure it exists.
@return string

Returns the filename that should be used for sample output.
@param string $filename
@param string $extension
@return string

Return a random temporary file name.
@param string $extension
@return string

Log ending notes.

Log a line about the write operation.
@param string $path
@param float $callStartTime

Log a line about the read operation.
@param string $format
@param string $path
@param float $callStartTime

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Helper\Sample.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Helper\to`
- `PhpOffice\PhpSpreadsheet\Helper\Sample`

**Functions/Methods**:
- `isCli()`
- `getScriptFilename()`
- `isIndex()`
- `getPageTitle()`
- `getPageHeading()`
- `getSamples()`
- `write(Spreadsheet $spreadsheet, $filename, array $writers = ['Xlsx', 'Xls'])`
- `isDirOrMkdir(string $folder)`
- `getTemporaryFolder()`
- `getFilename($filename, $extension = 'xlsx')`
- `getTemporaryFilename($extension = 'xlsx')`
- `log($message)`
- `logEndingNotes()`
- `logWrite(IWriter $writer, $path, $callStartTime)`
- `logRead($format, $path, $callStartTime)`

