# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\IOFactory.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\IOFactory.php`
- Type: PHP
- Size: 8692 bytes

## Summary (from docblocks)

Factory to create readers and writers easily.
It is not required to use this class, but it should make it easier to read and write files.
Especially for reading files with an unknown format.

Create Writer\IWriter.

Create IReader.

Loads Spreadsheet from file using automatic Reader\IReader resolution.
@param string $filename The name of the spreadsheet file
@param int $flags the optional second parameter flags may be used to identify specific elements
                      that should be loaded, but which won't be loaded by default, using these values:
                           IReader::LOAD_WITH_CHARTS - Include any charts that are defined in the loaded file
@param string[] $readers An array of Readers to use to identify the file type. By default, load() will try
                            all possible Readers until it finds a match; but this allows you to pass in a
                            list of Readers so it will only try the subset that you specify here.
                         Values in this list can be any of the constant values defined in the set
                                IOFactory::READER_*.

Identify file type using automatic IReader resolution.

Create Reader\IReader for file using automatic IReader resolution.
@param string[] $readers An array of Readers to use to identify the file type. By default, load() will try
                            all possible Readers until it finds a match; but this allows you to pass in a
                            list of Readers so it will only try the subset that you specify here.
                         Values in this list can be any of the constant values defined in the set
                                IOFactory::READER_*.

Guess a reader type from the file extension, if any.

Register a writer with its type and class name.

Register a reader with its type and class name.

## References

**Database Tables (inferred)**
- `file`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\IOFactory.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\IOFactory`
- `PhpOffice\PhpSpreadsheet\name`
- `PhpOffice\PhpSpreadsheet\name`

**Functions/Methods**:
- `createWriter(Spreadsheet $spreadsheet, string $writerType)`
- `createReader(string $readerType)`
- `load(string $filename, int $flags = 0, ?array $readers = null)`
- `identify(string $filename, ?array $readers = null)`
- `createReaderForFile(string $filename, ?array $readers = null)`
- `getReaderTypeFromExtension(string $filename)`
- `registerWriter(string $writerType, string $writerClass)`
- `registerReader(string $readerType, string $readerClass)`

