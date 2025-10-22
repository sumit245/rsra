# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCacheFactory.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCacheFactory.php`
- Type: PHP
- Size: 3201 bytes

## Summary (from docblocks)

Responsible for creating definition caches.

@type array

@type array

@type HTMLPurifier_DefinitionCache_Decorator[]

Initialize default decorators

Retrieves an instance of global definition cache factory.
@param HTMLPurifier_DefinitionCacheFactory $prototype
@return HTMLPurifier_DefinitionCacheFactory

Registers a new definition cache object
@param string $short Short name of cache object, for reference
@param string $long Full class name of cache object, for construction

Factory method that creates a cache object based on configuration
@param string $type Name of definitions handled by cache
@param HTMLPurifier_Config $config Config instance
@return mixed

Registers a decorator to add to all new cache objects
@param HTMLPurifier_DefinitionCache_Decorator|string $decorator An instance or the name of a decorator

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCacheFactory.php`

**Classes**:
- `HTMLPurifier_DefinitionCacheFactory`
- `name`

**Functions/Methods**:
- `setup()`
- `instance($prototype = null)`
- `register($short, $long)`
- `create($type, $config)`
- `addDecorator($decorator)`

