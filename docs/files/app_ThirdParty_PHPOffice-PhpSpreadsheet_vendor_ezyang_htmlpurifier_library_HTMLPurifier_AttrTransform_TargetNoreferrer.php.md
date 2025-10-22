# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\TargetNoreferrer.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\TargetNoreferrer.php`
- Type: PHP
- Size: 1032 bytes

## Summary (from docblocks)

Adds rel="noreferrer" to any links which target a different window
than the current one.  This is used to prevent malicious websites
from silently replacing the original window, which could be used
to do phishing.
This transform is controlled by %HTML.TargetNoreferrer.

@param array $attr
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## References

**Database Tables (inferred)**
- `silently`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrTransform\TargetNoreferrer.php`

**Classes**:
- `HTMLPurifier_AttrTransform_TargetNoreferrer extends HTMLPurifier_AttrTransform`

**Functions/Methods**:
- `transform($attr, $config, $context)`

