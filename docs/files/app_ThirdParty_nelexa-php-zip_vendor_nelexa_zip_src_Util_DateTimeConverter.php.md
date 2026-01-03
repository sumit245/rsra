# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\DateTimeConverter.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\DateTimeConverter.php`
- Type: PHP
- Size: 3600 bytes

## Summary (from docblocks)

Convert unix timestamp values to DOS date/time values and vice versa.
The DOS date/time format is a bitmask:
24                16                 8                 0
+-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+
|Y|Y|Y|Y|Y|Y|Y|M| |M|M|M|D|D|D|D|D| |h|h|h|h|h|m|m|m| |m|m|m|s|s|s|s|s|
+-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+-+-+
\___________/\________/\_________/ \________/\____________/\_________/
year        month       day      hour       minute        second
The year is stored as an offset from 1980.
Seconds are stored in two-second increments.
(So if the "second" value is 15, it actually represents 30 seconds.)
@see https://docs.microsoft.com/ru-ru/windows/win32/api/winbase/nf-winbase-filetimetodosdatetime?redirectedfrom=MSDN
@internal

Smallest supported DOS date/time value in a ZIP file,
which is January 1st, 1980 AD 00:00:00 local time.
@var int

Largest supported DOS date/time value in a ZIP file,
which is December 31st, 2107 AD 23:59:58 local time.
@var int

Convert a 32 bit integer DOS date/time value to a UNIX timestamp value.
@param int $dosTime Dos date/time
@return int Unix timestamp

Converts a UNIX timestamp value to a DOS date/time value.
@param int $unixTimestamp the number of seconds since midnight, January 1st,
                          1970 AD UTC
@return int a DOS date/time value reflecting the local time zone and
            rounded down to even seconds
            and is in between DateTimeConverter::MIN_DOS_TIME and DateTimeConverter::MAX_DOS_TIME

## References

**Database Tables (inferred)**
- `1980`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Util\DateTimeConverter.php`

**Classes**:
- `PhpZip\Util\DateTimeConverter`

**Functions/Methods**:
- `msDosToUnix(int $dosTime)`
- `unixToMsDos(int $unixTimestamp)`

