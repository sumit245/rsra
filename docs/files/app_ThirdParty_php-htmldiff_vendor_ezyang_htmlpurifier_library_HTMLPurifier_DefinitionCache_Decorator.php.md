# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Decorator.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Decorator.php`
- Type: PHP
- Size: 2379 bytes

## Summary (from docblocks)

Cache object we are decorating
@type HTMLPurifier_DefinitionCache

The name of the decorator
@var string

Lazy decorator function
@param HTMLPurifier_DefinitionCache $cache Reference to cache object to decorate
@return HTMLPurifier_DefinitionCache_Decorator

Cross-compatible clone substitute
@return HTMLPurifier_DefinitionCache_Decorator

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Config $config
@return mixed

@param HTMLPurifier_Config $config
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Decorator.php`

**Classes**:
- `HTMLPurifier_DefinitionCache_Decorator extends HTMLPurifier_DefinitionCache`

**Functions/Methods**:
- `__construct()`
- `decorate(&$cache)`
- `copy()`
- `add($def, $config)`
- `set($def, $config)`
- `replace($def, $config)`
- `get($config)`
- `remove($config)`
- `flush($config)`
- `cleanup($config)`

