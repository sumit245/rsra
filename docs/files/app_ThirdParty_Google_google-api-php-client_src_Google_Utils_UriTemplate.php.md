# app\ThirdParty\Google\google-api-php-client\src\Google\Utils\UriTemplate.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Utils\UriTemplate.php`
- Type: PHP
- Size: 9446 bytes

## Summary (from docblocks)

Implementation of levels 1-3 of the URI Template spec.
@see http://tools.ietf.org/html/rfc6570

@var $operators array
These are valid at the start of a template block to
modify the way in which the variables inside are
processed.

@var reserved array
These are the characters which should not be URL encoded in reserved
strings.

This function finds the first matching {...} block and
executes the replacement. It then calls itself to find
subsequent blocks, if any.

Return the type of a passed in value

Utility function that merges multiple combine calls
for multi-key templates.

Utility function to encode and trim values

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Utils\UriTemplate.php`

**Classes**:
- `Google_Utils_UriTemplate`

**Functions/Methods**:
- `parse($string, array $parameters)`
- `resolveNextSection($string, $parameters)`
- `replace($string, $start, $end, $parameters)`
- `replaceVars($section,
      $parameters,
      $sep = ",",
      $combine = null,
      $reserved = false,
      $tag_empty = false,
      $combine_on_empty = true)`
- `combine($key,
      $parameters,
      $sep,
      $combine,
      $reserved,
      $tag_empty,
      $combine_on_empty)`
- `getDataType($data)`
- `combineList($vars,
      $sep,
      $parameters,
      $combine,
      $reserved,
      $tag_empty,
      $combine_on_empty)`
- `getValue($value, $length)`

