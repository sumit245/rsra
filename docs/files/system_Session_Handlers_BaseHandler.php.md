# system\Session\Handlers\BaseHandler.php

- Path: `system\Session\Handlers\BaseHandler.php`
- Type: PHP
- Size: 4274 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base class for session handling

The Data fingerprint.
@var string

Lock placeholder.
@var mixed

Cookie prefix
The Config\Cookie::$prefix setting is completely ignored.
See https://codeigniter4.github.io/CodeIgniter4/libraries/sessions.html#session-preferences
@var string

Cookie domain
@var string

Cookie path
@var string

Cookie secure?
@var bool

Cookie name to use
@var string

Match IP addresses for cookies?
@var bool

Current session ID
@var string|null

The 'save path' for the session
varies between
@var array|string

User's IP address.
@var string

@var CookieConfig|null $cookie

Internal method to force removal of a cookie by the client
when session_destroy() is called.

A dummy method allowing drivers with no locking functionality
(databases other than PostgreSQL and MySQL) to act as if they
do acquire a lock.

Releases the lock, if any.

Drivers other than the 'files' one don't (need to) use the
session.save_path INI setting, but that leads to confusing
error messages emitted by PHP when open() or write() fail,
as the message contains session.save_path ...
To work around the problem, the drivers will call this method
so that the INI is set just in time for the error message to
be properly generated.

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\for`
- `CodeIgniter\Session\Handlers\BaseHandler implements SessionHandlerInterface`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `destroyCookie()`
- `lockSession(string $sessionID)`
- `releaseLock()`
- `fail()`

