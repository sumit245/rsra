# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule\Tidy.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule\Tidy.php`
- Type: PHP
- Size: 7223 bytes

## Summary (from docblocks)

Abstract class for a set of proprietary modules that clean up (tidy)
poorly written HTML.
@todo Figure out how to protect some of these methods/properties

List of supported levels.
Index zero is a special case "no fixes" level.
@type array

Default level to place all fixes in.
Disabled by default.
@type string

Lists of fixes used by getFixesForLevel().
Format is:
     HTMLModule_Tidy->fixesForLevel[$level] = array('fix-1', 'fix-2');
@type array

Lazy load constructs the module by determining the necessary
fixes to create and then delegating to the populate() function.
@param HTMLPurifier_Config $config
@todo Wildcard matching and error reporting when an added or
      subtracted fix has no effect.

Retrieves all fixes per a level, returning fixes for that specific
level as well as all levels below it.
@param string $level level identifier, see $levels for valid values
@return array Lookup up table of fixes

Dynamically populates the $fixesForLevel member variable using
the fixes array. It may be custom overloaded, used in conjunction
with $defaultLevel, or not used at all.
@param array $fixes

Populates the module with transforms and other special-case code
based on a list of fixes passed to it
@param array $fixes Lookup table of fixes to activate

Parses a fix name and determines what kind of fix it is, as well
as other information defined by the fix
@param $name String name of fix
@return array(string $fix_type, array $fix_parameters)
@note $fix_parameters is type dependant, see populate() for usage
      of these parameters

Defines all fixes the module will perform in a compact
associative array of fix name to fix implementation.
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule\Tidy.php`

**Classes**:
- `for`
- `HTMLPurifier_HTMLModule_Tidy extends HTMLPurifier_HTMLModule`

**Functions/Methods**:
- `setup($config)`
- `getFixesForLevel($level)`
- `makeFixesForLevel($fixes)`
- `populate($fixes)`
- `getFixType($name)`
- `makeFixes()`

