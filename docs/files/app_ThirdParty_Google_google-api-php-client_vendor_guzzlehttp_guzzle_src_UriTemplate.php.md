# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\UriTemplate.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\UriTemplate.php`
- Type: PHP
- Size: 8118 bytes

## Summary (from docblocks)

Expands URI templates. Userland implementation of PECL uri_template.
@link http://tools.ietf.org/html/rfc6570

@var string URI template

@var array Variables to use in the template expansion

@var array Hash for quick operator lookups

@var array Delimiters

@var array Percent encoded delimiters

Parse an expression into parts
@param string $expression Expression to parse
@return array Returns an associative array of parts

Process an expansion
@param array $matches Matches met in the preg_replace_callback
@return string Returns the replacement string

Determines if an array is associative.
This makes the assumption that input arrays are sequences or hashes.
This assumption is a tradeoff for accuracy in favor of speed, but it
should work in almost every case where input is supplied for a URI
template.
@param array $array Array to check
@return bool

Removes percent encoding on reserved characters (used with + and #
modifiers).
@param string $string String to fix
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\UriTemplate.php`

**Classes**:
- `GuzzleHttp\UriTemplate`

**Functions/Methods**:
- `expand($template, array $variables)`
- `parseExpression($expression)`
- `expandMatch(array $matches)`
- `isAssoc(array $array)`
- `decodeReserved($string)`

