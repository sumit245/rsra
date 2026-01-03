# system\Files\File.php

- Path: `system\Files\File.php`
- Type: PHP
- Size: 5969 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Wrapper for PHP's built-in SplFileInfo, with goodies.

The files size in bytes
@var int

@var string|null

Run our SplFileInfo constructor with an optional verification
that the path is really a file.
@throws FileNotFoundException

Retrieve the file size.
Implementations SHOULD return the value stored in the "size" key of
the file in the $_FILES array if available, as PHP calculates this based
on the actual size transmitted.
@return false|int The file size in bytes, or false on failure

Retrieve the file size by unit.
@return false|int|string

Attempts to determine the file extension based on the trusted
getType() method. If the mime type is unknown, will return null.

Retrieve the media type of the file. SHOULD not use information from
the $_FILES array, but should use other methods to more accurately
determine the type of file, like finfo, or mime_content_type().
@return string The media type we determined it to be.

Generates a random names based on a simple hash and the time, with
the correct file extension attached.

Moves a file to a new location.
@return File

Returns the destination path for the move operation where overwriting is not expected.
First, it checks whether the delimiter is present in the filename, if it is, then it checks whether the
last element is an integer as there may be cases that the delimiter may be present in the filename.
For the all other cases, it appends an integer starting from zero before the file's extension.

## References

**Database Tables (inferred)**
- `zero`

## Symbols

# Symbols

**Files documented**: 1

## `system\Files\File.php`

**Classes**:
- `CodeIgniter\Files\File extends SplFileInfo`

**Functions/Methods**:
- `__construct(string $path, bool $checkFile = false)`
- `getSize()`
- `getSizeByUnit(string $unit = 'b')`
- `guessExtension()`
- `getMimeType()`
- `getRandomName()`
- `move(string $targetPath, ?string $name = null, bool $overwrite = false)`
- `getDestination(string $destination, string $delimiter = '_', int $i = 0)`

