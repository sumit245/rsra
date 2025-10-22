# system\Config\AutoloadConfig.php

- Path: `system\Config\AutoloadConfig.php`
- Type: PHP
- Size: 6344 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

AUTOLOADER CONFIGURATION
This file defines the namespaces and class maps so the Autoloader
can find the files as needed.

-------------------------------------------------------------------
Namespaces
-------------------------------------------------------------------
This maps the locations of any namespaces in your application to
their location on the file system. These are used by the autoloader
to locate files the first time they have been instantiated.
The '/app' and '/system' directories are already mapped for you.
you may change the name of the 'App' namespace if you wish,
but this should be done prior to creating any namespaced classes,
else you will need to modify all of those classes for this to work.
@var array<string, string>

-------------------------------------------------------------------
Class Map
-------------------------------------------------------------------
The class map provides a map of class names and their exact
location on the drive. Classes loaded in this manner will have
slightly faster performance because they will not have to be
searched for within one or more directories as they would if they
were being autoloaded through a namespace.
@var array<string, string>

-------------------------------------------------------------------
Files
-------------------------------------------------------------------
The files array provides a list of paths to __non-class__ files
that will be autoloaded. This can be useful for bootstrap operations
or for loading functions.
@var array<int, string>

-------------------------------------------------------------------
Namespaces
-------------------------------------------------------------------
This maps the locations of any namespaces in your application to
their location on the file system. These are used by the autoloader
to locate files the first time they have been instantiated.
Do not change the name of the CodeIgniter namespace or your application
will break.
@var array<string, string>

-------------------------------------------------------------------
Class Map
-------------------------------------------------------------------
The class map provides a map of class names and their exact
location on the drive. Classes loaded in this manner will have
slightly faster performance because they will not have to be
searched for within one or more directories as they would if they
were being autoloaded through a namespace.
@var array<string, string>

-------------------------------------------------------------------
Core Files
-------------------------------------------------------------------
List of files from the framework to be autoloaded early.
@var array<int, string>

Constructor.
Merge the built-in and developer-configured psr4 and classmap,
with preference to the developer ones.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\AutoloadConfig.php`

**Classes**:
- `CodeIgniter\Config\maps`
- `CodeIgniter\Config\AutoloadConfig`
- `CodeIgniter\Config\map`
- `CodeIgniter\Config\names`
- `CodeIgniter\Config\map`
- `CodeIgniter\Config\names`

**Functions/Methods**:
- `__construct()`

