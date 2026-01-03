# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Style.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Style.php`
- Type: PHP
- Size: 26798 bytes

## Summary (from docblocks)

Font.
@var Font

Fill.
@var Fill

Borders.
@var Borders

Alignment.
@var Alignment

Number Format.
@var NumberFormat

Protection.
@var Protection

Index of style in collection. Only used for real style.
@var int

Use Quote Prefix when displaying in cell editor. Only used for real style.
@var bool

Internal cache for styles
Used when applying style on range of cells (column or row) and cleared when
all cells in range is styled.
PhpSpreadsheet will always minimize the amount of styles used. So cells with
same styles will reference the same Style instance. To check if two styles
are similar Style::getHashCode() is used. This call is expensive. To minimize
the need to call this method we can cache the internal PHP object id of the
Style in the range. Style::getHashCode() will then only be called when we
encounter a unique style.
@see Style::applyFromArray()
@see Style::getHashCode()
@var ?array<string, array>

Create a new Style.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
        Leave this value at default unless you understand exactly what
   its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
      Leave this value at default unless you understand exactly what
   its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.

Get parent. Only used for style supervisor.

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->applyFromArray(
    [
        'font' => [
            'name' => 'Arial',
            'bold' => true,
            'italic' => false,
            'underline' => Font::UNDERLINE_DOUBLE,
            'strikethrough' => false,
            'color' => [
                'rgb' => '808080'
            ]
        ],
        'borders' => [
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
        ],
        'alignment' => [
            'horizontal' => Alignment::HORIZONTAL_CENTER,
            'vertical' => Alignment::VERTICAL_CENTER,
            'wrapText' => true,
        ],
        'quotePrefix'    => true
    ]
);
</code>
@param array $styleArray Array containing style information
@param bool $advancedBorders advanced mode for setting borders
@return $this

Get Fill.
@return Fill

Get Font.
@return Font

Set font.
@return $this

Get Borders.
@return Borders

Get Alignment.
@return Alignment

Get Number Format.
@return NumberFormat

Get Conditional Styles. Only used on supervisor.
@return Conditional[]

Set Conditional Styles. Only used on supervisor.
@param Conditional[] $conditionalStyleArray Array of conditional styles
@return $this

Get Protection.
@return Protection

Get quote prefix.
@return bool

Set quote prefix.
@param bool $quotePrefix
@return $this

Get hash code.
@return string Hash code

Get own index in style collection.
@return int

Set own index in style collection.
@param int $index

## References

**Database Tables (inferred)**
- `subcomponents`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Style.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Style extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getParent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray, $advancedBorders = true)`
- `getOldXfIndexes(string $selectionType, array $rangeStart, array $rangeEnd, string $columnStart, string $columnEnd, array $styleArray)`
- `getFill()`
- `getFont()`
- `setFont(Font $font)`
- `getBorders()`
- `getAlignment()`
- `getNumberFormat()`
- `getConditionalStyles()`
- `setConditionalStyles(array $conditionalStyleArray)`
- `getProtection()`
- `getQuotePrefix()`
- `setQuotePrefix($quotePrefix)`
- `getHashCode()`
- `getIndex()`
- `setIndex($index)`
- `exportArray1()`

