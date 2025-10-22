# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Date.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Date.php`
- Type: PHP
- Size: 19030 bytes

## Summary (from docblocks)

constants

Names of the months of the year, indexed by shortname
Planned usage for locale settings.
@var string[]

@var string[]

Base calendar year to use for calculations
Value is either CALENDAR_WINDOWS_1900 (1900) or CALENDAR_MAC_1904 (1904).
@var int

Default timezone to use for DateTime objects.
@var null|DateTimeZone

Set the Excel calendar (Windows 1900 or Mac 1904).
@param int $baseYear Excel base date (1900 or 1904)
@return bool Success or failure

Return the Excel calendar (Windows 1900 or Mac 1904).
@return int Excel base date (1900 or 1904)

Set the Default timezone to use for dates.
@param null|DateTimeZone|string $timeZone The timezone to set for all Excel datetimestamp to PHP DateTime Object conversions
@return bool Success or failure

Return the Default timezone, or UTC if default not set.

Return the Default timezone, or local timezone if default is not set.

Return the Default timezone even if null.

Validate a timezone.
@param null|DateTimeZone|string $timeZone The timezone to validate, either as a timezone string or object
@return ?DateTimeZone The timezone as a timezone object

@param mixed $value
@return float|int

Convert a MS serialized datetime value from Excel to a PHP Date/Time object.
@param float|int $excelTimestamp MS Excel serialized date/time value
@param null|DateTimeZone|string $timeZone The timezone to assume for the Excel timestamp,
                                                                       if you don't want to treat it as a UTC value
                                                                   Use the default (UTC) unless you absolutely need a conversion
@return DateTime PHP date/time object

Convert a MS serialized datetime value from Excel to a unix timestamp.
The use of Unix timestamps, and therefore this function, is discouraged.
They are not Y2038-safe on a 32-bit system, and have no timezone info.
@param float|int $excelTimestamp MS Excel serialized date/time value
@param null|DateTimeZone|string $timeZone The timezone to assume for the Excel timestamp,
                                                                       if you don't want to treat it as a UTC value
                                                                   Use the default (UTC) unless you absolutely need a conversion
@return int Unix timetamp for this date/time

Convert a date from PHP to an MS Excel serialized date/time value.
@param mixed $dateValue PHP DateTime object or a string - Unix timestamp is also permitted, but discouraged;
   not Y2038-safe on a 32-bit system, and no timezone info
@return false|float Excel date/time value
                                 or boolean FALSE on failure

Convert a PHP DateTime object to an MS Excel serialized date/time value.
@param DateTimeInterface $dateValue PHP DateTime object
@return float MS Excel serialized date/time value

Convert a Unix timestamp to an MS Excel serialized date/time value.
The use of Unix timestamps, and therefore this function, is discouraged.
They are not Y2038-safe on a 32-bit system, and have no timezone info.
@param int $unixTimestamp Unix Timestamp
@return false|float MS Excel serialized date/time value

formattedPHPToExcel.
@param int $year
@param int $month
@param int $day
@param int $hours
@param int $minutes
@param int $seconds
@return float Excel date/time value

Is a given cell a date/time?
@return bool

Is a given number format a date/time?
@return bool

Is a given number format code a date/time?
@param string $excelFormatCode
@return bool

Convert a date/time string to Excel time.
@param string $dateValue Examples: '2009-12-31', '2009-12-31 15:59', '2009-12-31 15:59:10'
@return false|float Excel date/time serial value

Converts a month name (either a long or a short name) to a month number.
@param string $monthName Month name or abbreviation
@return int|string Month number (1 - 12), or the original string argument if it isn't a valid month name

Strips an ordinal from a numeric value.
@param string $day Day number with an ordinal
@return int|string The integer value with any ordinal stripped, or the original string argument if it isn't a valid numeric

## References

**Database Tables (inferred)**
- `Excel`
- `PHP`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\Date.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\Date`

**Functions/Methods**:
- `setExcelCalendar($baseYear)`
- `getExcelCalendar()`
- `setDefaultTimezone($timeZone)`
- `getDefaultTimezone()`
- `getDefaultOrLocalTimezone()`
- `getDefaultTimezoneOrNull()`
- `validateTimeZone($timeZone)`
- `convertIsoDate($value)`
- `excelToDateTimeObject($excelTimestamp, $timeZone = null)`
- `excelToTimestamp($excelTimestamp, $timeZone = null)`
- `PHPToExcel($dateValue)`
- `dateTimeToExcel(DateTimeInterface $dateValue)`
- `timestampToExcel($unixTimestamp)`
- `formattedPHPToExcel($year, $month, $day, $hours = 0, $minutes = 0, $seconds = 0)`
- `isDateTime(Cell $cell)`
- `isDateTimeFormat(NumberFormat $excelFormatCode)`
- `isDateTimeFormatCode($excelFormatCode)`
- `stringToExcel($dateValue)`
- `monthStringToNumber($monthName)`
- `dayStringToNumber($day)`
- `dateTimeFromTimestamp(string $date, ?DateTimeZone $timeZone = null)`
- `formattedDateTimeFromTimestamp(string $date, string $format, ?DateTimeZone $timeZone = null)`

