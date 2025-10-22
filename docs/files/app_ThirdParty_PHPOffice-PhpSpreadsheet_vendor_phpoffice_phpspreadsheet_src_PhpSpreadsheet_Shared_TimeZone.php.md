# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\TimeZone.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\TimeZone.php`
- Type: PHP
- Size: 2142 bytes

## Summary (from docblocks)

Default Timezone used for date/time conversions.
@var string

Validate a Timezone name.
@param string $timezoneName Time zone (e.g. 'Europe/London')
@return bool Success or failure

Set the Default Timezone used for date/time conversions.
@param string $timezoneName Time zone (e.g. 'Europe/London')
@return bool Success or failure

Return the Default Timezone used for date/time conversions.
@return string Timezone (e.g. 'Europe/London')

Return the Timezone offset used for date/time conversions to/from UST
This requires both the timezone and the calculated date/time to allow for local DST.
@param ?string $timezoneName The timezone for finding the adjustment to UST
@param float|int $timestamp PHP date/time value
@return int Number of seconds for timezone adjustment

## References

**Database Tables (inferred)**
- `UST`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\TimeZone.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\TimeZone`

**Functions/Methods**:
- `validateTimeZone($timezoneName)`
- `setTimeZone($timezoneName)`
- `getTimeZone()`
- `getTimeZoneAdjustment($timezoneName, $timestamp)`

