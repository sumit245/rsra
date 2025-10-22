# system\Log\Logger.php

- Path: `system\Log\Logger.php`
- Type: PHP
- Size: 11436 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The CodeIgntier Logger
The message MUST be a string or object implementing __toString().
The message MAY contain placeholders in the form: {foo} where foo
will be replaced by the context data in key "foo".
The context array can contain arbitrary data, the only assumption that
can be made by implementors is that if an Exception instance is given
to produce a stack trace, it MUST be in a key named "exception".

Used by the logThreshold Config setting to define
which errors to show.
@var array<string, integer>

Array of levels to be logged.
The rest will be ignored.
Set in Config/logger.php
@var array

File permissions
@var int

Format of the timestamp for log files.
@var string

Filename Extension
@var string

Caches instances of the handlers.
@var array

Holds the configuration for each handler.
The key is the handler's class name. The
value is an associative array of configuration
items.
@var array

Caches logging calls for debugbar.
@var array

Should we cache our logged items?
@var bool

Constructor.
@param \Config\Logger $config
@throws RuntimeException

System is unusable.
@param string $message

Action must be taken immediately.
Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.
@param string $message

Critical conditions.
Example: Application component unavailable, unexpected exception.
@param string $message

Runtime errors that do not require immediate action but should typically
be logged and monitored.
@param string $message

Exceptional occurrences that are not errors.
Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.
@param string $message

Normal but significant events.
@param string $message

Interesting events.
Example: User logs in, SQL logs.
@param string $message

Detailed debug information.
@param string $message

Logs with an arbitrary level.
@param mixed  $level
@param string $message

@var HandlerInterface $handler

Replaces any placeholders in the message with variables
from the context, as well as a few special items like:
{session_vars}
{post_vars}
{get_vars}
{env}
{env:foo}
{file}
{line}
@param mixed $message
@return mixed

Determines the file and line that the logging call
was made from by analyzing the backtrace.
Find the earliest stack frame that is part of our logging system.

Cleans the paths of filenames by replacing APPPATH, SYSTEMPATH, FCPATH
with the actual var. i.e.
 /var/www/site/app/Controllers/Home.php
     becomes:
 APPPATH/Controllers/Home.php
@deprecated Use dedicated `clean_path()` function.

## References

**Database Tables (inferred)**
- `the`
- `if`
- `by`

## Symbols

# Symbols

**Files documented**: 1

## `system\Log\Logger.php`

**Classes**:
- `CodeIgniter\Log\Logger implements LoggerInterface`
- `CodeIgniter\Log\name`
- `CodeIgniter\Log\method`

**Functions/Methods**:
- `__construct($config, bool $debug = CI_DEBUG)`
- `emergency($message, array $context = [])`
- `alert($message, array $context = [])`
- `critical($message, array $context = [])`
- `error($message, array $context = [])`
- `warning($message, array $context = [])`
- `notice($message, array $context = [])`
- `info($message, array $context = [])`
- `debug($message, array $context = [])`
- `log($level, $message, array $context = [])`
- `interpolate($message, array $context = [])`
- `determineFile()`
- `cleanFileNames(string $file)`

