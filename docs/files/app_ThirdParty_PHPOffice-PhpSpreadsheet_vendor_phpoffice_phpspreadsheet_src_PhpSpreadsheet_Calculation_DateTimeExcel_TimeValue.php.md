# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeValue.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeValue.php`
- Type: PHP
- Size: 3390 bytes

## Summary (from docblocks)

TIMEVALUE.
Returns a value that represents a particular time.
Use TIMEVALUE to convert a time represented by a text string to an Excel or PHP date/time stamp
value.
NOTE: When used in a Cell Formula, MS Excel changes the cell format so that it matches the time
format of your regional settings. PhpSpreadsheet does not change cell formatting in this way.
Excel Function:
       TIMEVALUE(timeValue)
@param array|string $timeValue A text string that represents a time in any one of the Microsoft
                                   Excel time formats; for example, "6:45 PM" and "18:45" text strings
                                   within quotation marks that represent time.
                                   Date information in time_text is ignored.
                        Or can be an array of date/time values
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

@var int

@var int

@var int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\TimeValue.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\TimeValue`

**Functions/Methods**:
- `fromString($timeValue)`

