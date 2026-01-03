# system\I18n\Time.php

- Path: `system\I18n\Time.php`
- Type: PHP
- Size: 31041 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

A localized date/time package inspired
by Nesbot/Carbon and CakePHP/Chronos.
Requires the intl PHP extension.
@property string $date

@var DateTimeZone

@var string

Format to use when displaying datetime through __toString
@var string

Used to check time string to determine if it is relative time or not....
@var string

@var DateTimeInterface|static|null

Time constructor.
@param DateTimeZone|string|null $timezone
@throws Exception

Returns a new Time instance with the timezone set.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns a new Time instance while parsing a datetime string.
Example:
 $time = Time::parse('first day of December 2008');
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Return a new time with the time set to midnight.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns an instance set to midnight yesterday morning.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns an instance set to midnight tomorrow morning.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns a new instance based on the year, month and day. If any of those three
are left empty, will default to the current value.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns a new instance with the date set to today, and the time set to the values passed in.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns a new instance with the date time values individually set.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Provides a replacement for DateTime's own createFromFormat function, that provides
more flexible timeZone handling
@param string                   $format
@param string                   $datetime
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Returns a new instance with the datetime set based on the provided UNIX timestamp.
@param DateTimeZone|string|null $timezone
@throws Exception
@return Time

Takes an instance of DateTimeInterface and returns an instance of Time with it's same values.
@throws Exception
@return Time

Takes an instance of DateTime and returns an instance of Time with it's same values.
@throws Exception
@return Time
@deprecated         Use createFromInstance() instead
@codeCoverageIgnore

Converts the current instance to a mutable DateTime object.
@throws Exception
@return DateTime

Creates an instance of Time that will be returned during testing
when calling 'Time::now' instead of the current time.
@param DateTimeInterface|string|Time|null $datetime
@param DateTimeZone|string|null           $timezone
@throws Exception

Returns whether we have a testNow instance saved.

Returns the localized Year
@throws Exception

Returns the localized Month
@throws Exception

Return the localized day of the month.
@throws Exception

Return the localized hour (in 24-hour format).
@throws Exception

Return the localized minutes in the hour.
@throws Exception

Return the localized seconds
@throws Exception

Return the index of the day of the week
@throws Exception

Return the index of the day of the year
@throws Exception

Return the index of the week in the month
@throws Exception

Return the index of the week in the year
@throws Exception

Returns the age in years from the "current" date and 'now'
@throws Exception
@return int

Returns the number of the current quarter for the year.
@throws Exception

Are we in daylight savings time currently?

Returns boolean whether the passed timezone is the same as
the local timezone.

Returns boolean whether object is in UTC.

Returns the name of the current timezone.

Sets the current year for this instance.
@param int|string $value
@throws Exception
@return Time

Sets the month of the year.
@param int|string $value
@throws Exception
@return Time

Sets the day of the month.
@param int|string $value
@throws Exception
@return Time

Sets the hour of the day (24 hour cycle)
@param int|string $value
@throws Exception
@return Time

Sets the minute of the hour
@param int|string $value
@throws Exception
@return Time

Sets the second of the minute.
@param int|string $value
@throws Exception
@return Time

Helper method to do the heavy lifting of the 'setX' methods.
@param int $value
@throws Exception
@return Time

Returns a new instance with the revised timezone.
@param DateTimeZone|string $timezone
@throws Exception
@return Time

Returns a new instance with the date set to the new timestamp.
@param int $timestamp
@throws Exception
@return Time

Returns a new Time instance with $seconds added to the time.
@return static

Returns a new Time instance with $minutes added to the time.
@return static

Returns a new Time instance with $hours added to the time.
@return static

Returns a new Time instance with $days added to the time.
@return static

Returns a new Time instance with $months added to the time.
@return static

Returns a new Time instance with $years added to the time.
@return static

Returns a new Time instance with $seconds subtracted from the time.
@return static

Returns a new Time instance with $minutes subtracted from the time.
@return static

Returns a new Time instance with $hours subtracted from the time.
@return static

Returns a new Time instance with $days subtracted from the time.
@return static

Returns a new Time instance with $months subtracted from the time.
@return static

Returns a new Time instance with $hours subtracted from the time.
@return static

Returns the localized value of the date in the format 'Y-m-d H:i:s'
@throws Exception

Returns a localized version of the date in Y-m-d format.
@throws Exception
@return string

Returns a localized version of the date in nicer date format:
 i.e. Apr 1, 2017
@throws Exception
@return string

Returns a localized version of the time in nicer date format:
 i.e. 13:20:33
@throws Exception
@return string

Returns the localized value of this instance in $format.
@throws Exception
@return bool|string

Determines if the datetime passed in is equal to the current instance.
Equal in this case means that they represent the same moment in time,
and are not required to be in the same timezone, as both times are
converted to UTC and compared that way.
@param DateTimeInterface|string|Time $testTime
@throws Exception

Ensures that the times are identical, taking timezone into account.
@param DateTimeInterface|string|Time $testTime
@throws Exception

Determines if the current instance's time is before $testTime,
after converting to UTC.
@param mixed $testTime
@throws Exception

Determines if the current instance's time is after $testTime,
after converting in UTC.
@param mixed $testTime
@throws Exception

Returns a text string that is easily readable that describes
how long ago, or how long from now, a date is, like:
 - 3 weeks ago
 - in 4 days
 - 6 hours ago
@throws Exception
@return mixed

@param mixed $testTime
@throws Exception
@return TimeDifference

Returns a Time instance with the timezone converted to UTC.
@param mixed $time
@throws Exception
@return DateTime|static

Returns the IntlCalendar object used for this object,
taking into account the locale, date, etc.
Primarily used internally to provide the difference and comparison functions,
but available for public consumption if they need it.
@throws Exception
@return IntlCalendar

Check a time string to see if it includes a relative date (like 'next Tuesday').

Outputs a short format version of the datetime.
@throws Exception

Allow for property-type access to any getX method...
Note that we cannot use this for any of our setX methods,
as they return new Time objects, but the __set ignores
return values.
See http://php.net/manual/en/language.oop5.overloading.php
@param string $name
@return mixed

Allow for property-type checking to any getX method...
@param string $name

This is called when we unserialize the Time object.

Prior to unserialization, this is a string.
@var string $timezone

## References

**Database Tables (inferred)**
- `the`
- `now`

## Symbols

# Symbols

**Files documented**: 1

## `system\I18n\Time.php`

**Classes**:
- `CodeIgniter\I18n\Time extends DateTime`

**Functions/Methods**:
- `__construct(?string $time = null, $timezone = null, ?string $locale = null)`
- `now($timezone = null, ?string $locale = null)`
- `parse(string $datetime, $timezone = null, ?string $locale = null)`
- `today($timezone = null, ?string $locale = null)`
- `yesterday($timezone = null, ?string $locale = null)`
- `tomorrow($timezone = null, ?string $locale = null)`
- `createFromDate(?int $year = null, ?int $month = null, ?int $day = null, $timezone = null, ?string $locale = null)`
- `createFromTime(?int $hour = null, ?int $minutes = null, ?int $seconds = null, $timezone = null, ?string $locale = null)`
- `create(?int $year = null, ?int $month = null, ?int $day = null, ?int $hour = null, ?int $minutes = null, ?int $seconds = null, $timezone = null, ?string $locale = null)`
- `createFromFormat($format, $datetime, $timezone = null)`
- `createFromTimestamp(int $timestamp, $timezone = null, ?string $locale = null)`
- `createFromInstance(DateTimeInterface $dateTime, ?string $locale = null)`
- `instance(DateTime $dateTime, ?string $locale = null)`
- `toDateTime()`
- `setTestNow($datetime = null, $timezone = null, ?string $locale = null)`
- `hasTestNow()`
- `getYear()`
- `getMonth()`
- `getDay()`
- `getHour()`
- `getMinute()`
- `getSecond()`
- `getDayOfWeek()`
- `getDayOfYear()`
- `getWeekOfMonth()`
- `getWeekOfYear()`
- `getAge()`
- `getQuarter()`
- `getDst()`
- `getLocal()`
- `getUtc()`
- `getTimezoneName()`
- `setYear($value)`
- `setMonth($value)`
- `setDay($value)`
- `setHour($value)`
- `setMinute($value)`
- `setSecond($value)`
- `setValue(string $name, $value)`
- `setTimezone($timezone)`
- `setTimestamp($timestamp)`
- `addSeconds(int $seconds)`
- `addMinutes(int $minutes)`
- `addHours(int $hours)`
- `addDays(int $days)`
- `addMonths(int $months)`
- `addYears(int $years)`
- `subSeconds(int $seconds)`
- `subMinutes(int $minutes)`
- `subHours(int $hours)`
- `subDays(int $days)`
- `subMonths(int $months)`
- `subYears(int $years)`
- `toDateTimeString()`
- `toDateString()`
- `toFormattedDateString()`
- `toTimeString()`
- `toLocalizedString(?string $format = null)`
- `equals($testTime, ?string $timezone = null)`
- `sameAs($testTime, ?string $timezone = null)`
- `isBefore($testTime, ?string $timezone = null)`
- `isAfter($testTime, ?string $timezone = null)`
- `humanize()`
- `difference($testTime, ?string $timezone = null)`
- `getUTCObject($time, ?string $timezone = null)`
- `getCalendar()`
- `hasRelativeKeywords(string $time)`
- `__toString()`
- `__get($name)`
- `__isset($name)`
- `__wakeup()`

