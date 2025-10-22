# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityLookup.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityLookup.php`
- Type: PHP
- Size: 1426 bytes

## Summary (from docblocks)

Object that provides entity lookup table from entity name to character

Assoc array of entity name to character represented.
@type array

Sets up the entity lookup table from the serialized file contents.
@param bool $file
@note The serialized contents are versioned, but were generated
      using the maintenance script generate_entity_file.php
@warning This is not in constructor to help enforce the Singleton

Retrieves sole instance of the object.
@param bool|HTMLPurifier_EntityLookup $prototype Optional prototype of custom lookup table to overload with.
@return HTMLPurifier_EntityLookup

## References

**Database Tables (inferred)**
- `entity`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\EntityLookup.php`

**Classes**:
- `HTMLPurifier_EntityLookup`

**Functions/Methods**:
- `setup($file = false)`
- `instance($prototype = false)`

