# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLERead.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLERead.php`
- Type: PHP
- Size: 10366 bytes

## Summary (from docblocks)

@var int

@var int

@var int

@var int

@var int

@var string

@var string

@var string

@var int

@var array

Read the file.

Extract binary stream data.
@param int $stream
@return null|string

Read a standard stream (by joining sectors using information from SAT).
@param int $block Sector ID where the stream starts
@return string Data for standard stream

Read entries in the directory stream.

Read 4 bytes of data at specified position.
@param string $data
@param int $pos
@return int

## References

**Database Tables (inferred)**
- `SAT`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLERead.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\OLERead`

**Functions/Methods**:
- `read(string $filename)`
- `getStream($stream)`
- `readData($block)`
- `readPropertySets()`
- `getInt4d($data, $pos)`

