# system\Encryption\Handlers\BaseHandler.php

- Path: `system\Encryption\Handlers\BaseHandler.php`
- Type: PHP
- Size: 1861 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base class for encryption handling

Logger instance to record error messages and warnings.
@var LoggerInterface

Constructor

Byte-safe substr()
@param string $str
@param int    $start
@param int    $length
@return string

__get() magic, providing readonly access to some of our properties
@param string $key Property name
@return mixed

__isset() magic, providing checking for some of our properties
@param string $key Property name

## Symbols

# Symbols

**Files documented**: 1

## `system\Encryption\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Encryption\Handlers\for`
- `CodeIgniter\Encryption\Handlers\BaseHandler implements EncrypterInterface`

**Functions/Methods**:
- `__construct(?Encryption $config = null)`
- `substr($str, $start, $length = null)`
- `__get($key)`
- `__isset($key)`

