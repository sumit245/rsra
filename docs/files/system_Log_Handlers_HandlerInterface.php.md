# system\Log\Handlers\HandlerInterface.php

- Path: `system\Log\Handlers\HandlerInterface.php`
- Type: PHP
- Size: 1000 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior for a Log handler

Handles logging the message.
If the handler returns false, then execution of handlers
will stop. Any handlers that have not run, yet, will not
be run.
@param string $level
@param string $message

Checks whether the Handler will handle logging items of this
log Level.

Sets the preferred date format to use when logging.
@return HandlerInterface

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Handlers\HandlerInterface.php`

**Functions/Methods**:
- `handle($level, $message)`
- `canHandle(string $level)`
- `setDateFormat(string $format)`

