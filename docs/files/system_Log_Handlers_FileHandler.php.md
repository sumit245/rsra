# system\Log\Handlers\FileHandler.php

- Path: `system\Log\Handlers\FileHandler.php`
- Type: PHP
- Size: 3305 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Log error messages to file system

Folder to hold logs
@var string

Extension to use for log files
@var string

Permissions for new log files
@var int

Constructor

Handles logging the message.
If the handler returns false, then execution of handlers
will stop. Any handlers that have not run, yet, will not
be run.
@param string $level
@param string $message
@throws Exception

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`

