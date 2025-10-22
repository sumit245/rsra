# system\Encryption\Handlers\SodiumHandler.php

- Path: `system\Encryption\Handlers\SodiumHandler.php`
- Type: PHP
- Size: 3468 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

SodiumHandler uses libsodium in encryption.
@see https://github.com/jedisct1/libsodium/issues/392

Starter key
@var string

Block size for padding message.
@var int

{@inheritDoc}

{@inheritDoc}

Parse the $params before doing assignment.
@param array|string|null $params
@throws EncryptionException If key is empty

## References

**Database Tables (inferred)**
- `encrypted`

## Symbols

# Symbols

**Files documented**: 1

## `system\Encryption\Handlers\SodiumHandler.php`

**Classes**:
- `CodeIgniter\Encryption\Handlers\SodiumHandler extends BaseHandler`

**Functions/Methods**:
- `encrypt($data, $params = null)`
- `decrypt($data, $params = null)`
- `parseParams($params)`

