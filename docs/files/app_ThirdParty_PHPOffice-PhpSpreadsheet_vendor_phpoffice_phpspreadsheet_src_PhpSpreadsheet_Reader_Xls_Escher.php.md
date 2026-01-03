# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls\Escher.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls\Escher.php`
- Type: PHP
- Size: 19414 bytes

## Summary (from docblocks)

Escher stream data (binary).
@var string

Size in bytes of the Escher stream data.
@var int

Current position of stream pointer in Escher stream data.
@var int

The object to be returned by the reader. Modified during load.
@var BSE|BstoreContainer|DgContainer|DggContainer|\PhpOffice\PhpSpreadsheet\Shared\Escher|SpContainer|SpgrContainer

Create a new Escher instance.
@param mixed $object

Load Escher stream data. May be a partial Escher stream.
@param string $data
@return BSE|BstoreContainer|DgContainer|DggContainer|\PhpOffice\PhpSpreadsheet\Shared\Escher|SpContainer|SpgrContainer

Read a generic record.

Read DggContainer record (Drawing Group Container).

Read Dgg record (Drawing Group).

Read BstoreContainer record (Blip Store Container).

Read BSE record.

Read BlipJPEG record. Holds raw JPEG image data.

Read BlipPNG record. Holds raw PNG image data.

Read OPT record. This record may occur within DggContainer record or SpContainer.

Read TertiaryOPT record.

Read SplitMenuColors record.

Read DgContainer record (Drawing Container).

Read Dg record (Drawing).

Read SpgrContainer record (Shape Group Container).

Read SpContainer record (Shape Container).

Read Spgr record (Shape Group).

Read Sp record (Shape).

Read ClientTextbox record.

Read ClientAnchor record. This record holds information about where the shape is anchored in worksheet.

@param mixed $value

Read ClientData record.

Read OfficeArtRGFOPTE table of property-value pairs.
@param string $data Binary data
@param int $n Number of properties

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xls\Escher.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xls\Escher`

**Functions/Methods**:
- `__construct($object)`
- `load($data)`
- `readDefault()`
- `readDggContainer()`
- `readDgg()`
- `readBstoreContainer()`
- `readBSE()`
- `readBlipJPEG()`
- `readBlipPNG()`
- `readOPT()`
- `readTertiaryOPT()`
- `readSplitMenuColors()`
- `readDgContainer()`
- `readDg()`
- `readSpgrContainer()`
- `readSpContainer()`
- `readSpgr()`
- `readSp()`
- `readClientTextbox()`
- `readClientAnchor()`
- `applyAttribute(string $name, $value)`
- `readClientData()`
- `readOfficeArtRGFOPTE($data, $n)`

