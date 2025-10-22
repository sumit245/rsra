# system\Test\TestLogger.php

- Path: `system\Test\TestLogger.php`
- Type: PHP
- Size: 2199 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The log method is overridden so that we can store log history during
the tests to allow us to check ->assertLogged() methods.
@param string $level
@param string $message

Used by CIUnitTestCase class to provide ->assertLogged() methods.
@param string $message
@return bool

Expose filenames.
@param string $file
@deprecated No longer needed as underlying protected method is also deprecated.

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\TestLogger.php`

**Classes**:
- `CodeIgniter\Test\TestLogger extends Logger`
- `CodeIgniter\Test\to`

**Functions/Methods**:
- `log($level, $message, array $context = [])`
- `didLog(string $level, $message)`
- `cleanup($file)`

