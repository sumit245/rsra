# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Language.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Language.php`
- Type: PHP
- Size: 6062 bytes

## Summary (from docblocks)

Represents a language and defines localizable string formatting and
other functions, as well as the localized messages for HTML Purifier.

ISO 639 language code of language. Prefers shortest possible version.
@type string

Fallback language code.
@type bool|string

Array of localizable messages.
@type array

Array of localizable error codes.
@type array

True if no message file was found for this language, so English
is being used instead. Check this if you'd like to notify the
user that they've used a non-supported language.
@type bool

Has the language object been loaded yet?
@type bool
@todo Make it private, fix usage in HTMLPurifier_LanguageTest

@type HTMLPurifier_Config

@type HTMLPurifier_Context

@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context

Loads language object with necessary info from factory cache
@note This is a lazy loader

Retrieves a localised message.
@param string $key string identifier of message
@return string localised message

Retrieves a localised error name.
@param int $int error number, corresponding to PHP's error reporting
@return string localised message

Converts an array list into a string readable representation
@param array $array
@return string

Formats a localised message with passed parameters
@param string $key string identifier of message
@param array $args Parameters to substitute in
@return string localised message
@todo Implement conditionals? Right now, some messages make
    reference to line numbers, but those aren't always available

## References

**Database Tables (inferred)**
- `factory`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Language.php`

**Classes**:
- `HTMLPurifier_Language`
- `if`

**Functions/Methods**:
- `__construct($config, $context)`
- `load()`
- `getMessage($key)`
- `getErrorName($int)`
- `listify($array)`
- `formatMessage($key, $args = array()`

