# system\Autoloader\Autoloader.php

- Path: `system\Autoloader\Autoloader.php`
- Type: PHP
- Size: 10502 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

An autoloader that uses both PSR4 autoloading, and traditional classmaps.
Given a foo-bar package of classes in the file system at the following paths:
```
     /path/to/packages/foo-bar/
         /src
             Baz.php         # Foo\Bar\Baz
             Qux/
                 Quux.php    # Foo\Bar\Qux\Quux
```
you can add the path to the configuration array that is passed in the constructor.
The Config array consists of 2 primary keys, both of which are associative arrays:
'psr4', and 'classmap'.
```
     $Config = [
         'psr4' => [
             'Foo\Bar'   => '/path/to/packages/foo-bar'
         ],
         'classmap' => [
             'MyClass'   => '/path/to/class/file.php'
         ]
     ];
```
Example:
```
     <?php
     // our configuration array
     $Config = [ ... ];
     $loader = new \CodeIgniter\Autoloader\Autoloader($Config);
     // register the autoloader
     $loader->register();
```

Stores namespaces as key, and path as values.
@var array<string, array<string>>

Stores class name as key, and path as values.
@var array<string, string>

Stores files as a list.
@var array<int, string>

Reads in the configuration array (described above) and stores
the valid parts that we'll need.
@return $this

@var ClassLoader $composer

Register the loader with the SPL autoloader stack.

Registers namespaces with the autoloader.
@param array|string $namespace
@return $this

Get namespaces with prefixes as keys and paths as values.
If a prefix param is set, returns only paths to the given prefix.
@return array

Removes a single namespace from the psr4 settings.
@return $this

Load a class using available class mapping.
@return false|string

Loads the class file for a given class name.
@param string $class The fully qualified class name.
@return false|string The mapped file on success, or boolean false
                     on failure.

Loads the class file for a given class name.
@param string $class The fully-qualified class name
@return false|string The mapped file name on success, or boolean false on fail

A central way to include a file. Split out primarily for testing purposes.
@return false|string The filename on success, false if the file is not loaded

Sanitizes a filename, replacing spaces with dashes.
Removes special characters that are illegal in filenames on certain
operating systems and special characters requiring special escaping
to manipulate at the command line. Replaces spaces and consecutive
dashes with a single dash. Trim period, dash and underscore from beginning
and end of filename.
@return string The sanitized filename

Locates autoload information from Composer, if available.
@deprecated No longer used.

@var ClassLoader $composer

## References

**Database Tables (inferred)**
- `the`
- `beginning`
- `Composer`

## Symbols

# Symbols

**Files documented**: 1

## `system\Autoloader\Autoloader.php`

**Classes**:
- `CodeIgniter\Autoloader\Autoloader`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\map`
- `CodeIgniter\Autoloader\files`
- `CodeIgniter\Autoloader\using`
- `CodeIgniter\Autoloader\mapping`
- `CodeIgniter\Autoloader\file`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\The`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\file`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\The`
- `CodeIgniter\Autoloader\name`

**Functions/Methods**:
- `initialize(Autoload $config, Modules $modules)`
- `loadComposerInfo(Modules $modules)`
- `register()`
- `addNamespace($namespace, ?string $path = null)`
- `getNamespace(?string $prefix = null)`
- `removeNamespace(string $namespace)`
- `loadClassmap(string $class)`
- `loadClass(string $class)`
- `loadInNamespace(string $class)`
- `includeFile(string $file)`
- `sanitizeFilename(string $filename)`
- `loadComposerNamespaces(ClassLoader $composer)`
- `loadComposerClassmap(ClassLoader $composer)`
- `discoverComposerNamespaces()`

