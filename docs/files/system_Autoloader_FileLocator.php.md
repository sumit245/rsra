# system\Autoloader\FileLocator.php

- Path: `system\Autoloader\FileLocator.php`
- Type: PHP
- Size: 11167 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Allows loading non-class files in a namespaced manner.
Works with Helpers, Views, etc.

The Autoloader to use.
@var Autoloader

Attempts to locate a file by examining the name for a namespace
and looking through the PSR-4 namespaced files that we know about.
@param string      $file   The namespaced file to locate
@param string|null $folder The folder within the namespace that we should look for the file.
@param string      $ext    The file extension the file should have.
@return false|string The path to the file, or false if not found.

Examines a file and returns the fully qualified class name.

Searches through all of the defined namespaces looking for a file.
Returns an array of all found locations for the defined file.
Example:
 $locator->search('Config/Routes.php');
 // Assuming PSR4 namespaces include foo and bar, might return:
 [
     'app/Modules/foo/Config/Routes.php',
     'app/Modules/bar/Config/Routes.php',
 ]

Ensures a extension is at the end of a filename

Return the namespace mappings we know about.
@return array<int, array<string, string>>

Find the qualified name of a file according to
the namespace of the first matched namespace path.
@return false|string The qualified name or false if the path is not found

Scans the defined namespaces, returning a list of all files
that are contained within the subpath specified by $path.
@return string[] List of file paths

Scans the provided namespace, returning a list of all files
that are contained within the sub path specified by $path.
@return string[] List of file paths

Checks the app folder to see if the file can be found.
Only for use with filenames that DO NOT include namespacing.
@return false|string The path to the file, or false if not found.

## Symbols

# Symbols

**Files documented**: 1

## `system\Autoloader\FileLocator.php`

**Classes**:
- `CodeIgniter\Autoloader\files`
- `CodeIgniter\Autoloader\FileLocator`
- `CodeIgniter\Autoloader\name`

**Functions/Methods**:
- `__construct(Autoloader $autoloader)`
- `locateFile(string $file, ?string $folder = null, string $ext = 'php')`
- `getClassname(string $file)`
- `search(string $path, string $ext = 'php', bool $prioritizeApp = true)`
- `ensureExt(string $path, string $ext)`
- `getNamespaces()`
- `findQualifiedNameFromPath(string $path)`
- `listFiles(string $path)`
- `listNamespaceFiles(string $prefix, string $path)`
- `legacyLocate(string $file, ?string $folder = null)`

