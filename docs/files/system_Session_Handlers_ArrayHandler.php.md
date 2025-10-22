# system\Session\Handlers\ArrayHandler.php

- Path: `system\Session\Handlers\ArrayHandler.php`
- Type: PHP
- Size: 2112 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Session handler using static array for storage.
Intended only for use during testing.

Re-initialize existing session, or creates a new one.
@param string $path The path where to store/retrieve the session
@param string $name The session name

Reads the session data from the session storage, and returns the results.
@param string $id The session ID
@return false|string Returns an encoded string of the read data.
                     If nothing was read, it must return false.

Writes the session data to the session storage.
@param string $id   The session ID
@param string $data The encoded session data

Closes the current session.

Destroys a session
@param string $id The session ID being destroyed

Cleans up expired sessions.
@param int $max_lifetime Sessions that have not updated
                         for the last max_lifetime seconds will be removed.
@return false|int Returns the number of deleted sessions on success, or false on failure.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\ArrayHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\ArrayHandler extends BaseHandler`

**Functions/Methods**:
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`

