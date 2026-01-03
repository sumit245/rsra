# system\Cache\Handlers\FileHandler.php

- Path: `system\Cache\Handlers\FileHandler.php`
- Type: PHP
- Size: 11861 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

File system cache handler

Maximum key length.

Where to store cached files on the disk.
@var string

Mode for the stored files.
Must be chmod-safe (octal).
@var int
@see https://www.php.net/manual/en/function.chmod.php

@throws CacheException

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

{@inheritDoc}

Does the heavy lifting of actually retrieving the file and
verifying it's age.
@return mixed

Writes a file to disk, or returns false if not successful.
@param string $path
@param string $data
@param string $mode
@return bool

Deletes all files contained in the supplied directory path.
Files must be writable or owned by the system in order to be deleted.
If the second parameter is set to TRUE, any directories contained
within the supplied base directory will be nuked as well.
@param string $path   File path
@param bool   $delDir Whether to delete any directories found in the path
@param bool   $htdocs Whether to skip deleting .htaccess and index page files
@param int    $_level Current directory depth level (default: 0; internal use only)

Reads the specified directory and builds an array containing the filenames,
filesize, dates, and permissions
Any sub-folders contained within the specified path are read as well.
@param string $sourceDir    Path to source
@param bool   $topLevelOnly Look only at the top level directory specified?
@param bool   $_recursion   Internal variable to determine recursion status - do not use in calls
@return array|false

Given a file and path, returns the name, path, size, date modified
Second parameter allows you to explicitly declare what information you want returned
Options are: name, server_path, size, date, readable, writable, executable, fileperms
Returns FALSE if the file cannot be found.
@param string $file           Path to file
@param mixed  $returnedValues Array or comma separated string of information returned
@return array|false

## Symbols

# Symbols

**Files documented**: 1

## `system\Cache\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`
- `getItem(string $filename)`
- `writeFile($path, $data, $mode = 'wb')`
- `deleteFiles(string $path, bool $delDir = false, bool $htdocs = false, int $_level = 0)`
- `getDirFileInfo(string $sourceDir, bool $topLevelOnly = true, bool $_recursion = false)`
- `getFileInfo(string $file, $returnedValues = ['name', 'server_path', 'size', 'date'])`

