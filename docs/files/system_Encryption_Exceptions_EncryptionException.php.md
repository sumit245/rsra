# system\Encryption\Exceptions\EncryptionException.php

- Path: `system\Encryption\Exceptions\EncryptionException.php`
- Type: PHP
- Size: 2103 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Encryption exception

Thrown when no driver is present in the active encryption session.
@return static

Thrown when the handler requested is not available.
@return static

Thrown when the handler requested is unknown.
@param string $driver
@return static

Thrown when no starter key is provided for the current encryption session.
@return static

Thrown during data decryption when a problem or error occurred.
@return static

Thrown during data encryption when a problem or error occurred.
@return static

## Symbols

# Symbols

**Files documented**: 1

## `system\Encryption\Exceptions\EncryptionException.php`

**Classes**:
- `CodeIgniter\Encryption\Exceptions\EncryptionException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forNoDriverRequested()`
- `forNoHandlerAvailable(string $handler)`
- `forUnKnownHandler(?string $driver = null)`
- `forNeedsStarterKey()`
- `forAuthenticationFailed()`
- `forEncryptionFailed()`

