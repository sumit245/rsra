# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Chameleon.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Chameleon.php`
- Type: PHP
- Size: 1898 bytes

## Summary (from docblocks)

Definition that uses different definitions depending on context.
The del and ins tags are notable because they allow different types of
elements depending on whether or not they're in a block or inline context.
Chameleon allows this behavior to happen by using two different
definitions depending on context.  While this somewhat generalized,
it is specifically intended for those two tags.

Instance of the definition object to use when inline. Usually stricter.
@type HTMLPurifier_ChildDef_Optional

Instance of the definition object to use when block.
@type HTMLPurifier_ChildDef_Optional

@type string

@param array $inline List of elements to allow when inline.
@param array $block List of elements to allow when block.

@param HTMLPurifier_Node[] $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Chameleon.php`

**Classes**:
- `HTMLPurifier_ChildDef_Chameleon extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `__construct($inline, $block)`
- `validateChildren($children, $config, $context)`

