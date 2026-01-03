# system\Images\Image.php

- Path: `system\Images\Image.php`
- Type: PHP
- Size: 3159 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Encapsulation of an Image file

The original image width in pixels.
@var float|int

The original image height in pixels.
@var float|int

The image type constant.
@see http://php.net/manual/en/image.constants.php
@var int

attributes string with size info:
'height="100" width="200"'
@var string

The image's mime type, i.e. image/jpeg
@var string

Makes a copy of itself to the new location. If no filename is provided
it will use the existing filename.
@param string      $targetPath The directory to store the file in
@param string|null $targetName The new name of the copied file.
@param int         $perms      File permissions to be applied after copy.

Get image properties
A helper function that gets info about the file
@return array|bool

## Symbols

# Symbols

**Files documented**: 1

## `system\Images\Image.php`

**Classes**:
- `CodeIgniter\Images\Image extends File`

**Functions/Methods**:
- `copy(string $targetPath, ?string $targetName = null, int $perms = 0644)`
- `getProperties(bool $return = false)`

