# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\NumberFormat.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\NumberFormat.php`
- Type: PHP
- Size: 13406 bytes

## Summary (from docblocks)

Excel built-in number formats.
@var array

Excel built-in number formats (flipped, for faster lookups).
@var array

Format Code.
@var null|string

Built-in format Code.
@var false|int

Create a new NumberFormat.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return NumberFormat

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getNumberFormat()->applyFromArray(
    [
        'formatCode' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE
    ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Format Code.
@return null|string

Set Format Code.
@param string $formatCode see self::FORMAT_*
@return $this

Get Built-In Format Code.
@return false|int

Set Built-In Format Code.
@param int $formatCodeIndex
@return $this

Fill built-in format codes.

Get built-in format code.
@param int $index
@return string

Get built-in format code index.
@param string $formatCodeIndex
@return false|int

Get hash code.
@return string Hash code

Convert a value in a pre-defined format to a PHP string.
@param mixed $value Value to format
@param string $format Format code, see = self::FORMAT_*
@param array $callBack Callback function for additional formatting of string
@return string Formatted string

## References

**Database Tables (inferred)**
- `subcomponents`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\NumberFormat.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\NumberFormat extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getFormatCode()`
- `setFormatCode($formatCode)`
- `getBuiltInFormatCode()`
- `setBuiltInFormatCode($formatCodeIndex)`
- `fillBuiltInFormatCodes()`
- `builtInFormatCode($index)`
- `builtInFormatCodeIndex($formatCodeIndex)`
- `getHashCode()`
- `toFormattedString($value, $format, $callBack = null)`
- `exportArray1()`

