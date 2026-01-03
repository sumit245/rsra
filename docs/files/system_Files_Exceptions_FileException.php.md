# system\Files\Exceptions\FileException.php

- Path: `system\Files\Exceptions\FileException.php`
- Type: PHP
- Size: 1332 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Throws when an item is expected to be a directory but is not or is missing.
@param string $caller The method causing the exception

Throws when an item is expected to be a file but is not or is missing.
@param string $caller The method causing the exception

## Symbols

# Symbols

**Files documented**: 1

## `system\Files\Exceptions\FileException.php`

**Classes**:
- `CodeIgniter\Files\Exceptions\FileException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forUnableToMove(?string $from = null, ?string $to = null, ?string $error = null)`
- `forExpectedDirectory(string $caller)`
- `forExpectedFile(string $caller)`

