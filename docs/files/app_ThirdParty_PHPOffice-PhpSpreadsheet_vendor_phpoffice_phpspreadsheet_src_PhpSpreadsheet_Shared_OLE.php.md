# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE.php`
- Type: PHP
- Size: 17460 bytes

## Summary (from docblocks)

OLE package base class.
@author   Xavier Noguer <xnoguer@php.net>
@author   Christian Schmidt <schmidt@php.net>

The file handle for reading an OLE container.
@var resource

Array of PPS's found on the OLE container.
@var array

Root directory of OLE container.
@var Root

Big Block Allocation Table.
@var array (blockId => nextBlockId)

Short Block Allocation Table.
@var array (blockId => nextBlockId)

Size of big blocks. This is usually 512.
@var int number of octets per block

Size of small blocks. This is usually 64.
@var int number of octets per block

Threshold for big blocks.
@var int

Reads an OLE container from the contents of the file given.
@acces public
@param string $filename
@return bool true on success, PEAR_Error on failure

@param int $blockId byte offset from beginning of file
@return int

Returns a stream for use with fread() etc. External callers should
use \PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\File::getStream().
@param int|OLE\PPS $blockIdOrPps block id or PPS
@return resource read-only stream

Reads a signed char.
@param resource $fileHandle file handle
@return int

Reads an unsigned short (2 octets).
@param resource $fileHandle file handle
@return int

Reads an unsigned long (4 octets).
@param resource $fileHandle file handle
@return int

Gets information about all PPS's on the OLE container from the PPS WK's
creates an OLE_PPS object for each one.
@param int $blockId the block id of the first block
@return bool true on success, PEAR_Error on failure

It checks whether the PPS tree is complete (all PPS's read)
starting with the given PPS (not necessarily root).
@param int $index The index of the PPS from which we are checking
@return bool Whether the PPS tree for the given PPS is complete

Checks whether a PPS is a File PPS or not.
If there is no PPS for the index given, it will return false.
@param int $index The index for the PPS
@return bool true if it's a File PPS, false otherwise

Checks whether a PPS is a Root PPS or not.
If there is no PPS for the index given, it will return false.
@param int $index the index for the PPS
@return bool true if it's a Root PPS, false otherwise

Gives the total number of PPS's found in the OLE container.
@return int The total number of PPS's found in the OLE container

Gets data from a PPS
If there is no PPS for the index given, it will return an empty string.
@param int $index The index for the PPS
@param int $position The position from which to start reading
                         (relative to the PPS)
@param int $length The amount of bytes to read (at most)
@return string The binary string containing the data requested
@see OLE_PPS_File::getStream()

Gets the data length from a PPS
If there is no PPS for the index given, it will return 0.
@param int $index The index for the PPS
@return int The amount of bytes in data the PPS has

Utility function to transform ASCII text to Unicode.
@param string $ascii The ASCII string to transform
@return string The string in Unicode

Utility function
Returns a string for the OLE container with the date given.
@param float|int $date A timestamp
@return string The string for the OLE container

Returns a timestamp from an OLE container's date.
@param string $oleTimestamp A binary string with the encoded date
@return float|int The Unix timestamp corresponding to the string

## References

**Database Tables (inferred)**
- `the`
- `beginning`
- `self`
- `UTF`
- `root`
- `which`
- `a`
- `1`
- `an`
- `1601`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\OLE`

**Functions/Methods**:
- `read($filename)`
- `getBlockOffset($blockId)`
- `getStream($blockIdOrPps)`
- `readInt1($fileHandle)`
- `readInt2($fileHandle)`
- `readInt4($fileHandle)`
- `readPpsWks($blockId)`
- `ppsTreeComplete($index)`
- `isFile($index)`
- `isRoot($index)`
- `ppsTotal()`
- `getData($index, $position, $length)`
- `getDataLength($index)`
- `ascToUcs($ascii)`
- `localDateToOLE($date)`
- `OLE2LocalDate($oleTimestamp)`

