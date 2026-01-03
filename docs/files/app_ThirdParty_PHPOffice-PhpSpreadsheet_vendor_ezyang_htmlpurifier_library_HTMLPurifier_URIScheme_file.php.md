# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\file.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\file.php`
- Type: PHP
- Size: 1276 bytes

## Summary (from docblocks)

Validates file as defined by RFC 1630 and RFC 1738.

Generally file:// URLs are not accessible from most
machines, so placing them as an img src is incorrect.
@type bool

Basically the *only* URI scheme for which this is true, since
accessing files on the local machine is very common.  In fact,
browsers on some operating systems don't understand the
authority, though I hear it is used on Windows to refer to
network shares.
@type bool

@param HTMLPurifier_URI $uri
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

## References

**Database Tables (inferred)**
- `most`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\file.php`

**Classes**:
- `HTMLPurifier_URIScheme_file extends HTMLPurifier_URIScheme`

**Functions/Methods**:
- `doValidate(&$uri, $config, $context)`

