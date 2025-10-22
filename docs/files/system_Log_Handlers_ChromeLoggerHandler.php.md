# system\Log\Handlers\ChromeLoggerHandler.php

- Path: `system\Log\Handlers\ChromeLoggerHandler.php`
- Type: PHP
- Size: 3838 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class ChromeLoggerHandler
Allows for logging items to the Chrome console for debugging.
Requires the ChromeLogger extension installed in your browser.
@see https://craig.is/writing/chrome-logger

Version of this library - for ChromeLogger use.

The number of track frames returned from the backtrace.
@var int

The final data that is sent to the browser.
@var array

The header used to pass the data.
@var string

Maps the log levels to the ChromeLogger types.
@var array

Constructor

Handles logging the message.
If the handler returns false, then execution of handlers
will stop. Any handlers that have not run, yet, will not
be run.
@param string $level
@param string $message

Converts the object to display nicely in the Chrome Logger UI.
@param mixed $object
@return array

Attaches the header and the content to the passed in request object.
@param ResponseInterface $response

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Handlers\ChromeLoggerHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\ChromeLoggerHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`
- `format($object)`
- `sendLogs(?ResponseInterface &$response = null)`

