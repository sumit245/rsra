# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange.php`
- Type: PHP
- Size: 1282 bytes

## Summary (from docblocks)

Generic schema interchange format that can be converted to a runtime
representation (HTMLPurifier_ConfigSchema) or HTML documentation. Members
are completely validated.

Name of the application this schema is describing.
@type string

Array of Directive ID => array(directive info)
@type HTMLPurifier_ConfigSchema_Interchange_Directive[]

Adds a directive array to $directives
@param HTMLPurifier_ConfigSchema_Interchange_Directive $directive
@throws HTMLPurifier_ConfigSchema_Exception

Convenience function to perform standard validation. Throws exception
on failed validation.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange.php`

**Classes**:
- `HTMLPurifier_ConfigSchema_Interchange`

**Functions/Methods**:
- `addDirective($directive)`
- `validate()`

