# system\Files\FileCollection.php

- Path: `system\Files\FileCollection.php`
- Type: PHP
- Size: 9607 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

File Collection Class
Representation for a group of files, with utilities for locating,
filtering, and ordering them.

The current list of file paths.
@var string[]

Resolves a full path and verifies it is an actual directory.
@throws FileException

Resolves a full path and verifies it is an actual file.
@throws FileException

Removes files that are not part of the given directory (recursive).
@param string[] $files
@return string[]

Returns any files whose `basename` matches the given pattern.
@param string[] $files
@param string   $pattern Regex or pseudo-regex string
@return string[]

Loads the Filesystem helper and adds any initial files.
@param string[] $files

Applies any initial inputs after the constructor.
This method is a stub to be implemented by child classes.

Optimizes and returns the current file list.
@return string[]

Sets the file list directly, files are still subject to verification.
This works as a "reset" method with [].
@param string[] $files The new file list to use
@return $this

Adds an array/single file or directory to the list.
@param string|string[] $paths
@return $this

Verifies and adds files to the list.
@param string[] $files
@return $this

Verifies and adds a single file to the file list.
@return $this

Removes files from the list.
@param string[] $files
@return $this

Removes a single file from the list.
@return $this

Verifies and adds files from each
directory to the list.
@param string[] $directories
@return $this

Verifies and adds all files from a directory.
@return $this

Removes any files from the list that match the supplied pattern
(within the optional scope).
@param string      $pattern Regex or pseudo-regex string
@param string|null $scope   The directory to limit the scope
@return $this

Keeps only the files from the list that match
(within the optional scope).
@param string      $pattern Regex or pseudo-regex string
@param string|null $scope   A directory to limit the scope
@return $this

Returns the current number of files in the collection.
Fulfills Countable.

Yields as an Iterator for the current files.
Fulfills IteratorAggregate.
@throws FileNotFoundException
@return Generator<File>

## References

**Database Tables (inferred)**
- `the`
- `each`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Files\FileCollection.php`

**Classes**:
- `CodeIgniter\Files\FileCollection implements Countable, IteratorAggregate`

**Functions/Methods**:
- `resolveDirectory(string $directory)`
- `resolveFile(string $file)`
- `filterFiles(array $files, string $directory)`
- `matchFiles(array $files, string $pattern)`
- `__construct(array $files = [])`
- `define()`
- `get()`
- `set(array $files)`
- `add($paths, bool $recursive = true)`
- `addFiles(array $files)`
- `addFile(string $file)`
- `removeFiles(array $files)`
- `removeFile(string $file)`
- `addDirectories(array $directories, bool $recursive = false)`
- `addDirectory(string $directory, bool $recursive = false)`
- `removePattern(string $pattern, ?string $scope = null)`
- `retainPattern(string $pattern, ?string $scope = null)`
- `count()`
- `getIterator()`

