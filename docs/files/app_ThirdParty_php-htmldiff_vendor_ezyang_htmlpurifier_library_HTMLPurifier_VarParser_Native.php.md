# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser\Native.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser\Native.php`
- Type: PHP
- Size: 910 bytes

## Summary (from docblocks)

This variable parser uses PHP's internal code engine. Because it does
this, it can represent all inputs; however, it is dangerous and cannot
be used by users.

@param mixed $var
@param int $type
@param bool $allow_null
@return null|string

@param string $expr
@return mixed
@throws HTMLPurifier_VarParserException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser\Native.php`

**Classes**:
- `HTMLPurifier_VarParser_Native extends HTMLPurifier_VarParser`

**Functions/Methods**:
- `parseImplementation($var, $type, $allow_null)`
- `evalExpression($expr)`

