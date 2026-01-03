# system\I18n\Exceptions\I18nException.php

- Path: `system\I18n\Exceptions\I18nException.php`
- Type: PHP
- Size: 2385 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

I18nException

Thrown when createFromFormat fails to receive a valid
DateTime back from DateTime::createFromFormat.
@return static

Thrown when the numeric representation of the month falls
outside the range of allowed months.
@return static

Thrown when the supplied day falls outside the range
of allowed days.
@return static

Thrown when the day provided falls outside the allowed
last day for the given month.
@return static

Thrown when the supplied hour falls outside the
range of allowed hours.
@return static

Thrown when the supplied minutes falls outside the
range of allowed minutes.
@return static

Thrown when the supplied seconds falls outside the
range of allowed seconds.
@return static

## References

**Database Tables (inferred)**
- `DateTime`

## Symbols

# Symbols

**Files documented**: 1

## `system\I18n\Exceptions\I18nException.php`

**Classes**:
- `CodeIgniter\I18n\Exceptions\I18nException extends FrameworkException`

**Functions/Methods**:
- `forInvalidFormat(string $format)`
- `forInvalidMonth(string $month)`
- `forInvalidDay(string $day)`
- `forInvalidOverDay(string $lastDay, string $day)`
- `forInvalidHour(string $hour)`
- `forInvalidMinutes(string $minutes)`
- `forInvalidSeconds(string $seconds)`

