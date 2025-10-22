# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Alignment.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Alignment.php`
- Type: PHP
- Size: 12891 bytes

## Summary (from docblocks)

Horizontal alignment.
@var null|string

Vertical alignment.
@var null|string

Text rotation.
@var null|int

Wrap text.
@var bool

Shrink to fit.
@var bool

Indent - only possible with horizontal alignment left and right.
@var int

Read order.
@var int

Create a new Alignment.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                      Leave this value at default unless you understand exactly what
                                         its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                      Leave this value at default unless you understand exactly what
                                         its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Alignment

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->applyFromArray(
       [
           'horizontal'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
           'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
           'textRotation' => 0,
           'wrapText'     => TRUE
       ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get Horizontal.
@return null|string

Set Horizontal.
@param string $horizontalAlignment see self::HORIZONTAL_*
@return $this

Get Vertical.
@return null|string

Set Vertical.
@param string $verticalAlignment see self::VERTICAL_*
@return $this

Get TextRotation.
@return null|int

Set TextRotation.
@param int $angleInDegrees
@return $this

Get Wrap Text.
@return bool

Set Wrap Text.
@param bool $wrapped
@return $this

Get Shrink to fit.
@return bool

Set Shrink to fit.
@param bool $shrink
@return $this

Get indent.
@return int

Set indent.
@param int $indent
@return $this

Get read order.
@return int

Set read order.
@param int $readOrder
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Alignment.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Alignment extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getHorizontal()`
- `setHorizontal(string $horizontalAlignment)`
- `getVertical()`
- `setVertical($verticalAlignment)`
- `getTextRotation()`
- `setTextRotation($angleInDegrees)`
- `getWrapText()`
- `setWrapText($wrapped)`
- `getShrinkToFit()`
- `setShrinkToFit($shrink)`
- `getIndent()`
- `setIndent($indent)`
- `getReadOrder()`
- `setReadOrder($readOrder)`
- `getHashCode()`
- `exportArray1()`

