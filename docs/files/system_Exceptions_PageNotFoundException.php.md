# system\Exceptions\PageNotFoundException.php

- Path: `system\Exceptions\PageNotFoundException.php`
- Type: PHP
- Size: 1679 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Error code
@var int

Get translated system message
Use a non-shared Language instance in the Services.
If a shared instance is created, the Language will
have the current locale, so even if users call
`$this->request->setLocale()` in the controller afterwards,
the Language locale will not be changed.

## Symbols

# Symbols

**Files documented**: 1

## `system\Exceptions\PageNotFoundException.php`

**Classes**:
- `CodeIgniter\Exceptions\PageNotFoundException extends OutOfBoundsException implements ExceptionInterface`

**Functions/Methods**:
- `forPageNotFound(?string $message = null)`
- `forEmptyController()`
- `forControllerNotFound(string $controller, string $method)`
- `forMethodNotFound(string $method)`
- `lang(string $line, array $args = [])`

