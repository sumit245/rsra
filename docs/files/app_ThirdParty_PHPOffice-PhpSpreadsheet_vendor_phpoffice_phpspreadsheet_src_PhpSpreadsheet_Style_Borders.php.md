# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Borders.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Borders.php`
- Type: PHP
- Size: 10769 bytes

## Summary (from docblocks)

Left.
@var Border

Right.
@var Border

Top.
@var Border

Bottom.
@var Border

Diagonal.
@var Border

DiagonalDirection.
@var int

All borders pseudo-border. Only applies to supervisor.
@var Border

Outline pseudo-border. Only applies to supervisor.
@var Border

Inside pseudo-border. Only applies to supervisor.
@var Border

Vertical pseudo-border. Only applies to supervisor.
@var Border

Horizontal pseudo-border. Only applies to supervisor.
@var Border

Create a new Borders.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Borders

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getBorders()->applyFromArray(
        [
            'bottom' => [
                'borderStyle' => Border::BORDER_DASHDOT,
                'color' => [
                    'rgb' => '808080'
                ]
            ],
            'top' => [
                'borderStyle' => Border::BORDER_DASHDOT,
                'color' => [
                    'rgb' => '808080'
                ]
            ]
        ]
);
</code>
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getBorders()->applyFromArray(
        [
            'allBorders' => [
                'borderStyle' => Border::BORDER_DASHDOT,
                'color' => [
                    'rgb' => '808080'
                ]
            ]
        ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Left.
@return Border

Get Right.
@return Border

Get Top.
@return Border

Get Bottom.
@return Border

Get Diagonal.
@return Border

Get AllBorders (pseudo-border). Only applies to supervisor.
@return Border

Get Outline (pseudo-border). Only applies to supervisor.
@return Border

Get Inside (pseudo-border). Only applies to supervisor.
@return Border

Get Vertical (pseudo-border). Only applies to supervisor.
@return Border

Get Horizontal (pseudo-border). Only applies to supervisor.
@return Border

Get DiagonalDirection.
@return int

Set DiagonalDirection.
@param int $direction see self::DIAGONAL_*
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Borders.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Borders extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getLeft()`
- `getRight()`
- `getTop()`
- `getBottom()`
- `getDiagonal()`
- `getAllBorders()`
- `getOutline()`
- `getInside()`
- `getVertical()`
- `getHorizontal()`
- `getDiagonalDirection()`
- `setDiagonalDirection($direction)`
- `getHashCode()`
- `exportArray1()`

