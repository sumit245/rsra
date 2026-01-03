# app\Config\Mimes.php

- Path: `app\Config\Mimes.php`
- Type: PHP
- Size: 15570 bytes

## Summary (from docblocks)

Mimes
This file contains an array of mime types.  It is used by the
Upload class to help identify allowed file types.
When more than one variation for an extension exist (like jpg, jpeg, etc)
the most common one should be first in the array to aid the guess*
methods. The same applies when more than one mime-type exists for a
single extension.
When working with mime types, please make sure you have the ´fileinfo´
extension enabled to reliably detect the media types.

Map of extensions to mime types.
@var array

Attempts to determine the best mime type for the given file extension.
@return string|null The mime type found, or none if unable to determine.

Attempts to determine the best file extension for a given mime type.
@param string|null $proposedExtension - default extension (in case there is more than one with the same mime type)
@return string|null The extension determined, or null if unable to match.

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Mimes.php`

**Classes**:
- `Config\to`
- `Config\Mimes`

**Functions/Methods**:
- `guessTypeFromExtension(string $extension)`
- `guessExtensionFromType(string $type, ?string $proposedExtension = null)`

