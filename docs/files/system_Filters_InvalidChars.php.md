# system\Filters\InvalidChars.php

- Path: `system\Filters\InvalidChars.php`
- Type: PHP
- Size: 2889 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

InvalidChars filter.
Check if user input data ($_GET, $_POST, $_COOKIE, php://input) do not contain
invalid characters:
  - invalid UTF-8 characters
  - control characters except line break and tab code

Data source
@var string

Regular expressions for valid control codes
@var string

Check invalid characters.
@param array|null $arguments
@return void

We don't have anything to do here.
@param array|null $arguments
@return void

Check the character encoding is valid UTF-8.
@param array|string $value
@return array|string

Check for the presence of control characters except line breaks and tabs.
@param array|string $value
@return array|string

## Symbols

# Symbols

**Files documented**: 1

## `system\Filters\InvalidChars.php`

**Classes**:
- `CodeIgniter\Filters\InvalidChars implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`
- `checkEncoding($value)`
- `checkControl($value)`

