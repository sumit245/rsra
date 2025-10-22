# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\InterchangeBuilder.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\InterchangeBuilder.php`
- Type: PHP
- Size: 7115 bytes

## Summary (from docblocks)

Used for processing DEFAULT, nothing else.
@type HTMLPurifier_VarParser

@param HTMLPurifier_VarParser $varParser

@param string $dir
@return HTMLPurifier_ConfigSchema_Interchange

@param HTMLPurifier_ConfigSchema_Interchange $interchange
@param string $dir
@return HTMLPurifier_ConfigSchema_Interchange

@param HTMLPurifier_ConfigSchema_Interchange $interchange
@param string $file

Builds an interchange object based on a hash.
@param HTMLPurifier_ConfigSchema_Interchange $interchange HTMLPurifier_ConfigSchema_Interchange object to build
@param HTMLPurifier_StringHash $hash source data
@throws HTMLPurifier_ConfigSchema_Exception

@param HTMLPurifier_ConfigSchema_Interchange $interchange
@param HTMLPurifier_StringHash $hash
@throws HTMLPurifier_ConfigSchema_Exception

Evaluates an array PHP code string without array() wrapper
@param string $contents

Converts an array list into a lookup array.
@param array $array
@return array

Convenience function that creates an HTMLPurifier_ConfigSchema_Interchange_Id
object based on a string Id.
@param string $id
@return HTMLPurifier_ConfigSchema_Interchange_Id

Triggers errors for any unused keys passed in the hash; such keys
may indicate typos, missing values, etc.
@param HTMLPurifier_StringHash $hash Hash to check.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\InterchangeBuilder.php`

**Classes**:
- `HTMLPurifier_ConfigSchema_InterchangeBuilder`

**Functions/Methods**:
- `__construct($varParser = null)`
- `buildFromDirectory($dir = null)`
- `buildDir($interchange, $dir = null)`
- `buildFile($interchange, $file)`
- `build($interchange, $hash)`
- `buildDirective($interchange, $hash)`
- `evalArray($contents)`
- `lookup($array)`
- `id($id)`
- `_findUnused($hash)`

