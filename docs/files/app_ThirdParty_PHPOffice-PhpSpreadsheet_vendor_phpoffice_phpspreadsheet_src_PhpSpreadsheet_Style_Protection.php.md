# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Protection.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Protection.php`
- Type: PHP
- Size: 4859 bytes

## Summary (from docblocks)

Protection styles

Locked.
@var string

Hidden.
@var string

Create a new Protection.
@param bool $isSupervisor Flag indicating if this is a supervisor or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are
@param bool $isConditional Flag indicating if this is a conditional style or not
                                   Leave this value at default unless you understand exactly what
                                       its ramifications are

Get the shared style component for the currently active cell in currently active sheet.
Only used for style supervisor.
@return Protection

@var Style

Build style array from subcomponents.
@param array $array
@return array

Apply styles from array.
<code>
$spreadsheet->getActiveSheet()->getStyle('B2')->getLocked()->applyFromArray(
    [
        'locked' => TRUE,
        'hidden' => FALSE
    ]
);
</code>
@param array $styleArray Array containing style information
@return $this

Get locked.
@return string

Set locked.
@param string $lockType see self::PROTECTION_*
@return $this

Get hidden.
@return string

Set hidden.
@param string $hiddenType see self::PROTECTION_*
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

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\Protection.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\Protection extends Supervisor`

**Functions/Methods**:
- `__construct($isSupervisor = false, $isConditional = false)`
- `getSharedComponent()`
- `getStyleArray($array)`
- `applyFromArray(array $styleArray)`
- `getLocked()`
- `setLocked($lockType)`
- `getHidden()`
- `setHidden($hiddenType)`
- `getHashCode()`
- `exportArray1()`

