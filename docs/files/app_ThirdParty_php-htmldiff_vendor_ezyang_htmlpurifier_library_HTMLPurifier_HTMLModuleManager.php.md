# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModuleManager.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModuleManager.php`
- Type: PHP
- Size: 15946 bytes

## Summary (from docblocks)

@type HTMLPurifier_DoctypeRegistry

Instance of current doctype.
@type string

@type HTMLPurifier_AttrTypes

Active instances of modules for the specified doctype are
indexed, by name, in this array.
@type HTMLPurifier_HTMLModule[]

Array of recognized HTMLPurifier_HTMLModule instances,
indexed by module's class name. This array is usually lazy loaded, but a
user can overload a module by pre-emptively registering it.
@type HTMLPurifier_HTMLModule[]

List of extra modules that were added by the user
using addModule(). These get unconditionally merged into the current doctype, whatever
it may be.
@type HTMLPurifier_HTMLModule[]

Associative array of element name to list of modules that have
definitions for the element; this array is dynamically filled.
@type array

List of prefixes we should use for registering small names.
@type array

@type HTMLPurifier_ContentSets

@type HTMLPurifier_AttrCollections

If set to true, unsafe elements and attributes will be allowed.
@type bool

Registers a module to the recognized module list, useful for
overloading pre-existing modules.
@param $module Mixed: string module name, with or without
               HTMLPurifier_HTMLModule prefix, or instance of
               subclass of HTMLPurifier_HTMLModule.
@param $overload Boolean whether or not to overload previous modules.
                 If this is not set, and you do overload a module,
                 HTML Purifier will complain with a warning.
@note This function will not call autoload, you must instantiate
      (and thus invoke) autoload outside the method.
@note If a string is passed as a module name, different variants
      will be tested in this order:
         - Check for HTMLPurifier_HTMLModule_$name
         - Check all prefixes with $name in order they were added
         - Check for literal object name
         - Throw fatal error
      If your object name collides with an internal class, specify
      your module manually. All modules must have been included
      externally: registerModule will not perform inclusions for you!

Adds a module to the current doctype by first registering it,
and then tacking it on to the active doctype

Adds a class prefix that registerModule() will use to resolve a
string name to a concrete class

Performs processing on modules, after being called you may
use getElement() and getElements()
@param HTMLPurifier_Config $config

Takes a module and adds it to the active module collection,
registering it if necessary.

Retrieves merged element definitions.
@return Array of HTMLPurifier_ElementDef

Retrieves a single merged element definition
@param string $name Name of element
@param bool $trusted Boolean trusted overriding parameter: set to true
                if you want the full version of an element
@return HTMLPurifier_ElementDef Merged HTMLPurifier_ElementDef
@note You may notice that modules are getting iterated over twice (once
      in getElements() and once here). This
      is because

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModuleManager.php`

**Classes**:
- `HTMLPurifier_HTMLModuleManager`
- `name`
- `prefix`

**Functions/Methods**:
- `__construct()`
- `registerModule($module, $overload = false)`
- `addModule($module)`
- `addPrefix($prefix)`
- `setup($config)`
- `processModule($module)`
- `getElements()`
- `getElement($name, $trusted = null)`

