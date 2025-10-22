# system\Format\Exceptions\FormatException.php

- Path: `system\Format\Exceptions\FormatException.php`
- Type: PHP
- Size: 1737 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

FormatException

Thrown when the instantiated class does not exist.
@return FormatException

Thrown in JSONFormatter when the json_encode produces
an error code other than JSON_ERROR_NONE and JSON_ERROR_RECURSION.
@param string $error
@return FormatException

Thrown when the supplied MIME type has no
defined Formatter class.
@return FormatException

Thrown on XMLFormatter when the `simplexml` extension
is not installed.
@return FormatException
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `system\Format\Exceptions\FormatException.php`

**Classes**:
- `CodeIgniter\Format\Exceptions\FormatException extends RuntimeException implements ExceptionInterface`
- `CodeIgniter\Format\Exceptions\does`

**Functions/Methods**:
- `forInvalidFormatter(string $class)`
- `forInvalidJSON(?string $error = null)`
- `forInvalidMime(string $mime)`
- `forMissingExtension()`

