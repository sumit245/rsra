# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData.php`
- Type: PHP
- Size: 11619 bytes

## Summary (from docblocks)

@deprecated 1.18.0

CHARACTER.
@Deprecated 1.18.0
@see Use the character() method in the TextData\CharacterConvert class instead
@param string $character Value
@return array|string

TRIMNONPRINTABLE.
@Deprecated 1.18.0
@see Use the nonPrintable() method in the TextData\Trim class instead
@param mixed $stringValue Value to check
@return null|array|string

TRIMSPACES.
@Deprecated 1.18.0
@see Use the spaces() method in the TextData\Trim class instead
@param mixed $stringValue Value to check
@return array|string

ASCIICODE.
@Deprecated 1.18.0
@see Use the code() method in the TextData\CharacterConvert class instead
@param array|string $characters Value
@return array|int|string A string if arguments are invalid

CONCATENATE.
@Deprecated 1.18.0
@see Use the CONCATENATE() method in the TextData\Concatenate class instead
@return string

DOLLAR.
This function converts a number to text using currency format, with the decimals rounded to the specified place.
The format used is $#,##0.00_);($#,##0.00)..
@Deprecated 1.18.0
@see Use the DOLLAR() method in the TextData\Format class instead
@param float $value The value to format
@param int $decimals The number of digits to display to the right of the decimal point.
                                   If decimals is negative, number is rounded to the left of the decimal point.
                                   If you omit decimals, it is assumed to be 2
@return array|string

FIND.
@Deprecated 1.18.0
@see Use the sensitive() method in the TextData\Search class instead
@param array|string $needle The string to look for
@param array|string $haystack The string in which to look
@param array|int $offset Offset within $haystack
@return array|int|string

SEARCH.
@Deprecated 1.18.0
@see Use the insensitive() method in the TextData\Search class instead
@param array|string $needle The string to look for
@param array|string $haystack The string in which to look
@param array|int $offset Offset within $haystack
@return array|int|string

FIXEDFORMAT.
@Deprecated 1.18.0
@see Use the FIXEDFORMAT() method in the TextData\Format class instead
@param mixed $value Value to check
@param int $decimals
@param bool $no_commas
@return array|string

LEFT.
@Deprecated 1.18.0
@see Use the left() method in the TextData\Extract class instead
@param array|string $value Value
@param array|int $chars Number of characters
@return array|string

MID.
@Deprecated 1.18.0
@see Use the mid() method in the TextData\Extract class instead
@param array|string $value Value
@param array|int $start Start character
@param array|int $chars Number of characters
@return array|string

RIGHT.
@Deprecated 1.18.0
@see Use the right() method in the TextData\Extract class instead
@param array|string $value Value
@param array|int $chars Number of characters
@return array|string

STRINGLENGTH.
@Deprecated 1.18.0
@see Use the length() method in the TextData\Text class instead
@param string $value Value
@return array|int

LOWERCASE.
Converts a string value to lower case.
@Deprecated 1.18.0
@see Use the lower() method in the TextData\CaseConvert class instead
@param array|string $mixedCaseString
@return array|string

UPPERCASE.
Converts a string value to upper case.
@Deprecated 1.18.0
@see Use the upper() method in the TextData\CaseConvert class instead
@param string $mixedCaseString
@return array|string

PROPERCASE.
Converts a string value to proper/title case.
@Deprecated 1.18.0
@see Use the proper() method in the TextData\CaseConvert class instead
@param array|string $mixedCaseString
@return array|string

REPLACE.
@Deprecated 1.18.0
@see Use the replace() method in the TextData\Replace class instead
@param string $oldText String to modify
@param int $start Start character
@param int $chars Number of characters
@param string $newText String to replace in defined position
@return array|string

SUBSTITUTE.
@Deprecated 1.18.0
@see Use the substitute() method in the TextData\Replace class instead
@param string $text Value
@param string $fromText From Value
@param string $toText To Value
@param int $instance Instance Number
@return array|string

RETURNSTRING.
@Deprecated 1.18.0
@see Use the test() method in the TextData\Text class instead
@param mixed $testValue Value to check
@return null|array|string

TEXTFORMAT.
@Deprecated 1.18.0
@see Use the TEXTFORMAT() method in the TextData\Format class instead
@param mixed $value Value to check
@param string $format Format mask to use
@return array|string

VALUE.
@Deprecated 1.18.0
@see Use the VALUE() method in the TextData\Format class instead
@param mixed $value Value to check
@return array|DateTimeInterface|float|int|string A string if arguments are invalid

NUMBERVALUE.
@Deprecated 1.18.0
@see Use the NUMBERVALUE() method in the TextData\Format class instead
@param mixed $value Value to check
@param string $decimalSeparator decimal separator, defaults to locale defined value
@param string $groupSeparator group/thosands separator, defaults to locale defined value
@return array|float|string

Compares two text strings and returns TRUE if they are exactly the same, FALSE otherwise.
EXACT is case-sensitive but ignores formatting differences.
Use EXACT to test text being entered into a document.
@Deprecated 1.18.0
@see Use the exact() method in the TextData\Text class instead
@param mixed $value1
@param mixed $value2
@return array|bool

TEXTJOIN.
@Deprecated 1.18.0
@see Use the TEXTJOIN() method in the TextData\Concatenate class instead
@param mixed $delimiter
@param mixed $ignoreEmpty
@param mixed $args
@return array|string

REPT.
Returns the result of builtin function repeat after validating args.
@Deprecated 1.18.0
@see Use the builtinREPT() method in the TextData\Concatenate class instead
@param array|string $str Should be numeric
@param mixed $number Should be int
@return array|string

## References

**Database Tables (inferred)**
- `Value`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\TextData.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\TextData`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`

**Functions/Methods**:
- `CHARACTER($character)`
- `TRIMNONPRINTABLE($stringValue = '')`
- `TRIMSPACES($stringValue = '')`
- `ASCIICODE($characters)`
- `CONCATENATE(...$args)`
- `DOLLAR($value = 0, $decimals = 2)`
- `SEARCHSENSITIVE($needle, $haystack, $offset = 1)`
- `SEARCHINSENSITIVE($needle, $haystack, $offset = 1)`
- `FIXEDFORMAT($value, $decimals = 2, $no_commas = false)`
- `LEFT($value = '', $chars = 1)`
- `MID($value = '', $start = 1, $chars = null)`
- `RIGHT($value = '', $chars = 1)`
- `STRINGLENGTH($value = '')`
- `LOWERCASE($mixedCaseString)`
- `UPPERCASE($mixedCaseString)`
- `PROPERCASE($mixedCaseString)`
- `REPLACE($oldText, $start, $chars, $newText)`
- `SUBSTITUTE($text = '', $fromText = '', $toText = '', $instance = 0)`
- `RETURNSTRING($testValue = '')`
- `TEXTFORMAT($value, $format)`
- `VALUE($value = '')`
- `NUMBERVALUE($value = '', $decimalSeparator = null, $groupSeparator = null)`
- `EXACT($value1, $value2)`
- `TEXTJOIN($delimiter, $ignoreEmpty, ...$args)`
- `builtinREPT($str, $number)`

