# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Font.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Font.php`
- Type: PHP
- Size: 14567 bytes

## Summary (from docblocks)

Font Name.
@var null|string

Font Size.
@var null|float

Bold.
@var null|bool

Italic.
@var null|bool

Superscript.
@var null|bool

Subscript.
@var null|bool

Underline.
@var null|string

Strikethrough.
@var null|bool

Foreground color.
@var Color

@var null|int

Create a new Font.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Font

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getFont()->applyFromArray(
    [
        'name' => 'Arial',
        'bold' => TRUE,
        'italic' => FALSE,
        'underline' => \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE,
        'strikethrough' => FALSE,
        'color' => [
            'rgb' => '808080'
        ]
    ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Name.
@return null|string

Set Name.
@param string $fontname
@return $this

Get Size.
@return null|float

Set Size.
@param mixed $sizeInPoints A float representing the value of a positive measurement in points (1/72 of an inch)
@return $this

Get Bold.
@return null|bool

Set Bold.
@param bool $bold
@return $this

Get Italic.
@return null|bool

Set Italic.
@param bool $italic
@return $this

Get Superscript.
@return null|bool

Set Superscript.
@return $this

Get Subscript.
@return null|bool

Set Subscript.
@return $this

Get Underline.
@return null|string

Set Underline.
@param bool|string $underlineStyle \PhpOffice\PhpSpreadsheet\Style\Font underline type
                                   If a boolean is passed, then TRUE equates to UNDERLINE_SINGLE,
                                       false equates to UNDERLINE_NONE
@return $this

Get Strikethrough.
@return null|bool

Set Strikethrough.
@param bool $strikethru
@return $this

Get Color.
@return Color

Set Color.
@return $this

Get hash code.
@return string Hash code

## References

**Database Tables (inferred)**
- `subcomponents`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Font.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Font extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getName()`
- `setName($fontname)`
- `getSize()`
- `setSize($sizeInPoints)`
- `getBold()`
- `setBold($bold)`
- `getItalic()`
- `setItalic($italic)`
- `getSuperscript()`
- `setSuperscript(bool $superscript)`
- `getSubscript()`
- `setSubscript(bool $subscript)`
- `getUnderline()`
- `setUnderline($underlineStyle)`
- `getStrikethrough()`
- `setStrikethrough($strikethru)`
- `getColor()`
- `setColor(Color $color)`
- `getHashCode()`
- `exportArray1()`

