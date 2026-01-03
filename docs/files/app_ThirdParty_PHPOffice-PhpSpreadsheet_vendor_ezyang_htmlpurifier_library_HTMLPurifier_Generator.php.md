# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Generator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Generator.php`
- Type: PHP
- Size: 10251 bytes

## Summary (from docblocks)

Generates HTML from tokens.
@todo Refactor interface so that configuration/context is determined
      upon instantiation, no need for messy generateFromTokens() calls
@todo Make some of the more internal functions protected, and have
      unit tests work around that

Whether or not generator should produce XML output.
@type bool

:HACK: Whether or not generator should comment the insides of <script> tags.
@type bool

Cache of HTMLDefinition during HTML output to determine whether or
not attributes should be minimized.
@type HTMLPurifier_HTMLDefinition

Cache of %Output.SortAttr.
@type bool

Cache of %Output.FlashCompat.
@type bool

Cache of %Output.FixInnerHTML.
@type bool

Stack for keeping track of object information when outputting IE
compatibility code.
@type array

Configuration for the generator
@type HTMLPurifier_Config

@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context

Generates HTML from an array of tokens.
@param HTMLPurifier_Token[] $tokens Array of HTMLPurifier_Token
@return string Generated HTML

Generates HTML from a single token.
@param HTMLPurifier_Token $token HTMLPurifier_Token object.
@return string Generated HTML

Special case processor for the contents of script tags
@param HTMLPurifier_Token $token HTMLPurifier_Token object.
@return string
@warning This runs into problems if there's already a literal
         --> somewhere inside the script contents.

Generates attribute declarations from attribute array.
@note This does not include the leading or trailing space.
@param array $assoc_array_of_attributes Attribute array
@param string $element Name of element attributes are for, used to check
       attribute minimization.
@return string Generated HTML fragment for insertion.

Escapes raw text data.
@todo This really ought to be protected, but until we have a facility
      for properly generating HTML here w/o using tokens, it stays
      public.
@param string $string String data to escape for HTML.
@param int $quote Quoting style, like htmlspecialchars. ENT_NOQUOTES is
              permissible for non-attribute output.
@return string escaped data.

## References

**Database Tables (inferred)**
- `tokens`
- `an`
- `a`
- `non`
- `attribute`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Generator.php`

**Classes**:
- `HTMLPurifier_Generator`

**Functions/Methods**:
- `__construct($config, $context)`
- `generateFromTokens($tokens)`
- `generateFromToken($token)`
- `generateScriptFromToken($token)`
- `generateAttributes($assoc_array_of_attributes, $element = '')`
- `escape($string, $quote = null)`

