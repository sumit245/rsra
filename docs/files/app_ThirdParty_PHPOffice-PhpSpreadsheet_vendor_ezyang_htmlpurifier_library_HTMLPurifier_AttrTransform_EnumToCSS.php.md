# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\EnumToCSS.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\EnumToCSS.php`
- Type: PHP
- Size: 1725 bytes

## Summary (from docblocks)

Generic pre-transform that converts an attribute with a fixed number of
values (enumerated) to CSS.

Name of attribute to transform from.
@type string

Lookup array of attribute values to CSS.
@type array

Case sensitivity of the matching.
@type bool
@warning Currently can only be guaranteed to work with ASCII
         values.

@param string $attr Attribute name to transform from
@param array $enum_to_css Lookup array of attribute values to CSS
@param bool $case_sensitive Case sensitivity indicator, default false

@param array $attr
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\EnumToCSS.php`

**Classes**:
- `HTMLPurifier_AttrTransform_EnumToCSS extends HTMLPurifier_AttrTransform`

**Functions/Methods**:
- `__construct($attr, $enum_to_css, $case_sensitive = false)`
- `transform($attr, $config, $context)`

