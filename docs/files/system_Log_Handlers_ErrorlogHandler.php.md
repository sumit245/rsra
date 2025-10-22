# system\Log\Handlers\ErrorlogHandler.php

- Path: `system\Log\Handlers\ErrorlogHandler.php`
- Type: PHP
- Size: 2153 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Log handler that writes to PHP's `error_log()`

Message is sent to PHP's system logger, using the Operating System's
system logging mechanism or a file, depending on what the error_log
configuration directive is set to.

Message is sent directly to the SAPI logging handler.

Says where the error should go. Currently supported are
0 (`TYPE_OS`) and 4 (`TYPE_SAPI`).
@var int

Constructor.
@param mixed[] $config

Handles logging the message.
If the handler returns false, then execution of handlers
will stop. Any handlers that have not run, yet, will not
be run.
@param string $level
@param string $message

Extracted call to `error_log()` in order to be tested.
@codeCoverageIgnore

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Handlers\ErrorlogHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\ErrorlogHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`
- `errorLog(string $message, int $messageType)`

