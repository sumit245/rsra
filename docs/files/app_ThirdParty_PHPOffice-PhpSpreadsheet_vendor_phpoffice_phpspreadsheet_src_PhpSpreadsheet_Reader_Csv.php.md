# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Csv.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Csv.php`
- Type: PHP
- Size: 17624 bytes

## Summary (from docblocks)

Input encoding.
@var string

Fallback encoding if guess strikes out.
@var string

Delimiter.
@var ?string

Enclosure.
@var string

Sheet index to read.
@var int

Load rows contiguously.
@var bool

The character that can escape the enclosure.
@var string

Callback for setting defaults in construction.
@var ?callable

Attempt autodetect line endings (deprecated after PHP8.1)?
@var bool

@var bool

@var bool

Create a new CSV Reader instance.

Set a callback to change the defaults.
The callback must accept the Csv Reader object as the first parameter,
and it should return void.

Move filepointer past any BOM marker.

Identify any separator that is explicitly set in the file.

Infer the separator if it isn't explicitly set in the file or specified by the user.

Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns).

Loads Spreadsheet from file.

Loads PhpSpreadsheet from file into PhpSpreadsheet instance.

Convert string true/false to boolean, and null to null-string.
@param mixed $rowDatum

Convert numeric strings to int or float values.
@param mixed $rowDatum

Can the current IReader read the file?

## References

**Database Tables (inferred)**
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Csv.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Csv extends BaseReader`

**Functions/Methods**:
- `__construct()`
- `setConstructorCallback(?callable $callback)`
- `getConstructorCallback()`
- `setInputEncoding(string $encoding)`
- `getInputEncoding()`
- `setFallbackEncoding(string $fallbackEncoding)`
- `getFallbackEncoding()`
- `skipBOM()`
- `checkSeparator()`
- `inferSeparator()`
- `listWorksheetInfo(string $filename)`
- `loadSpreadsheetFromFile(string $filename)`
- `openFileOrMemory(string $filename)`
- `setTestAutoDetect(bool $value)`
- `setAutoDetect(?string $value)`
- `castFormattedNumberToNumeric(bool $castFormattedNumberToNumeric,
        bool $preserveNumericFormatting = false)`
- `loadIntoExisting(string $filename, Spreadsheet $spreadsheet)`
- `convertBoolean(&$rowDatum, bool $preserveBooleanString)`
- `convertFormattedNumber(&$rowDatum)`
- `getDelimiter()`
- `setDelimiter(?string $delimiter)`
- `getEnclosure()`
- `setEnclosure(string $enclosure)`
- `getSheetIndex()`
- `setSheetIndex(int $indexValue)`
- `setContiguous(bool $contiguous)`
- `getContiguous()`
- `setEscapeCharacter(string $escapeCharacter)`
- `getEscapeCharacter()`
- `canRead(string $filename)`
- `guessEncodingTestNoBom(string &$encoding, string &$contents, string $compare, string $setEncoding)`
- `guessEncodingNoBom(string $filename)`
- `guessEncodingTestBom(string &$encoding, string $first4, string $compare, string $setEncoding)`
- `guessEncodingBom(string $filename)`
- `guessEncoding(string $filename, string $dflt = self::DEFAULT_FALLBACK_ENCODING)`

