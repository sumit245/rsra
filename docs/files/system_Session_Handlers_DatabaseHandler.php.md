# system\Session\Handlers\DatabaseHandler.php

- Path: `system\Session\Handlers\DatabaseHandler.php`
- Type: PHP
- Size: 7106 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base database session handler
Do not use this class. Use database specific handler class.

The database group to use for storage.
@var string

The name of the table to store session info.
@var string

The DB Connection instance.
@var BaseConnection

The database type
@var string

Row exists flag
@var bool

@throws SessionException

Re-initialize existing session, or creates a new one.
@param string $path The path where to store/retrieve the session
@param string $name The session name

Reads the session data from the session storage, and returns the results.
@param string $id The session ID
@return false|string Returns an encoded string of the read data.
                     If nothing was read, it must return false.

Sets SELECT clause

Decodes column data
@param mixed $data
@return false|string

Writes the session data to the session storage.
@param string $id   The session ID
@param string $data The encoded session data

Prepare data to insert/update

Closes the current session.

Destroys a session
@param string $id The session ID being destroyed

Cleans up expired sessions.
@param int $max_lifetime Sessions that have not updated
                         for the last max_lifetime seconds will be removed.
@return false|int Returns the number of deleted sessions on success, or false on failure.

Releases the lock, if any.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\DatabaseHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\DatabaseHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `setSelect(BaseBuilder $builder)`
- `decodeData($data)`
- `write($id, $data)`
- `prepareData(string $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `releaseLock()`

