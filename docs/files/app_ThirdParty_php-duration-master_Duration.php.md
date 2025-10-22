# app\ThirdParty\php-duration-master\Duration.php

- Path: `app\ThirdParty\php-duration-master\Duration.php`
- Type: PHP
- Size: 9402 bytes

## Summary (from docblocks)

Duration constructor.
@param int|float|string|null $duration

Attempt to parse one of the forms of duration.
@param  int|float|string|null $duration A string or number, representing a duration
@return self|bool returns the Duration object if successful, otherwise false

Returns the duration as an amount of seconds.
For example, one hour and 42 minutes would be "6120"
@param  int|float|string $duration A string or number, representing a duration
@param  int|bool $precision Number of decimal digits to round to. If set to false, the number is not rounded.
@return int|float

Returns the duration as an amount of minutes.
For example, one hour and 42 minutes would be "102" minutes
@param  int|float|string $duration A string or number, representing a duration
@param  int|bool $precision Number of decimal digits to round to. If set to false, the number is not rounded.
@return int|float

Returns the duration as a colon formatted string
For example, one hour and 42 minutes would be "1:43"
With $zeroFill to true :
  - 42 minutes would be "0:42:00"
  - 28 seconds would be "0:00:28"
@param  int|float|string|null $duration A string or number, representing a duration
@param  bool $zeroFill A boolean, to force zero-fill result or not (see example)
@return string

Returns the duration as a human-readable string.
For example, one hour and 42 minutes would be "1h 42m"
@param  int|float|string $duration A string or number, representing a duration
@return string

Resets the Duration object by clearing the output and values.
@access private
@return void

Returns the output of the Duration object and resets.
@access private
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-duration-master\Duration.php`

**Classes**:
- `Khill\Duration\Duration`

**Functions/Methods**:
- `__construct($duration = null, $hoursPerDay = 24)`
- `parse($duration)`
- `toSeconds($duration = null, $precision = false)`
- `toMinutes($duration = null, $precision = false)`
- `formatted($duration = null, $zeroFill = false)`
- `humanize($duration = null)`
- `numberBreakdown($number, $returnUnsigned = false)`
- `reset()`
- `output()`

