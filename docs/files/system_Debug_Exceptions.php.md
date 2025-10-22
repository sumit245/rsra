# system\Debug\Exceptions.php

- Path: `system\Debug\Exceptions.php`
- Type: PHP
- Size: 15585 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Exceptions manager

Nesting level of the output buffering mechanism
@var int

The path to the directory containing the
cli and html error view directories.
@var string

Config for debug exceptions.
@var ExceptionsConfig

The incoming request.
@var IncomingRequest

The outgoing response.
@var Response

Responsible for registering the error, exception and shutdown
handling of our application.
@codeCoverageIgnore

Catches any uncaught errors and exceptions, including most Fatal errors
(Yay PHP7!). Will log the error, display it if display_errors is on,
and fire an event that allows custom actions to be taken at this point.
@codeCoverageIgnore

Even in PHP7, some errors make it through to the errorHandler, so
convert these to Exceptions and let the exception handler log it and
display it.
This seems to be primarily when a user triggers it with trigger_error().
@throws ErrorException
@codeCoverageIgnore

Checks to see if any errors have happened during shutdown that
need to be caught and handle them.
@codeCoverageIgnore

Determines the view to display based on the exception thrown,
whether an HTTP or CLI request, etc.
@return string The path and filename of the view file to use

Given an exception and status code will display the error to the client.

Gathers the variables that will be made available to the view.

Mask sensitive data in the trace.
@param array|object $trace

Determines the HTTP status code and the exit status code for this request.

This makes nicer looking paths for the error output.
@deprecated Use dedicated `clean_path()` function.

Describes memory usage in real-world units. Intended for use
with memory_get_usage, etc.

Creates a syntax-highlighted version of a PHP file.
@return bool|string

## Symbols

# Symbols

**Files documented**: 1

## `system\Debug\Exceptions.php`

**Classes**:
- `CodeIgniter\Debug\Exceptions`

**Functions/Methods**:
- `__construct(ExceptionsConfig $config, IncomingRequest $request, Response $response)`
- `initialize()`
- `exceptionHandler(Throwable $exception)`
- `errorHandler(int $severity, string $message, ?string $file = null, ?int $line = null)`
- `shutdownHandler()`
- `determineView(Throwable $exception, string $templatePath)`
- `render(Throwable $exception, int $statusCode)`
- `collectVars(Throwable $exception, int $statusCode)`
- `maskSensitiveData(&$trace, array $keysToMask, string $path = '')`
- `determineCodes(Throwable $exception)`
- `cleanPath(string $file)`
- `describeMemory(int $bytes)`
- `highlightFile(string $file, int $lineNumber, int $lines = 15)`
- `renderBacktrace(array $backtrace)`

