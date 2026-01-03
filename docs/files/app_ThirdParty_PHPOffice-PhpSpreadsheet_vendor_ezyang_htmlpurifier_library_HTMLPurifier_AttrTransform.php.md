# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform.php`
- Type: PHP
- Size: 1989 bytes

## Summary (from docblocks)

Processes an entire attribute array for corrections needing multiple values.
Occasionally, a certain attribute will need to be removed and popped onto
another value.  Instead of creating a complex return syntax for
HTMLPurifier_AttrDef, we just pass the whole attribute array to a
specialized object and have that do the special work.  That is the
family of HTMLPurifier_AttrTransform.
An attribute transformation can be assigned to run before or after
HTMLPurifier_AttrDef validation.  See HTMLPurifier_HTMLDefinition for
more details.

Abstract: makes changes to the attributes dependent on multiple values.
@param array $attr Assoc array of attributes, usually from
             HTMLPurifier_Token_Tag::$attr
@param HTMLPurifier_Config $config Mandatory HTMLPurifier_Config object.
@param HTMLPurifier_Context $context Mandatory HTMLPurifier_Context object
@return array Processed attribute array.

Prepends CSS properties to the style attribute, creating the
attribute if it doesn't exist.
@param array &$attr Attribute array to process (passed by reference)
@param string $css CSS to prepend

Retrieves and removes an attribute
@param array &$attr Attribute array to process (passed by reference)
@param mixed $key Key of attribute to confiscate
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform.php`

**Classes**:
- `HTMLPurifier_AttrTransform`

**Functions/Methods**:
- `transform($attr, $config, $context)`
- `prependCSS(&$attr, $css)`
- `confiscateAttr(&$attr, $key)`

