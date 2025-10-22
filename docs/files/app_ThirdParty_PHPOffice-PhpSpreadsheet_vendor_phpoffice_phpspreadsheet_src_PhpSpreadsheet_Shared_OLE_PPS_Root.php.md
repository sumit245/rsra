# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS\Root.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS\Root.php`
- Type: PHP
- Size: 15015 bytes

## Summary (from docblocks)

Class for creating Root PPS's for OLE containers.
@author   Xavier Noguer <xnoguer@php.net>

@var resource

@var int

@var int

@param null|float|int $time_1st A timestamp
@param null|float|int $time_2nd A timestamp
@param File[] $raChild

Method for saving the whole OLE container (including files).
In fact, if called with an empty argument (or '-'), it saves to a
temporary file and then outputs it's contents to stdout.
If a resource pointer to a stream created by fopen() is passed
it will be used, but you have to close such stream by yourself.
@param resource $fileHandle the name of the file or stream where to save the OLE container
@return bool true on success

Calculate some numbers.
@param array $raList Reference to an array of PPS's
@return float[] The array of numbers

Helper function for caculating a magic value for block sizes.
@param int $i2 The argument
@return float
@see save()

Save OLE header.
@param int $iSBDcnt
@param int $iBBcnt
@param int $iPPScnt

Saving big data (PPS's with data bigger than \PhpOffice\PhpSpreadsheet\Shared\OLE::OLE_DATA_SIZE_SMALL).
@param int $iStBlk
@param array $raList Reference to array of PPS's

get small data (PPS's with data smaller than \PhpOffice\PhpSpreadsheet\Shared\OLE::OLE_DATA_SIZE_SMALL).
@param array $raList Reference to array of PPS's
@return string

Saves all the PPS's WKs.
@param array $raList Reference to an array with all PPS's

Saving Big Block Depot.
@param int $iSbdSize
@param int $iBsize
@param int $iPpsCnt

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\PPS\Root.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root extends PPS`

**Functions/Methods**:
- `__construct($time_1st, $time_2nd, $raChild)`
- `save($fileHandle)`
- `calcSize(&$raList)`
- `adjust2($i2)`
- `saveHeader($iSBDcnt, $iBBcnt, $iPPScnt)`
- `saveBigData($iStBlk, &$raList)`
- `makeSmallData(&$raList)`
- `savePps(&$raList)`
- `saveBbd($iSbdSize, $iBsize, $iPpsCnt)`

