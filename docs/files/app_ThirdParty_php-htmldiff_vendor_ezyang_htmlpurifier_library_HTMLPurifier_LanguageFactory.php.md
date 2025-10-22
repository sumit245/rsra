# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\LanguageFactory.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\LanguageFactory.php`
- Type: PHP
- Size: 6618 bytes

## Summary (from docblocks)

Class responsible for generating HTMLPurifier_Language objects, managing
caching and fallbacks.
@note Thanks to MediaWiki for the general logic, although this version
      has been entirely rewritten
@todo Serialized cache for languages

Cache of language code information used to load HTMLPurifier_Language objects.
Structure is: $factory->cache[$language_code][$key] = $value
@type array

Valid keys in the HTMLPurifier_Language object. Designates which
variables to slurp out of a message file.
@type array

Instance to validate language codes.
@type HTMLPurifier_AttrDef_Lang

Cached copy of dirname(__FILE__), directory of current file without
trailing slash.
@type string

Keys whose contents are a hash map and can be merged.
@type array

Keys whose contents are a list and can be merged.
@value array lookup

Retrieve sole instance of the factory.
@param HTMLPurifier_LanguageFactory $prototype Optional prototype to overload sole instance with,
                  or bool true to reset to default factory.
@return HTMLPurifier_LanguageFactory

Sets up the singleton, much like a constructor
@note Prevents people from getting this outside of the singleton

Creates a language object, handles class fallbacks
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@param bool|string $code Code to override configuration with. Private parameter.
@return HTMLPurifier_Language

Returns the fallback language for language
@note Loads the original language into cache
@param string $code language code
@return string|bool

Loads language into the cache, handles message file and fallbacks
@param string $code language code

## References

**Database Tables (inferred)**
- `getting`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\LanguageFactory.php`

**Classes**:
- `HTMLPurifier_LanguageFactory`
- `fallbacks`

**Functions/Methods**:
- `instance($prototype = null)`
- `setup()`
- `create($config, $context, $code = false)`
- `getFallbackFor($code)`
- `loadLanguage($code)`

