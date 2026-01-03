# system\Validation\FileRules.php

- Path: `system\Validation\FileRules.php`
- Type: PHP
- Size: 6654 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

File validation rules

Request instance. So we can get access to the files.
@var RequestInterface

Constructor.
@param RequestInterface $request

Verifies that $name is the name of a valid uploaded file.

Verifies if the file's size in Kilobytes is no larger than the parameter.

Uses the mime config file to determine if a file is considered an "image",
which for our purposes basically means that it's a raster image or svg.

Checks to see if an uploaded file's mime type matches one in the parameter.

Checks to see if an uploaded file's extension matches one in the parameter.

Checks an uploaded file to verify that the dimensions are within
a specified allowable dimension.

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\FileRules.php`

**Classes**:
- `CodeIgniter\Validation\FileRules`

**Functions/Methods**:
- `__construct(?RequestInterface $request = null)`
- `uploaded(?string $blank, string $name)`
- `max_size(?string $blank, string $params)`
- `is_image(?string $blank, string $params)`
- `mime_in(?string $blank, string $params)`
- `ext_in(?string $blank, string $params)`
- `max_dims(?string $blank, string $params)`

