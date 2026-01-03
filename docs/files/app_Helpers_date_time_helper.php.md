# app\Helpers\date_time_helper.php

- Path: `app\Helpers\date_time_helper.php`
- Type: PHP
- Size: 16556 bytes

## Summary (from docblocks)

get user's time zone offset 

@return active users timezone

convert a local time to UTC 

@param string $date
@param string $format
@return utc date

get current utc time

@param string $format
@return utc date

convert a UTC time to local timezon as defined on users setting

@param string $date_time
@param string $format
@return local date

get current users local time

@param string $format
@return local date

convert time string to 24 hours format 
01:00 AM will be converted as 13:00:00 

@param string $time  required time format = 01:00 AM/PM
@return 24hrs time

convert time string to 12 hours format 
13:00:00 will be converted as 01:00 AM

@param string $time  required time format =  00:00:00
@return 12hrs time

prepare a decimal value from a time string

@param string $time  required time format =  00:00:00
@return number

prepare a human readable time format from a decimal value of seconds

@param string $seconds
@return time

get seconds form a given time string

@param string $time
@return seconds

convert a datetime string to relative time 
ex: $date_time = "2015-01-01 23:10:00" will return like this: Today at 23:10 PM

@param string $date_time .. it will be considered as UTC time.
@param string $convert_to_local .. to prevent conversion, pass $convert_to_local=false 
@return date time

convert a datetime string to date format as defined on settings
ex: $date_time = "2015-01-01 23:10:00" will return like this: Today at 23:10 PM

@param string $date_time .. it will be considered as UTC time.
@param string $convert_to_local .. to prevent conversion, pass $convert_to_local=false 
@return date

convert a datetime string to 12 hours time format

@param string $date_time .. it will be considered as UTC time.
@param string $convert_to_local .. to prevent conversion, pass $convert_to_local=false 
@return time

convert a datetime string to datetime format as defined on settings

@param string $date_time .. it will be considered as UTC time.
@param string $convert_to_local .. to prevent conversion, pass $convert_to_local=false 
@return date time

return users local time (today)

@return date

return users local time (tomorrow)

@return date

add days with a given date

$date should be Y-m-d
$period_type should be days/months/years/weeks

@return date

subtract days from a given date

$date should be Y-m-d
$period_type should be days/months/years/weeks/hours

@return date

get date difference in days

$start_date && $end_date should be Y-m-d format

@return difference in days

is online user? if the last online <= 1 minute then we'll assume that the user is online

$start_date && $end_date 

@return boolean

Check if the date string is not empty.

$date 

@return boolean

Convert date from d/m/Y or m/d/Y or any user format to Y-m-d for SQL
@param string $date Date in user-readable format
@return string|null Date in Y-m-d or null if invalid

## References

**Database Tables (inferred)**
- `a`
- `humanize`
- `minutes`
- `d`

## Symbols

# Symbols

**Files documented**: 1

## `app\Helpers\date_time_helper.php`

**Functions/Methods**:
- `get_timezone_offset($date = "now")`
- `convert_date_local_to_utc($date = "", $format = "Y-m-d H:i:s")`
- `get_current_utc_time($format = "Y-m-d H:i:s")`
- `convert_date_utc_to_local($date_time, $format = "Y-m-d H:i:s")`
- `get_my_local_time($format = "Y-m-d H:i:s")`
- `convert_time_to_24hours_format($time = "00:00 AM")`
- `convert_time_to_12hours_format($time = "")`
- `convert_time_string_to_decimal($time = "00:00:00")`
- `convert_seconds_to_time_format($seconds = 0)`
- `convert_time_string_to_second($time = "00:00:00")`
- `format_to_relative_time($date_time, $convert_to_local = true, $is_short_date = false)`
- `format_to_date($date_time, $convert_to_local = true)`
- `format_to_time($date_time, $convert_to_local = true)`
- `format_to_datetime($date_time, $convert_to_local = true)`
- `get_today_date()`
- `get_tomorrow_date()`
- `add_period_to_date($date, $no_of = 0, $period_type = "days", $format = "Y-m-d")`
- `subtract_period_from_date($date, $no_of = 0, $period_type = "days", $format = "Y-m-d")`
- `get_date_difference_in_days($start_date, $end_date)`
- `is_online_user($last_online = "")`
- `is_date_exists($date = "")`
- `convert_humanize_data_to_hours($hours = "")`
- `convert_hours_to_humanize_data($hours = "")`
- `prepare_last_recently_date_time($login_user_id = 0)`
- `to_sql_date($date)`

