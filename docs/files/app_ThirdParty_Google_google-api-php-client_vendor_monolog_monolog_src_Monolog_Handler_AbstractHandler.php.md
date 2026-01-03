# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AbstractHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AbstractHandler.php`
- Type: PHP
- Size: 4127 bytes

## Summary (from docblocks)

Base Handler class providing the Handler structure
@author Jordi Boggiano <j.boggiano@seld.be>

@var FormatterInterface

@param int     $level  The minimum logging level at which this handler will be triggered
@param Boolean $bubble Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

{@inheritdoc}

Closes the handler.
This will be called automatically when the object is destroyed

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

Sets minimum logging level at which this handler will be triggered.
@param  int|string $level Level or level name
@return self

Gets minimum logging level at which this handler will be triggered.
@return int

Sets the bubbling behavior.
@param  Boolean $bubble true means that this handler allows bubbling.
                        false means that bubbling is not permitted.
@return self

Gets the bubbling behavior.
@return Boolean true means that this handler allows bubbling.
                false means that bubbling is not permitted.

Gets the default formatter.
@return FormatterInterface

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AbstractHandler.php`

**Classes**:
- `Monolog\Handler\providing`
- `Monolog\Handler\AbstractHandler implements HandlerInterface`

**Functions/Methods**:
- `__construct($level = Logger::DEBUG, $bubble = true)`
- `isHandling(array $record)`
- `handleBatch(array $records)`
- `close()`
- `pushProcessor($callback)`
- `popProcessor()`
- `setFormatter(FormatterInterface $formatter)`
- `getFormatter()`
- `setLevel($level)`
- `getLevel()`
- `setBubble($bubble)`
- `getBubble()`
- `__destruct()`
- `getDefaultFormatter()`

