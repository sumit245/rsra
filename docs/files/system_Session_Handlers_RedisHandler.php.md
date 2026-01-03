# system\Session\Handlers\RedisHandler.php

- Path: `system\Session\Handlers\RedisHandler.php`
- Type: PHP
- Size: 9271 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Session handler using Redis for persistence

phpRedis instance
@var Redis|null

Key prefix
@var string

Lock key
@var string|null

Key exists flag
@var bool

Number of seconds until the session ends.
@var int

@throws SessionException

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

Acquires an emulated lock.
@param string $sessionID Session ID

Releases a previously acquired lock

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\RedisHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\RedisHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `lockSession(string $sessionID)`
- `releaseLock()`

