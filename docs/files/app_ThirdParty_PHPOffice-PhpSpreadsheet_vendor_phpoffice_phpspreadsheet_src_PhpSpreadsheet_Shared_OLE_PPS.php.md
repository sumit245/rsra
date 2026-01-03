# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS.php`
- Type: PHP
- Size: 7198 bytes

## Summary (from docblocks)

Class for creating PPS's for OLE containers.
@author   Xavier Noguer <xnoguer@php.net>

The PPS index.
@var int

The PPS name (in Unicode).
@var string

The PPS type. Dir, Root or File.
@var int

The index of the previous PPS.
@var int

The index of the next PPS.
@var int

The index of it's first child if this is a Dir or Root PPS.
@var int

A timestamp.
@var float|int

A timestamp.
@var float|int

Starting block (small or big) for this PPS's data  inside the container.
@var int

The size of the PPS's data (in bytes).
@var int

The PPS's data (only used if it's not using a temporary file).
@var string

Array of child PPS's (only used by Root and Dir PPS's).
@var array

Pointer to OLE container.
@var OLE

The constructor.
@param int $No The PPS index
@param string $name The PPS name
@param int $type The PPS type. Dir, Root or File
@param int $prev The index of the previous PPS
@param int $next The index of the next PPS
@param int $dir The index of it's first child if this is a Dir or Root PPS
@param null|float|int $time_1st A timestamp
@param null|float|int $time_2nd A timestamp
@param string $data The (usually binary) source data of the PPS
@param array $children Array containing children PPS for this PPS

Returns the amount of data saved for this PPS.
@return int The amount of data (in bytes)

Returns a string with the PPS's WK (What is a WK?).
@return string The binary string

Updates index and pointers to previous, next and children PPS's for this
PPS. I don't think it'll work with Dir PPS's.
@param array $raList Reference to the array of PPS's for the whole OLE
                         container
@param mixed $to_save
@param mixed $depth
@return int The index for this PPS

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\OLE\PPS`

**Functions/Methods**:
- `__construct($No, $name, $type, $prev, $next, $dir, $time_1st, $time_2nd, $data, $children)`
- `getDataLen()`
- `getPpsWk()`
- `savePpsSetPnt(&$raList, $to_save, $depth = 0)`

