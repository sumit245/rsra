# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BrowserConsoleHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BrowserConsoleHandler.php`
- Type: PHP
- Size: 7162 bytes

## Summary (from docblocks)

Handler sending logs to browser's javascript console with no browser extension required
@author Olivier Poitrey <rs@dailymotion.com>

{@inheritDoc}
Formatted output may contain some formatting markers to be transferred to `console.log` using the %c format.
Example of formatted string:
    You can do [[blue text]]{color: blue} or [[green background]]{background-color: green; color: white}

{@inheritDoc}

Convert records to javascript console commands and send it to the browser.
This method is automatically called on PHP shutdown if output is HTML or Javascript.

Forget all logged records

Wrapper for register_shutdown_function to allow overriding

Wrapper for echo to allow overriding
@param string $str

Checks the format of the response
If Content-Type is set to application/javascript or text/javascript -> js
If Content-Type is set to text/html, or is unset -> html
If Content-Type is anything else -> unknown
@return string One of 'js', 'html' or 'unknown'

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\BrowserConsoleHandler.php`

**Classes**:
- `Monolog\Handler\BrowserConsoleHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `getDefaultFormatter()`
- `write(array $record)`
- `send()`
- `reset()`
- `registerShutdownFunction()`
- `writeOutput($str)`
- `getResponseFormat()`
- `generateScript()`
- `handleStyles($formatted)`
- `handleCustomStyles($style, $string)`
- `dump($title, array $dict)`
- `quote($arg)`
- `call()`
- `call_array($method, array $args)`

