# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URISchemeRegistry.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URISchemeRegistry.php`
- Type: PHP
- Size: 2409 bytes

## Summary (from docblocks)

Registry for retrieving specific URI scheme validator objects.

Retrieve sole instance of the registry.
@param HTMLPurifier_URISchemeRegistry $prototype Optional prototype to overload sole instance with,
                  or bool true to reset to default registry.
@return HTMLPurifier_URISchemeRegistry
@note Pass a registry object $prototype with a compatible interface and
      the function will copy it and return it all further times.

Cache of retrieved schemes.
@type HTMLPurifier_URIScheme[]

Retrieves a scheme validator object
@param string $scheme String scheme name like http or mailto
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_URIScheme

Registers a custom scheme to the cache, bypassing reflection.
@param string $scheme Scheme name
@param HTMLPurifier_URIScheme $scheme_obj

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URISchemeRegistry.php`

**Classes**:
- `HTMLPurifier_URISchemeRegistry`

**Functions/Methods**:
- `instance($prototype = null)`
- `getScheme($scheme, $config, $context)`
- `register($scheme, $scheme_obj)`

