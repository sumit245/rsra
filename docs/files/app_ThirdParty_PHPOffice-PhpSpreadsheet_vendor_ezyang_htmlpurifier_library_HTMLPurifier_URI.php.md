# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URI.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URI.php`
- Type: PHP
- Size: 10596 bytes

## Summary (from docblocks)

HTML Purifier's internal representation of a URI.
@note
     Internal data-structures are completely escaped. If the data needs
     to be used in a non-URI context (which is very unlikely), be sure
     to decode it first. The URI may not necessarily be well-formed until
     validate() is called.

@type string

@type string

@type string

@type int

@type string

@type string

@type string

@param string $scheme
@param string $userinfo
@param string $host
@param int $port
@param string $path
@param string $query
@param string $fragment
@note Automatically normalizes scheme and port

Retrieves a scheme object corresponding to the URI's scheme/default
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_URIScheme Scheme object appropriate for validating this URI

Generic validation method applicable for all schemes. May modify
this URI in order to get it into a compliant form.
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool True if validation/filtering succeeds, false if failure

Convert URI back to string
@return string URI appropriate for output

Returns true if this URL might be considered a 'local' URL given
the current context.  This is true when the host is null, or
when it matches the host supplied to the configuration.
Note that this does not do any scheme checking, so it is mostly
only appropriate for metadata that doesn't care about protocol
security.  isBenign is probably what you actually want.
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

Returns true if this URL should be considered a 'benign' URL,
that is:
     - It is a local URL (isLocal), and
     - It has a equal or better level of security
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return bool

## References

**Database Tables (inferred)**
- `RFC`
- `browsers`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\URI.php`

**Classes**:
- `HTMLPurifier_URI`

**Functions/Methods**:
- `__construct($scheme, $userinfo, $host, $port, $path, $query, $fragment)`
- `getSchemeObj($config, $context)`
- `validate($config, $context)`
- `toString()`
- `isLocal($config, $context)`
- `isBenign($config, $context)`

