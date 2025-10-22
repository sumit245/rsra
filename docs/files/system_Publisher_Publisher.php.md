# system\Publisher\Publisher.php

- Path: `system\Publisher\Publisher.php`
- Type: PHP
- Size: 12730 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Publishers read in file paths from a variety of sources and copy
the files out to different destinations. This class acts both as
a base for individual publication directives as well as the mode
of discovery for said instances. In this class a "file" is a full
path to a verified file while a "path" is relative to its source
or destination and may indicate either a file or directory of
unconfirmed existence.
Class failures throw the PublisherException, but some underlying
methods may percolate different exceptions, like FileException,
FileNotFoundException or InvalidArgumentException.
Write operations will catch all errors in the file-specific
$errors property to minimize impact of partial batch operations.

Array of discovered Publishers.
@var array<string, self[]|null>

Directory to use for methods that need temporary storage.
Created on-the-fly as needed.

Exceptions for specific files from the last write operation.
@var array<string, Throwable>

List of file published curing the last write operation.
@var string[]

List of allowed directories and their allowed files regex.
Restrictions are intentionally private to prevent overriding.
@var array<string,string>

Base path to use for the source.
@var string

Base path to use for the destination.
@var string

Discovers and returns all Publishers in the specified namespace directory.
@return self[]

@var FileLocator $locator

Removes a directory and all its files and subdirectories.

Loads the helper and verifies the source and destination directories.

Cleans up any temporary files in the scratch space.

Reads files from the sources and copies them out to their destinations.
This method should be reimplemented by child classes intended for
discovery.
@throws RuntimeException

Returns the source directory.

Returns the destination directory.

Returns the temporary workspace, creating it if necessary.

Returns errors from the last write operation if any.
@return array<string,Throwable>

Returns the files published by the last write operation.
@return string[]

Verifies and adds paths to the list.
@param string[] $paths
@return $this

Adds a single path to the file list.
@return $this

Downloads and stages files from an array of URIs.
@param string[] $uris
@return $this

Downloads a file from the URI, and adds it to the file list.
@param string $uri Because HTTP\URI is stringable it will still be accepted
@return $this

Removes the destination and all its files and folders.
@return $this

Copies all files into the destination, does not create directory structure.
@param bool $replace Whether to overwrite existing files.
@return bool Whether all files were copied successfully

Merges all files into the destination.
Creates a mirrored directory structure only for files from source.
@param bool $replace Whether to overwrite existing files.
@return bool Whether all files were copied successfully

Copies a file with directory creation and identical file awareness.
Intentionally allows errors.
@throws PublisherException For collisions and restriction violations

## References

**Database Tables (inferred)**
- `a`
- `the`
- `an`
- `source`

## Symbols

# Symbols

**Files documented**: 1

## `system\Publisher\Publisher.php`

**Classes**:
- `CodeIgniter\Publisher\acts`
- `CodeIgniter\Publisher\a`
- `CodeIgniter\Publisher\Publisher extends FileCollection`

**Functions/Methods**:
- `discover(string $directory = 'Publishers')`
- `wipeDirectory(string $directory)`
- `__construct(?string $source = null, ?string $destination = null)`
- `__destruct()`
- `publish()`
- `getSource()`
- `getDestination()`
- `getScratch()`
- `getErrors()`
- `getPublished()`
- `addPaths(array $paths, bool $recursive = true)`
- `addPath(string $path, bool $recursive = true)`
- `addUris(array $uris)`
- `addUri(string $uri)`
- `wipe()`
- `copy(bool $replace = true)`
- `merge(bool $replace = true)`
- `safeCopyFile(string $from, string $to, bool $replace)`

