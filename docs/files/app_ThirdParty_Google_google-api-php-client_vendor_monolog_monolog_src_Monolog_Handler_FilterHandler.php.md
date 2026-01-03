# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FilterHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FilterHandler.php`
- Type: PHP
- Size: 4425 bytes

## Summary (from docblocks)

Simple handler wrapper that filters records based on a list of levels
It can be configured with an exact list of levels to allow, or a min/max level.
@author Hennadiy Verkh
@author Jordi Boggiano <j.boggiano@seld.be>

Handler or factory callable($record, $this)
@var callable|\Monolog\Handler\HandlerInterface

Minimum level for logs that are passed to handler
@var int[]

Whether the messages that are handled can bubble up the stack or not
@var Boolean

@param callable|HandlerInterface $handler        Handler or factory callable($record, $this).
@param int|array                 $minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
@param int                       $maxLevel       Maximum level to accept, only used if $minLevelOrList is not an array
@param Boolean                   $bubble         Whether the messages that are handled can bubble up the stack or not

@return array

@param int|string|array $minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
@param int|string       $maxLevel       Maximum level or level name to accept, only used if $minLevelOrList is not an array

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FilterHandler.php`

**Classes**:
- `Monolog\Handler\FilterHandler extends AbstractHandler`

**Functions/Methods**:
- `__construct($handler, $minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY, $bubble = true)`
- `getAcceptedLevels()`
- `setAcceptedLevels($minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY)`
- `isHandling(array $record)`
- `handle(array $record)`
- `handleBatch(array $records)`

