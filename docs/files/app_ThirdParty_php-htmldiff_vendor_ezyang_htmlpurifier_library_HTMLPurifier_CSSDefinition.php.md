# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\CSSDefinition.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\CSSDefinition.php`
- Type: PHP
- Size: 19593 bytes

## Summary (from docblocks)

Defines allowed CSS attributes and what their values are.
@see HTMLPurifier_HTMLDefinition

Assoc array of attribute name to definition object.
@type HTMLPurifier_AttrDef[]

Constructs the info array.  The meat of this class.
@param HTMLPurifier_Config $config

@param HTMLPurifier_Config $config

@param HTMLPurifier_Config $config

@param HTMLPurifier_Config $config

Performs extra config-based processing. Based off of
HTMLPurifier_HTMLDefinition.
@param HTMLPurifier_Config $config
@todo Refactor duplicate elements into common class (probably using
      composition, not inheritance).

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\CSSDefinition.php`

**Classes**:
- `HTMLPurifier_CSSDefinition extends HTMLPurifier_Definition`

**Functions/Methods**:
- `doSetup($config)`
- `doSetupProprietary($config)`
- `doSetupTricky($config)`
- `doSetupTrusted($config)`
- `setupConfigStuff($config)`

