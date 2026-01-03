# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer\SpContainer.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer\SpContainer.php`
- Type: PHP
- Size: 7465 bytes

## Summary (from docblocks)

Parent Shape Group Container.
@var SpgrContainer

Is this a group shape?
@var bool

Shape type.
@var int

Shape flag.
@var int

Shape index (usually group shape has index 0, and the rest: 1,2,3...).
@var int

Array of options.
@var array

Cell coordinates of upper-left corner of shape, e.g. 'A1'.
@var string

Horizontal offset of upper-left corner of shape measured in 1/1024 of column width.
@var int

Vertical offset of upper-left corner of shape measured in 1/256 of row height.
@var int

Cell coordinates of bottom-right corner of shape, e.g. 'B2'.
@var string

Horizontal offset of bottom-right corner of shape measured in 1/1024 of column width.
@var int

Vertical offset of bottom-right corner of shape measured in 1/256 of row height.
@var int

Set parent Shape Group Container.
@param SpgrContainer $parent

Get the parent Shape Group Container.
@return SpgrContainer

Set whether this is a group shape.
@param bool $value

Get whether this is a group shape.
@return bool

Set the shape type.
@param int $value

Get the shape type.
@return int

Set the shape flag.
@param int $value

Get the shape flag.
@return int

Set the shape index.
@param int $value

Get the shape index.
@return int

Set an option for the Shape Group Container.
@param int $property The number specifies the option
@param mixed $value

Get an option for the Shape Group Container.
@param int $property The number specifies the option
@return mixed

Get the collection of options.
@return array

Set cell coordinates of upper-left corner of shape.
@param string $value eg: 'A1'

Get cell coordinates of upper-left corner of shape.
@return string

Set offset in x-direction of upper-left corner of shape measured in 1/1024 of column width.
@param int $startOffsetX

Get offset in x-direction of upper-left corner of shape measured in 1/1024 of column width.
@return int

Set offset in y-direction of upper-left corner of shape measured in 1/256 of row height.
@param int $startOffsetY

Get offset in y-direction of upper-left corner of shape measured in 1/256 of row height.
@return int

Set cell coordinates of bottom-right corner of shape.
@param string $value eg: 'A1'

Get cell coordinates of bottom-right corner of shape.
@return string

Set offset in x-direction of bottom-right corner of shape measured in 1/1024 of column width.
@param int $endOffsetX

Get offset in x-direction of bottom-right corner of shape measured in 1/1024 of column width.
@return int

Set offset in y-direction of bottom-right corner of shape measured in 1/256 of row height.
@param int $endOffsetY

Get offset in y-direction of bottom-right corner of shape measured in 1/256 of row height.
@return int

Get the nesting level of this spContainer. This is the number of spgrContainers between this spContainer and
the dgContainer. A value of 1 = immediately within first spgrContainer
Higher nesting level occurs if and only if spContainer is part of a shape group.
@return int Nesting level

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer\SpContainer.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Escher\DgContainer\SpgrContainer\SpContainer`

**Functions/Methods**:
- `setParent($parent)`
- `getParent()`
- `setSpgr($value)`
- `getSpgr()`
- `setSpType($value)`
- `getSpType()`
- `setSpFlag($value)`
- `getSpFlag()`
- `setSpId($value)`
- `getSpId()`
- `setOPT($property, $value)`
- `getOPT($property)`
- `getOPTCollection()`
- `setStartCoordinates($value)`
- `getStartCoordinates()`
- `setStartOffsetX($startOffsetX)`
- `getStartOffsetX()`
- `setStartOffsetY($startOffsetY)`
- `getStartOffsetY()`
- `setEndCoordinates($value)`
- `getEndCoordinates()`
- `setEndOffsetX($endOffsetX)`
- `getEndOffsetX()`
- `setEndOffsetY($endOffsetY)`
- `getEndOffsetY()`
- `getNestingLevel()`

