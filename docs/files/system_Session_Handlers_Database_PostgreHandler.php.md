# system\Session\Handlers\Database\PostgreHandler.php

- Path: `system\Session\Handlers\Database\PostgreHandler.php`
- Type: PHP
- Size: 2424 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Session handler for Postgre

Sets SELECT clause

Decodes column data
@param mixed $data
@return false|string

Prepare data to insert/update

Cleans up expired sessions.
@param int $max_lifetime Sessions that have not updated
                         for the last max_lifetime seconds will be removed.
@return false|int Returns the number of deleted sessions on success, or false on failure.

Lock the session.

Releases the lock, if any.

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\Database\PostgreHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\Database\PostgreHandler extends DatabaseHandler`

**Functions/Methods**:
- `setSelect(BaseBuilder $builder)`
- `decodeData($data)`
- `prepareData(string $data)`
- `gc($max_lifetime)`
- `lockSession(string $sessionID)`
- `releaseLock()`

