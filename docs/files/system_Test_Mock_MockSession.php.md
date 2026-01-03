# system\Test\Mock\MockSession.php

- Path: `system\Test\Mock\MockSession.php`
- Type: PHP
- Size: 1643 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class MockSession
Provides a safe way to test the Session class itself,
that doesn't interact with the session or cookies at all.

Holds our "cookie" data.
@var Cookie[]

Sets the driver as the session handler in PHP.
Extracted for easier testing.

Starts the session.
Extracted for testing reasons.

Takes care of setting the cookie on the client side.
Extracted for testing reasons.

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Mock\MockSession.php`

**Classes**:
- `CodeIgniter\Test\Mock\itself`
- `CodeIgniter\Test\Mock\MockSession extends Session`

**Functions/Methods**:
- `setSaveHandler()`
- `startSession()`
- `setCookie()`
- `regenerate(bool $destroy = false)`

