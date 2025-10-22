# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Properties.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Properties.php`
- Type: PHP
- Size: 12299 bytes

## Summary (from docblocks)

constants

Creator.
@var string

LastModifiedBy.
@var string

Created.
@var float|int

Modified.
@var float|int

Title.
@var string

Description.
@var string

Subject.
@var string

Keywords.
@var string

Category.
@var string

Manager.
@var string

Company.
@var string

Custom Properties.
@var array{value: mixed, type: string}[]

Create a new Document Properties instance.

Get Creator.

Set Creator.
@return $this

Get Last Modified By.

Set Last Modified By.
@return $this

@param null|float|int|string $timestamp
@return float|int

Get Created.
@return float|int

Set Created.
@param null|float|int|string $timestamp
@return $this

Get Modified.
@return float|int

Set Modified.
@param null|float|int|string $timestamp
@return $this

Get Title.

Set Title.
@return $this

Get Description.

Set Description.
@return $this

Get Subject.

Set Subject.
@return $this

Get Keywords.

Set Keywords.
@return $this

Get Category.

Set Category.
@return $this

Get Company.

Set Company.
@return $this

Get Manager.

Set Manager.
@return $this

Get a List of Custom Property Names.
@return string[]

Check if a Custom Property is defined.

Get a Custom Property Value.
@return mixed

Get a Custom Property Type.
@return null|string

@param mixed $propertyValue

Set a Custom Property.
@param mixed $propertyValue
@param string $propertyType
     'i'    : Integer
  'f' : Floating Point
  's' : String
  'd' : Date/Time
  'b' : Boolean
@return $this

Convert property to form desired by Excel.
@param mixed $propertyValue
@return mixed

Convert property to form desired by Excel.
@param mixed $propertyValue
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Document\Properties.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Document\Properties`

**Functions/Methods**:
- `__construct()`
- `getCreator()`
- `setCreator(string $creator)`
- `getLastModifiedBy()`
- `setLastModifiedBy(string $modifiedBy)`
- `intOrFloatTimestamp($timestamp)`
- `getCreated()`
- `setCreated($timestamp)`
- `getModified()`
- `setModified($timestamp)`
- `getTitle()`
- `setTitle(string $title)`
- `getDescription()`
- `setDescription(string $description)`
- `getSubject()`
- `setSubject(string $subject)`
- `getKeywords()`
- `setKeywords(string $keywords)`
- `getCategory()`
- `setCategory(string $category)`
- `getCompany()`
- `setCompany(string $company)`
- `getManager()`
- `setManager(string $manager)`
- `getCustomProperties()`
- `isCustomPropertySet(string $propertyName)`
- `getCustomPropertyValue(string $propertyName)`
- `getCustomPropertyType(string $propertyName)`
- `identifyPropertyType($propertyValue)`
- `setCustomProperty(string $propertyName, $propertyValue = '', $propertyType = null)`
- `convertProperty($propertyValue, string $propertyType)`
- `convertProperty2($propertyValue, string $type)`
- `convertPropertyType(string $propertyType)`

