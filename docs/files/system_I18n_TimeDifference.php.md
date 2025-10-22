# system\I18n\TimeDifference.php

- Path: `system\I18n\TimeDifference.php`
- Type: PHP
- Size: 6998 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class TimeDifference

The timestamp of the "current" time.
@var IntlCalendar

The timestamp to compare the current time to.
@var float

Eras.
@var float

Years.
@var float

Months.
@var float

Weeks.
@var int

Days.
@var int

Hours.
@var int

Minutes.
@var int

Seconds.
@var int

Difference in seconds.
@var int

Note: both parameters are required to be in the same timezone. No timezone
shifting is done internally.

Returns the number of years of difference between the two.
@return float|int

Returns the number of months difference between the two dates.
@return float|int

Returns the number of weeks difference between the two dates.
@return float|int

Returns the number of days difference between the two dates.
@return float|int

Returns the number of hours difference between the two dates.
@return float|int

Returns the number of minutes difference between the two dates.
@return float|int

Returns the number of seconds difference between the two dates.
@return int

Convert the time to human readable format

Allow property-like access to our calculated values.
@param string $name
@return mixed

Allow property-like checking for our calculated values.
@param string $name
@return bool

## Symbols

# Symbols

**Files documented**: 1

## `system\I18n\TimeDifference.php`

**Classes**:
- `CodeIgniter\I18n\TimeDifference`

**Functions/Methods**:
- `__construct(DateTime $currentTime, DateTime $testTime)`
- `getYears(bool $raw = false)`
- `getMonths(bool $raw = false)`
- `getWeeks(bool $raw = false)`
- `getDays(bool $raw = false)`
- `getHours(bool $raw = false)`
- `getMinutes(bool $raw = false)`
- `getSeconds(bool $raw = false)`
- `humanize(?string $locale = null)`
- `__get($name)`
- `__isset($name)`

