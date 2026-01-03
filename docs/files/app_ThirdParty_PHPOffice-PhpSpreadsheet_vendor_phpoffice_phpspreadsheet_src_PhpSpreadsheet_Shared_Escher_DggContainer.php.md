# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DggContainer.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DggContainer.php`
- Type: PHP
- Size: 3362 bytes

## Summary (from docblocks)

Maximum shape index of all shapes in all drawings increased by one.
@var int

Total number of drawings saved.
@var int

Total number of shapes saved (including group shapes).
@var int

BLIP Store Container.
@var DggContainer\BstoreContainer

Array of options for the drawing group.
@var array

Array of identifier clusters containg information about the maximum shape identifiers.
@var array

Get maximum shape index of all shapes in all drawings (plus one).
@return int

Set maximum shape index of all shapes in all drawings (plus one).
@param int $value

Get total number of drawings saved.
@return int

Set total number of drawings saved.
@param int $value

Get total number of shapes saved (including group shapes).
@return int

Set total number of shapes saved (including group shapes).
@param int $value

Get BLIP Store Container.
@return DggContainer\BstoreContainer

Set BLIP Store Container.
@param DggContainer\BstoreContainer $bstoreContainer

Set an option for the drawing group.
@param int $property The number specifies the option
@param mixed $value

Get an option for the drawing group.
@param int $property The number specifies the option
@return mixed

Get identifier clusters.
@return array

Set identifier clusters. [<drawingId> => <max shape id>, ...].
@param array $IDCLs

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DggContainer.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Escher\DggContainer`

**Functions/Methods**:
- `getSpIdMax()`
- `setSpIdMax($value)`
- `getCDgSaved()`
- `setCDgSaved($value)`
- `getCSpSaved()`
- `setCSpSaved($value)`
- `getBstoreContainer()`
- `setBstoreContainer($bstoreContainer)`
- `setOPT($property, $value)`
- `getOPT($property)`
- `getIDCLs()`
- `setIDCLs($IDCLs)`

