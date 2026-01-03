# system\Log\Handlers\BaseHandler.php

- Path: `system\Log\Handlers\BaseHandler.php`
- Type: PHP
- Size: 1486 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Base class for logging

Handles
@var array

Date format for logging
@var string

Constructor

Checks whether the Handler will handle logging items of this
log Level.

Handles logging the message.
If the handler returns false, then execution of handlers
will stop. Any handlers that have not run, yet, will not
be run.
@param string $level
@param string $message

Stores the date format to use while logging messages.

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\for`
- `CodeIgniter\Log\Handlers\BaseHandler implements HandlerInterface`

**Functions/Methods**:
- `__construct(array $config)`
- `canHandle(string $level)`
- `handle($level, $message)`
- `setDateFormat(string $format)`

