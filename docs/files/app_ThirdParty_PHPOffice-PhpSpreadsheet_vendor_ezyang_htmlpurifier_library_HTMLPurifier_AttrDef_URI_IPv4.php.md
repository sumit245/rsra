# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI\IPv4.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI\IPv4.php`
- Type: PHP
- Size: 998 bytes

## Summary (from docblocks)

Validates an IPv4 address
@author Feyd @ forums.devnetwork.net (public domain)

IPv4 regex, protected so that IPv6 can reuse it.
@type string

@param string $aIP
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

Lazy load function to prevent regex from being stuffed in
cache.

## References

**Database Tables (inferred)**
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI\IPv4.php`

**Classes**:
- `HTMLPurifier_AttrDef_URI_IPv4 extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `validate($aIP, $config, $context)`
- `_loadRegex()`

