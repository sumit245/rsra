# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme.php`
- Type: PHP
- Size: 3481 bytes

## Summary (from docblocks)

Validator for the components of a URI for a specific scheme

Scheme's default port (integer). If an explicit port number is
specified that coincides with the default port, it will be
elided.
@type int

Whether or not URIs of this scheme are locatable by a browser
http and ftp are accessible, while mailto and news are not.
@type bool

Whether or not data transmitted over this scheme is encrypted.
https is secure, http is not.
@type bool

Whether or not the URI always uses <hier_part>, resolves edge cases
with making relative URIs absolute
@type bool

Whether or not the URI may omit a hostname when the scheme is
explicitly specified, ala file:///path/to/file. As of writing,
'file' is the only scheme that browsers support his properly.
@type bool

Validates the components of a URI for a specific scheme.
@param HTMLPurifier_URI $uri Reference to a HTMLPurifier_URI object
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool success or failure

Public interface for validating components of a URI.  Performs a
bunch of default actions. Don't overload this method.
@param HTMLPurifier_URI $uri Reference to a HTMLPurifier_URI object
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool success or failure

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme.php`

**Classes**:
- `HTMLPurifier_URIScheme`

**Functions/Methods**:
- `doValidate(&$uri, $config, $context)`
- `validate(&$uri, $config, $context)`

