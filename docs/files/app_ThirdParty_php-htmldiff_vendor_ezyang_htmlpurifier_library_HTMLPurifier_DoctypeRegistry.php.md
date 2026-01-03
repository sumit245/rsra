# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DoctypeRegistry.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DoctypeRegistry.php`
- Type: PHP
- Size: 4224 bytes

## Summary (from docblocks)

Hash of doctype names to doctype objects.
@type array

Lookup table of aliases to real doctype names.
@type array

Registers a doctype to the registry
@note Accepts a fully-formed doctype object, or the
      parameters for constructing a doctype object
@param string $doctype Name of doctype or literal doctype object
@param bool $xml
@param array $modules Modules doctype will load
@param array $tidy_modules Modules doctype will load for certain modes
@param array $aliases Alias names for doctype
@param string $dtd_public
@param string $dtd_system
@return HTMLPurifier_Doctype Editable registered doctype

Retrieves reference to a doctype of a certain name
@note This function resolves aliases
@note When possible, use the more fully-featured make()
@param string $doctype Name of doctype
@return HTMLPurifier_Doctype Editable doctype object

Creates a doctype based on a configuration object,
will perform initialization on the doctype
@note Use this function to get a copy of doctype that config
      can hold on to (this is necessary in order to tell
      Generator whether or not the current document is XML
      based or not).
@param HTMLPurifier_Config $config
@return HTMLPurifier_Doctype

Retrieves the doctype from the configuration object
@param HTMLPurifier_Config $config
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DoctypeRegistry.php`

**Classes**:
- `HTMLPurifier_DoctypeRegistry`

**Functions/Methods**:
- `register($doctype,
        $xml = true,
        $modules = array()`
- `get($doctype)`
- `make($config)`
- `getDoctypeFromConfig($config)`

