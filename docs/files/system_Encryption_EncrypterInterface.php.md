# system\Encryption\EncrypterInterface.php

- Path: `system\Encryption\EncrypterInterface.php`
- Type: PHP
- Size: 1131 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CodeIgniter Encryption Handler
Provides two-way keyed encryption

Encrypt - convert plaintext into ciphertext
@param string            $data   Input data
@param array|string|null $params Overridden parameters, specifically the key
@throws EncryptionException
@return string

Decrypt - convert ciphertext into plaintext
@param string            $data   Encrypted data
@param array|string|null $params Overridden parameters, specifically the key
@throws EncryptionException
@return string

## Symbols

# Symbols

**Files documented**: 1

## `system\Encryption\EncrypterInterface.php`

**Functions/Methods**:
- `encrypt($data, $params = null)`
- `decrypt($data, $params = null)`

