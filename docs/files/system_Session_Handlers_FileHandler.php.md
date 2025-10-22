# system\Session\Handlers\FileHandler.php

- Path: `system\Session\Handlers\FileHandler.php`
- Type: PHP
- Size: 9330 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Session handler using file system for storage

Where to save the session files to.
@var string

The file handle
@var resource|null

File Name
@var string

Whether this is a new file.
@var bool

Whether IP addresses should be matched.
@var bool

Regex of session ID
@var string

Re-initialize existing session, or creates a new one.
@param string $path The path where to store/retrieve the session
@param string $name The session name
@throws SessionException

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

Configure Session ID regular expression

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `configureSessionIDRegex()`

