# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\ErrorHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\ErrorHandler.php`
- Type: PHP
- Size: 8057 bytes

## Summary (from docblocks)

Monolog error handler
A facility to enable logging of runtime errors, exceptions and fatal errors.
Quick setup: <code>ErrorHandler::register($logger);</code>
@author Jordi Boggiano <j.boggiano@seld.be>

Registers a new ErrorHandler for a given Logger
By default it will handle errors, exceptions and fatal errors
@param  LoggerInterface $logger
@param  array|false     $errorLevelMap  an array of E_* constant to LogLevel::* constant mapping, or false to disable error handling
@param  int|false       $exceptionLevel a LogLevel::* constant, or false to disable exception handling
@param  int|false       $fatalLevel     a LogLevel::* constant, or false to disable fatal error handling
@return ErrorHandler

@private

@private

@private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\ErrorHandler.php`

**Classes**:
- `Monolog\ErrorHandler`

**Functions/Methods**:
- `__construct(LoggerInterface $logger)`
- `register(LoggerInterface $logger, $errorLevelMap = array()`
- `registerExceptionHandler($level = null, $callPrevious = true)`
- `registerErrorHandler(array $levelMap = array()`
- `registerFatalHandler($level = null, $reservedMemorySize = 20)`
- `defaultErrorLevelMap()`
- `handleException($e)`
- `handleError($code, $message, $file = '', $line = 0, $context = array()`
- `handleFatalError()`
- `codeToString($code)`

