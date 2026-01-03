# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\IDAccumulator.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\IDAccumulator.php`
- Type: PHP
- Size: 1647 bytes

## Summary (from docblocks)

Component of HTMLPurifier_AttrContext that accumulates IDs to prevent dupes
@note In Slashdot-speak, dupe means duplicate.
@note The default constructor does not accept $config or $context objects:
      use must use the static build() factory method to perform initialization.

Lookup table of IDs we've accumulated.
@public

Builds an IDAccumulator, also initializing the default blacklist
@param HTMLPurifier_Config $config Instance of HTMLPurifier_Config
@param HTMLPurifier_Context $context Instance of HTMLPurifier_Context
@return HTMLPurifier_IDAccumulator Fully initialized HTMLPurifier_IDAccumulator

Add an ID to the lookup table.
@param string $id ID to be added.
@return bool status, true if success, false if there's a dupe

Load a list of IDs into the lookup table
@param $array_of_ids Array of IDs to load
@note This function doesn't care about duplicates

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\IDAccumulator.php`

**Classes**:
- `HTMLPurifier_IDAccumulator`

**Functions/Methods**:
- `build($config, $context)`
- `add($id)`
- `load($array_of_ids)`

