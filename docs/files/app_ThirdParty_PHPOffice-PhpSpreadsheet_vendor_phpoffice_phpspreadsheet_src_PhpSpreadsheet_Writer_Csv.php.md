# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Csv.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Csv.php`
- Type: PHP
- Size: 9430 bytes

## Summary (from docblocks)

PhpSpreadsheet object.
@var Spreadsheet

Delimiter.
@var string

Enclosure.
@var string

Line ending.
@var string

Sheet index to write.
@var int

Whether to write a BOM (for UTF8).
@var bool

Whether to write a Separator line as the first line of the file
    sep=x.
@var bool

Whether to write a fully Excel compatible CSV file.
@var bool

Output encoding.
@var string

Create a new CSV.
@param Spreadsheet $spreadsheet Spreadsheet object

Save PhpSpreadsheet to file.
@param resource|string $filename

Get delimiter.
@return string

Set delimiter.
@param string $delimiter Delimiter, defaults to ','
@return $this

Get enclosure.
@return string

Set enclosure.
@param string $enclosure Enclosure, defaults to "
@return $this

Get line ending.
@return string

Set line ending.
@param string $lineEnding Line ending, defaults to OS line ending (PHP_EOL)
@return $this

Get whether BOM should be used.
@return bool

Set whether BOM should be used.
@param bool $useBOM Use UTF-8 byte-order mark? Defaults to false
@return $this

Get whether a separator line should be included.
@return bool

Set whether a separator line should be included as the first line of the file.
@param bool $includeSeparatorLine Use separator line? Defaults to false
@return $this

Get whether the file should be saved with full Excel Compatibility.
@return bool

Set whether the file should be saved with full Excel Compatibility.
@param bool $excelCompatibility Set the file to be written as a fully Excel compatible csv file
                               Note that this overrides other settings such as useBOM, enclosure and delimiter
@return $this

Get sheet index.
@return int

Set sheet index.
@param int $sheetIndex Sheet index
@return $this

Get output encoding.
@return string

Set output encoding.
@param string $outputEnconding Output encoding
@return $this

@var bool

Convert boolean to TRUE/FALSE; otherwise return element cast to string.
@param mixed $element

Write line to CSV file.
@param resource $fileHandle PHP filehandle
@param array $values Array containing values in a row

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Csv.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Csv extends BaseWriter`

**Functions/Methods**:
- `__construct(Spreadsheet $spreadsheet)`
- `save($filename, int $flags = 0)`
- `getDelimiter()`
- `setDelimiter($delimiter)`
- `getEnclosure()`
- `setEnclosure($enclosure = '"')`
- `getLineEnding()`
- `setLineEnding($lineEnding)`
- `getUseBOM()`
- `setUseBOM($useBOM)`
- `getIncludeSeparatorLine()`
- `setIncludeSeparatorLine($includeSeparatorLine)`
- `getExcelCompatibility()`
- `setExcelCompatibility($excelCompatibility)`
- `getSheetIndex()`
- `setSheetIndex($sheetIndex)`
- `getOutputEncoding()`
- `setOutputEncoding($outputEnconding)`
- `setEnclosureRequired(bool $value)`
- `getEnclosureRequired()`
- `elementToString($element)`
- `writeLine($fileHandle, array $values)`

