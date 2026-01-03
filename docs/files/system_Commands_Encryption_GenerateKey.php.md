# system\Commands\Encryption\GenerateKey.php

- Path: `system\Commands\Encryption\GenerateKey.php`
- Type: PHP
- Size: 5313 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Generates a new encryption key.

The Command's group.
@var string

The Command's name.
@var string

The Command's usage.
@var string

The Command's short description.
@var string

The command's options
@var array

Actually execute the command.

Generates a key and encodes it.

Sets the new encryption key in your .env file.

Checks whether to overwrite existing encryption key.

Writes the new encryption key to .env file.

Get the regex of the current encryption key.

## Symbols

# Symbols

**Files documented**: 1

## `system\Commands\Encryption\GenerateKey.php`

**Classes**:
- `CodeIgniter\Commands\Encryption\GenerateKey extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `generateRandomKey(string $prefix, int $length)`
- `setNewEncryptionKey(string $key, array $params)`
- `confirmOverwrite(array $params)`
- `writeNewEncryptionKeyToFile(string $oldKey, string $newKey)`
- `keyPattern(string $oldKey)`

