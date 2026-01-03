# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertUOM.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertUOM.php`
- Type: PHP
- Size: 35722 bytes

## Summary (from docblocks)

Details of the Units of measure that can be used in CONVERTUOM().
@var mixed[]

Details of the Multiplier prefixes that can be used with Units of Measure in CONVERTUOM().
@var mixed[]

Details of the Multiplier prefixes that can be used with Units of Measure in CONVERTUOM().
@var mixed[]

Details of the Units of measure conversion factors, organised by group.
@var mixed[]

getConversionGroups
Returns a list of the different conversion groups for UOM conversions.
@return array

getConversionGroupUnits
Returns an array of units of measure, for a specified conversion group, or for all groups.
@param string $category The group whose units of measure you want to retrieve
@return array

getConversionGroupUnitDetails.
@param string $category The group whose units of measure you want to retrieve
@return array

getConversionMultipliers
Returns an array of the Multiplier prefixes that can be used with Units of Measure in CONVERTUOM().
@return mixed[]

getBinaryConversionMultipliers
Returns an array of the additional Multiplier prefixes that can be used with Information Units of Measure in CONVERTUOM().
@return mixed[]

CONVERT.
Converts a number from one measurement system to another.
   For example, CONVERT can translate a table of distances in miles to a table of distances
in kilometers.
   Excel Function:
       CONVERT(value,fromUOM,toUOM)
@param array|float|int|string $value the value in fromUOM to convert
                     Or can be an array of values
@param array|string $fromUOM the units for value
                     Or can be an array of values
@param array|string $toUOM the units for the result
                     Or can be an array of values
@return array|float|string Result, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

@param float|int $value
@return float|int

## References

**Database Tables (inferred)**
- `one`
- `Kelvin`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertUOM.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\ConvertUOM`

**Functions/Methods**:
- `getConversionCategories()`
- `getConversionCategoryUnits($category = null)`
- `getConversionCategoryUnitDetails($category = null)`
- `getConversionMultipliers()`
- `getBinaryConversionMultipliers()`
- `CONVERT($value, $fromUOM, $toUOM)`
- `getUOMDetails(string $uom)`
- `convertTemperature(string $fromUOM, string $toUOM, $value)`
- `resolveTemperatureSynonyms(string $uom)`

