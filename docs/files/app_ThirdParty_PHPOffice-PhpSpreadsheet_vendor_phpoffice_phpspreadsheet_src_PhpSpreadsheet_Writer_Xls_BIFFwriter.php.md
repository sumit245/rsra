# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\BIFFwriter.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\BIFFwriter.php`
- Type: PHP
- Size: 7083 bytes

## Summary (from docblocks)

The byte order of this architecture. 0 => little endian, 1 => big endian.
@var int

The string containing the data of the BIFF stream.
@var null|string

The size of the data in bytes. Should be the same as strlen($this->_data).
@var int

The maximum length for a BIFF record (excluding record header and length field). See addContinue().
@var int
@see addContinue()

Constructor.

Determine the byte order and store it as class data to avoid
recalculating it for each call to new().
@return int

General storage function.
@param string $data binary data to append

General storage function like append, but returns string instead of modifying $this->_data.
@param string $data binary data to write
@return string

Writes Excel BOF record to indicate the beginning of a stream or
sub-stream in the BIFF file.
@param int $type type of BIFF file to write: 0x0005 Workbook,
                      0x0010 Worksheet

Writes Excel EOF record to indicate the end of a BIFF stream.

Writes Excel EOF record to indicate the end of a BIFF stream.

Excel limits the size of BIFF records. In Excel 5 the limit is 2084 bytes. In
Excel 97 the limit is 8228 bytes. Records that are longer than these limits
must be split up into CONTINUE blocks.
This function takes a long BIFF record and inserts CONTINUE records as
necessary.
@param string $data The original binary data to be written
@return string A very convenient string of continue blocks

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xls\BIFFwriter.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Writer\Xls\library`
- `PhpOffice\PhpSpreadsheet\Writer\Xls\BIFFwriter`
- `PhpOffice\PhpSpreadsheet\Writer\Xls\data`

**Functions/Methods**:
- `__construct()`
- `getByteOrder()`
- `append($data)`
- `writeData($data)`
- `storeBof($type)`
- `storeEof()`
- `writeEof()`
- `addContinue($data)`

