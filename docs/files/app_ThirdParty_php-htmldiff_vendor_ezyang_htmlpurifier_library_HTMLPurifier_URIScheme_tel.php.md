# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\tel.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\tel.php`
- Type: PHP
- Size: 1176 bytes

## Summary (from docblocks)

Validates tel (for phone numbers).
The relevant specifications for this protocol are RFC 3966 and RFC 5341,
but this class takes a much simpler approach: we normalize phone
numbers so that they only include (possibly) a leading plus,
and then any number of digits and x'es.

@type bool

@type bool

@param HTMLPurifier_URI $uri
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

## References

**Database Tables (inferred)**
- `phone`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URIScheme\tel.php`

**Classes**:
- `takes`
- `HTMLPurifier_URIScheme_tel extends HTMLPurifier_URIScheme`

**Functions/Methods**:
- `doValidate(&$uri, $config, $context)`

