# app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\TestLogger.php

- Path: `app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\TestLogger.php`
- Type: PHP
- Size: 4527 bytes

## Summary (from docblocks)

Used for testing purposes.
It records all records and gives you access to them for verification.
@method bool hasEmergency($record)
@method bool hasAlert($record)
@method bool hasCritical($record)
@method bool hasError($record)
@method bool hasWarning($record)
@method bool hasNotice($record)
@method bool hasInfo($record)
@method bool hasDebug($record)
@method bool hasEmergencyRecords()
@method bool hasAlertRecords()
@method bool hasCriticalRecords()
@method bool hasErrorRecords()
@method bool hasWarningRecords()
@method bool hasNoticeRecords()
@method bool hasInfoRecords()
@method bool hasDebugRecords()
@method bool hasEmergencyThatContains($message)
@method bool hasAlertThatContains($message)
@method bool hasCriticalThatContains($message)
@method bool hasErrorThatContains($message)
@method bool hasWarningThatContains($message)
@method bool hasNoticeThatContains($message)
@method bool hasInfoThatContains($message)
@method bool hasDebugThatContains($message)
@method bool hasEmergencyThatMatches($message)
@method bool hasAlertThatMatches($message)
@method bool hasCriticalThatMatches($message)
@method bool hasErrorThatMatches($message)
@method bool hasWarningThatMatches($message)
@method bool hasNoticeThatMatches($message)
@method bool hasInfoThatMatches($message)
@method bool hasDebugThatMatches($message)
@method bool hasEmergencyThatPasses($message)
@method bool hasAlertThatPasses($message)
@method bool hasCriticalThatPasses($message)
@method bool hasErrorThatPasses($message)
@method bool hasWarningThatPasses($message)
@method bool hasNoticeThatPasses($message)
@method bool hasInfoThatPasses($message)
@method bool hasDebugThatPasses($message)

@var array

@inheritdoc

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\psr\log\Psr\Log\Test\TestLogger.php`

**Classes**:
- `Psr\Log\Test\TestLogger extends AbstractLogger`

**Functions/Methods**:
- `log($level, $message, array $context = [])`
- `hasRecords($level)`
- `hasRecord($record, $level)`
- `hasRecordThatContains($message, $level)`
- `hasRecordThatMatches($regex, $level)`
- `hasRecordThatPasses(callable $predicate, $level)`
- `__call($method, $args)`
- `reset()`

