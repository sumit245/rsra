# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Fill.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Fill.php`
- Type: PHP
- Size: 9701 bytes

## Summary (from docblocks)

@var null|int

@var null|int

Fill type.
@var null|string

Rotation.
@var float

Start color.
@var Color

End color.
@var Color

@var bool

Create a new Fill.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Fill

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getFill()->applyFromArray(
    [
        'fillType' => Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 0.0,
        'startColor' => [
            'rgb' => '000000'
        ],
        'endColor' => [
            'argb' => 'FFFFFFFF'
        ]
    ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Fill Type.
@return null|string

Set Fill Type.
@param string $fillType Fill type, see self::FILL_*
@return $this

Get Rotation.
@return float

Set Rotation.
@param float $angleInDegrees
@return $this

Get Start Color.
@return Color

Set Start Color.
@return $this

Get End Color.
@return Color

Set End Color.
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Fill.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Fill extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getFillType()`
- `setFillType($fillType)`
- `getRotation()`
- `setRotation($angleInDegrees)`
- `getStartColor()`
- `setStartColor(Color $color)`
- `getEndColor()`
- `setEndColor(Color $color)`
- `getColorsChanged()`
- `getHashCode()`
- `exportArray1()`

