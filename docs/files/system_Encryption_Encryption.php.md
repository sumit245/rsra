# system\Encryption\Encryption.php

- Path: `system\Encryption\Encryption.php`
- Type: PHP
- Size: 4152 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CodeIgniter Encryption Manager
Provides two-way keyed encryption via PHP's Sodium and/or OpenSSL extensions.
This class determines the driver, cipher, and mode to use, and then
initializes the appropriate encryption handler.

The encrypter we create
@var EncrypterInterface

The driver being used
@var string

The key/seed being used
@var string

The derived HMAC key
@var string

HMAC digest to use
@var string

Map of drivers to handler classes, in preference order
@var array

Handlers that are to be installed
@var array<string, boolean>

@throws EncryptionException

Initialize or re-initialize an encrypter
@throws EncryptionException
@return EncrypterInterface

Create a random key
@param int $length Output length
@return string

__get() magic, providing readonly access to some of our protected properties
@param string $key Property name
@return mixed

__isset() magic, providing checking for some of our protected properties
@param string $key Property name

## Symbols

# Symbols

**Files documented**: 1

## `system\Encryption\Encryption.php`

**Classes**:
- `CodeIgniter\Encryption\determines`
- `CodeIgniter\Encryption\Encryption`

**Functions/Methods**:
- `__construct(?EncryptionConfig $config = null)`
- `initialize(?EncryptionConfig $config = null)`
- `createKey($length = 32)`
- `__get($key)`
- `__isset($key)`

