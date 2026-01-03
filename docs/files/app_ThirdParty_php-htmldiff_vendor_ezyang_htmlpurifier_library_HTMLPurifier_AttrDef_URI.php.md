# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI.php`
- Type: PHP
- Size: 2712 bytes

## Summary (from docblocks)

Validates a URI as defined by RFC 3986.
@note Scheme-specific mechanics deferred to HTMLPurifier_URIScheme

@type HTMLPurifier_URIParser

@type bool

@param bool $embeds_resource Does the URI here result in an extra HTTP request?

@param string $string
@return HTMLPurifier_AttrDef_URI

@param string $uri
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrDef\URI.php`

**Classes**:
- `HTMLPurifier_AttrDef_URI extends HTMLPurifier_AttrDef`

**Functions/Methods**:
- `__construct($embeds_resource = false)`
- `make($string)`
- `validate($uri, $config, $context)`

