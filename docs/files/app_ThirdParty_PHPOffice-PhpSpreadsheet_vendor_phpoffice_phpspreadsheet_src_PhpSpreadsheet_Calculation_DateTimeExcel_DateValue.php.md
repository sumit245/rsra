# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateValue.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateValue.php`
- Type: PHP
- Size: 6633 bytes

## Summary (from docblocks)

DATEVALUE.
Returns a value that represents a particular date.
Use DATEVALUE to convert a date represented by a text string to an Excel or PHP date/time stamp
value.
NOTE: When used in a Cell Formula, MS Excel changes the cell format so that it matches the date
format of your regional settings. PhpSpreadsheet does not change cell formatting in this way.
Excel Function:
       DATEVALUE(dateValue)
@param array|string $dateValue Text that represents a date in a Microsoft Excel date format.
                                   For example, "1/30/2008" or "30-Jan-2008" are text strings within
                                   quotation marks that represent dates. Using the default date
                                   system in Excel for Windows, date_text must represent a date from
                                   January 1, 1900, to December 31, 9999. Using the default date
                                   system in Excel for the Macintosh, date_text must represent a date
                                   from January 1, 1904, to December 31, 9999. DATEVALUE returns the
                                   #VALUE! error value if date_text is out of this range.
                        Or can be an array of date values
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag
        If an array of numbers is passed as the argument, then the returned result will also be an array
           with the same dimensions

Parse date.

Final results.
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag

## References

**Database Tables (inferred)**
- `January`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\DateTimeExcel\DateValue.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\DateValue`

**Functions/Methods**:
- `fromString($dateValue)`
- `t1ToString(array $t1, DateTimeImmutable $dti, bool $yearFound)`
- `setUpArray(string $dateValue, DateTimeImmutable $dti)`
- `finalResults(array $PHPDateArray, DateTimeImmutable $dti, int $baseYear)`

