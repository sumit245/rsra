# system\Exceptions\DebugTraceableTrait.php

- Path: `system\Exceptions\DebugTraceableTrait.php`
- Type: PHP
- Size: 1118 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

This trait provides framework exceptions the ability to pinpoint
accurately where the exception was raised rather than instantiated.
This is used primarily for factory-instantiated exceptions.

Tweaks the exception's constructor to assign the file/line to where
it is actually raised rather than were it is instantiated.

## Symbols

# Symbols

**Files documented**: 1

## `system\Exceptions\DebugTraceableTrait.php`

**Functions/Methods**:
- `__construct(string $message = '', int $code = 0, ?Throwable $previous = null)`

