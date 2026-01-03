# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Border.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Border.php`
- Type: PHP
- Size: 6378 bytes

## Summary (from docblocks)

Border style.
@var string

Border color.
@var Color

@var null|int

Create a new Border.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Border

@var Style

@var Borders $sharedComponent

Build style array from subcomponents.
@param array $array
@return array

@var Style

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getBorders()->getTop()->applyFromArray(
       [
           'borderStyle' => Border::BORDER_DASHDOT,
           'color' => [
               'rgb' => '808080'
           ]
       ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Border style.
@return string

Set Border style.
@param bool|string $style
                           When passing a boolean, FALSE equates Border::BORDER_NONE
                               and TRUE to Border::BORDER_MEDIUM
@return $this

Get Border Color.
@return Color

Set Border Color.
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Border.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Border extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getBorderStyle()`
- `setBorderStyle($style)`
- `getColor()`
- `setColor(Color $color)`
- `getHashCode()`
- `exportArray1()`

