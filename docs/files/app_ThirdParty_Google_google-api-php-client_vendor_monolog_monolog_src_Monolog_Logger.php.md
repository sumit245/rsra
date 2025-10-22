# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Logger.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Logger.php`
- Type: PHP
- Size: 19304 bytes

## Summary (from docblocks)

Monolog log channel
It contains a stack of Handlers and a stack of Processors,
and uses them to store records that are added to it.
@author Jordi Boggiano <j.boggiano@seld.be>

Detailed debug information

Interesting events
Examples: User logs in, SQL logs.

Uncommon events

Exceptional occurrences that are not errors
Examples: Use of deprecated APIs, poor use of an API,
undesirable things that are not necessarily wrong.

Runtime errors

Critical conditions
Example: Application component unavailable, unexpected exception.

Action must be taken immediately
Example: Entire website down, database unavailable, etc.
This should trigger the SMS alerts and wake you up.

Urgent alert.

Monolog API version
This is only bumped when API breaks are done and should
follow the major version of the library
@var int

Logging levels from syslog protocol defined in RFC 5424
@var array $levels Logging levels

@var \DateTimeZone

@var string

The handler stack
@var HandlerInterface[]

Processors that will process all log records
To process records of a single handler instead, add the processor on that specific handler
@var callable[]

@var bool

@param string             $name       The logging channel
@param HandlerInterface[] $handlers   Optional stack of handlers, the first one in the array is called first, etc.
@param callable[]         $processors Optional array of processors

@return string

Return a new cloned instance with the name changed
@return static

Pushes a handler on to the stack.
@param  HandlerInterface $handler
@return $this

Pops a handler from the stack
@return HandlerInterface

Set handlers, replacing all existing ones.
If a map is passed, keys will be ignored.
@param  HandlerInterface[] $handlers
@return $this

@return HandlerInterface[]

Adds a processor on to the stack.
@param  callable $callback
@return $this

Removes the processor on top of the stack and returns it.
@return callable

@return callable[]

Control the use of microsecond resolution timestamps in the 'datetime'
member of new records.
Generating microsecond resolution timestamps by calling
microtime(true), formatting the result via sprintf() and then parsing
the resulting string via \DateTime::createFromFormat() can incur
a measurable runtime overhead vs simple usage of DateTime to capture
a second resolution timestamp in systems which generate a large number
of log events.
@param bool $micro True to use microtime() to create timestamps

Adds a log record.
@param  int     $level   The logging level
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the DEBUG level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the INFO level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the NOTICE level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the WARNING level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the ERROR level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the CRITICAL level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the ALERT level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the EMERGENCY level.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Gets all supported logging levels.
@return array Assoc array with human-readable level names => level codes.

Gets the name of the logging level.
@param  int    $level
@return string

Converts PSR-3 levels to Monolog ones if necessary
@param string|int Level number (monolog) or name (PSR-3)
@return int

Checks whether the Logger has a handler that listens on the given level
@param  int     $level
@return Boolean

Adds a log record at an arbitrary level.
This method allows for compatibility with common interfaces.
@param  mixed   $level   The log level
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the DEBUG level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the INFO level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the NOTICE level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the WARNING level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the WARNING level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the ERROR level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the ERROR level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the CRITICAL level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the CRITICAL level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the ALERT level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the EMERGENCY level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Adds a log record at the EMERGENCY level.
This method allows for compatibility with common interfaces.
@param  string  $message The log message
@param  array   $context The log context
@return Boolean Whether the record has been processed

Set the timezone to be used for the timestamp of log records.
This is stored globally for all Logger instances
@param \DateTimeZone $tz Timezone object

## References

**Database Tables (inferred)**
- `syslog`
- `the`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Logger.php`

**Classes**:
- `Monolog\Logger implements LoggerInterface`

**Functions/Methods**:
- `__construct($name, array $handlers = array()`
- `getName()`
- `withName($name)`
- `pushHandler(HandlerInterface $handler)`
- `popHandler()`
- `setHandlers(array $handlers)`
- `getHandlers()`
- `pushProcessor($callback)`
- `popProcessor()`
- `getProcessors()`
- `useMicrosecondTimestamps($micro)`
- `addRecord($level, $message, array $context = array()`
- `addDebug($message, array $context = array()`
- `addInfo($message, array $context = array()`
- `addNotice($message, array $context = array()`
- `addWarning($message, array $context = array()`
- `addError($message, array $context = array()`
- `addCritical($message, array $context = array()`
- `addAlert($message, array $context = array()`
- `addEmergency($message, array $context = array()`
- `getLevels()`
- `getLevelName($level)`
- `toMonologLevel($level)`
- `isHandling($level)`
- `log($level, $message, array $context = array()`
- `debug($message, array $context = array()`
- `info($message, array $context = array()`
- `notice($message, array $context = array()`
- `warn($message, array $context = array()`
- `warning($message, array $context = array()`
- `err($message, array $context = array()`
- `error($message, array $context = array()`
- `crit($message, array $context = array()`
- `critical($message, array $context = array()`
- `alert($message, array $context = array()`
- `emerg($message, array $context = array()`
- `emergency($message, array $context = array()`
- `setTimezone(\DateTimeZone $tz)`

