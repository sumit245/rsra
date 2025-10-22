# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\StringHelper.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\StringHelper.php`
- Type: PHP
- Size: 23885 bytes

## Summary (from docblocks)

Constants

Regular Expressions

Control characters array.
@var string[]

SYLK Characters array.
@var array

Decimal separator.
@var string

Thousands separator.
@var string

Currency code.
@var string

Is iconv extension avalable?
@var ?bool

iconv options.
@var string

Build control characters array.

Build SYLK characters array.

Get whether iconv extension is available.
@return bool

Convert from OpenXML escaped control character to PHP control character.
Excel 2007 team:
----------------
That's correct, control characters are stored directly in the shared-strings table.
We do encode characters that cannot be represented in XML using the following escape sequence:
_xHHHH_ where H represents a hexadecimal character in the character's value...
So you could end up with something like _x0008_ in a string (either in a cell value (<v>)
element or in the shared string <t> element.
@param string $textValue Value to unescape
@return string

Convert from PHP control character to OpenXML escaped control character.
Excel 2007 team:
----------------
That's correct, control characters are stored directly in the shared-strings table.
We do encode characters that cannot be represented in XML using the following escape sequence:
_xHHHH_ where H represents a hexadecimal character in the character's value...
So you could end up with something like _x0008_ in a string (either in a cell value (<v>)
element or in the shared string <t> element.
@param string $textValue Value to escape
@return string

Try to sanitize UTF8, stripping invalid byte sequences. Not perfect. Does not surrogate characters.
@param string $textValue
@return string

Check if a string contains UTF8 data.
@param string $textValue
@return bool

Formats a numeric value as a string for output in various output writers forcing
point as decimal separator in case locale is other than English.
@param mixed $numericValue
@return string

Converts a UTF-8 string into BIFF8 Unicode string data (8-bit string length)
Writes the string using uncompressed notation, no rich text, no Asian phonetics
If mbstring extension is not available, ASCII is assumed, and compressed notation is used
although this will give wrong results for non-ASCII strings
see OpenOffice.org's Documentation of the Microsoft Excel File Format, sect. 2.5.3.
@param string $textValue UTF-8 encoded string
@param mixed[] $arrcRuns Details of rich text runs in $value
@return string

Converts a UTF-8 string into BIFF8 Unicode string data (16-bit string length)
Writes the string using uncompressed notation, no rich text, no Asian phonetics
If mbstring extension is not available, ASCII is assumed, and compressed notation is used
although this will give wrong results for non-ASCII strings
see OpenOffice.org's Documentation of the Microsoft Excel File Format, sect. 2.5.3.
@param string $textValue UTF-8 encoded string
@return string

Convert string from one encoding to another.
@param string $textValue
@param string $to Encoding to convert to, e.g. 'UTF-8'
@param string $from Encoding to convert from, e.g. 'UTF-16LE'
@return string

Get character count.
@param string $textValue
@param string $encoding Encoding
@return int Character count

Get a substring of a UTF-8 encoded string.
@param string $textValue UTF-8 encoded string
@param int $offset Start offset
@param int $length Maximum number of characters in substring
@return string

Convert a UTF-8 encoded string to upper case.
@param string $textValue UTF-8 encoded string
@return string

Convert a UTF-8 encoded string to lower case.
@param string $textValue UTF-8 encoded string
@return string

Convert a UTF-8 encoded string to title/proper case
(uppercase every first character in each word, lower case all other characters).
@param string $textValue UTF-8 encoded string
@return string

Reverse the case of a string, so that all uppercase characters become lowercase
and all lowercase characters become uppercase.
@param string $textValue UTF-8 encoded string
@return string

Identify whether a string contains a fractional numeric value,
and convert it to a numeric if it is.
@param string $operand string value to test
@return bool

Get the decimal separator. If it has not yet been set explicitly, try to obtain number
formatting information from locale.
@return string

Set the decimal separator. Only used by NumberFormat::toFormattedString()
to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and \PhpOffice\PhpSpreadsheet\Writer\Pdf.
@param string $separator Character for decimal separator

Get the thousands separator. If it has not yet been set explicitly, try to obtain number
formatting information from locale.
@return string

Set the thousands separator. Only used by NumberFormat::toFormattedString()
to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and \PhpOffice\PhpSpreadsheet\Writer\Pdf.
@param string $separator Character for thousands separator

Get the currency code. If it has not yet been set explicitly, try to obtain the
       symbol information from locale.
@return string

Set the currency code. Only used by NumberFormat::toFormattedString()
       to format output by \PhpOffice\PhpSpreadsheet\Writer\Html and \PhpOffice\PhpSpreadsheet\Writer\Pdf.
@param string $currencyCode Character for currency code

Convert SYLK encoded string to UTF-8.
@param string $textValue
@return string UTF-8 encoded string

Retrieve any leading numeric part of a string, or return the full string if no leading numeric
(handles basic integer or float, but not exponent or non decimal).
@param string $textValue
@return mixed string or only the leading numeric part of the string

## References

**Database Tables (inferred)**
- `OpenXML`
- `PHP`
- `one`
- `Encoding`
- `locale`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\StringHelper.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\StringHelper`

**Functions/Methods**:
- `buildControlCharacters()`
- `buildSYLKCharacters()`
- `getIsIconvEnabled()`
- `buildCharacterSets()`
- `controlCharacterOOXML2PHP($textValue)`
- `controlCharacterPHP2OOXML($textValue)`
- `sanitizeUTF8($textValue)`
- `isUTF8($textValue)`
- `formatNumber($numericValue)`
- `UTF8toBIFF8UnicodeShort($textValue, $arrcRuns = [])`
- `UTF8toBIFF8UnicodeLong($textValue)`
- `convertEncoding($textValue, $to, $from)`
- `countCharacters($textValue, $encoding = 'UTF-8')`
- `substring($textValue, $offset, $length = 0)`
- `strToUpper($textValue)`
- `strToLower($textValue)`
- `strToTitle($textValue)`
- `mbIsUpper($character)`
- `mbStrSplit($string)`
- `strCaseReverse($textValue)`
- `convertToNumberIfFraction(&$operand)`
- `convertToNumberIfFraction()`
- `getDecimalSeparator()`
- `setDecimalSeparator($separator)`
- `getThousandsSeparator()`
- `setThousandsSeparator($separator)`
- `getCurrencyCode()`
- `setCurrencyCode($currencyCode)`
- `SYLKtoUTF8($textValue)`
- `testStringAsNumeric($textValue)`

