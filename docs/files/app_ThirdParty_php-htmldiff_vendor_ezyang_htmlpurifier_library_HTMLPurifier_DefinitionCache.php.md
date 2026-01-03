# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache.php`
- Type: PHP
- Size: 3913 bytes

## Summary (from docblocks)

Abstract class representing Definition cache managers that implements
useful common methods and is a factory.
@todo Create a separate maintenance file advanced users can use to
      cache their custom HTMLDefinition, which can be loaded
      via a configuration directive
@todo Implement memcached

@type string

@param string $type Type of definition objects this instance of the
     cache will handle.

Generates a unique identifier for a particular configuration
@param HTMLPurifier_Config $config Instance of HTMLPurifier_Config
@return string

Tests whether or not a key is old with respect to the configuration's
version and revision number.
@param string $key Key to test
@param HTMLPurifier_Config $config Instance of HTMLPurifier_Config to test against
@return bool

Checks if a definition's type jives with the cache's type
@note Throws an error on failure
@param HTMLPurifier_Definition $def Definition object to check
@return bool true if good, false if not

Adds a definition object to the cache
@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config

Unconditionally saves a definition object to the cache
@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config

Replace an object in the cache
@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config

Retrieves a definition object from the cache
@param HTMLPurifier_Config $config

Removes a definition object to the cache
@param HTMLPurifier_Config $config

Clears all objects from cache
@param HTMLPurifier_Config $config

Clears all expired (older version or revision) objects from cache
@note Be careful implementing this method as flush. Flush must
      not interfere with other Definition types, and cleanup()
      should not be repeatedly called by userland code.
@param HTMLPurifier_Config $config

## References

**Database Tables (inferred)**
- `the`
- `cache`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache.php`

**Classes**:
- `representing`
- `HTMLPurifier_DefinitionCache`

**Functions/Methods**:
- `__construct($type)`
- `generateKey($config)`
- `isOld($key, $config)`
- `checkDefType($def)`
- `add($def, $config)`
- `set($def, $config)`
- `replace($def, $config)`
- `get($config)`
- `remove($config)`
- `flush($config)`
- `cleanup($config)`

