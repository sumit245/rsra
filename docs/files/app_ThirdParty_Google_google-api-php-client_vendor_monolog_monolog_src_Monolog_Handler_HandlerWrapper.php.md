# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerWrapper.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerWrapper.php`
- Type: PHP
- Size: 2156 bytes

## Summary (from docblocks)

This simple wrapper class can be used to extend handlers functionality.
Example: A custom filtering that can be applied to any handler.
Inherit from this class and override handle() like this:
  public function handle(array $record)
  {
       if ($record meets certain conditions) {
           return false;
       }
       return $this->handler->handle($record);
  }
@author Alexey Karapetov <alexey@karapetov.com>

@var HandlerInterface

HandlerWrapper constructor.
@param HandlerInterface $handler

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HandlerWrapper.php`

**Classes**:
- `Monolog\Handler\can`
- `Monolog\Handler\and`
- `Monolog\Handler\HandlerWrapper implements HandlerInterface`

**Functions/Methods**:
- `handle(array $record)`
- `__construct(HandlerInterface $handler)`
- `isHandling(array $record)`
- `handle(array $record)`
- `handleBatch(array $records)`
- `pushProcessor($callback)`
- `popProcessor()`
- `setFormatter(FormatterInterface $formatter)`
- `getFormatter()`

