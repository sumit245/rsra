# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Definition.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Definition.php`
- Type: PHP
- Size: 1361 bytes

## Summary (from docblocks)

Super-class for definition datatype objects, implements serialization
functions for the class.

Has setup() been called yet?
@type bool

If true, write out the final definition object to the cache after
setup.  This will be true only if all invocations to get a raw
definition object are also optimized.  This does not cause file
system thrashing because on subsequent calls the cached object
is used and any writes to the raw definition object are short
circuited.  See enduser-customize.html for the high-level
picture.
@type bool

What type of definition is it?
@type string

Sets up the definition object into the final form, something
not done by the constructor
@param HTMLPurifier_Config $config

Setup function that aborts if already setup
@param HTMLPurifier_Config $config

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Definition.php`

**Classes**:
- `for`
- `HTMLPurifier_Definition`

**Functions/Methods**:
- `doSetup($config)`
- `setup($config)`

