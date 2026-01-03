# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Address.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Address.php`
- Type: PHP
- Size: 4557 bytes

## Summary (from docblocks)

ADDRESS.
Creates a cell address as text, given specified row and column numbers.
Excel Function:
       =ADDRESS(row, column, [relativity], [referenceStyle], [sheetText])
@param mixed $row Row number (integer) to use in the cell reference
                     Or can be an array of values
@param mixed $column Column number (integer) to use in the cell reference
                     Or can be an array of values
@param mixed $relativity Integer flag indicating the type of reference to return
                            1 or omitted    Absolute
                            2               Absolute row; relative column
                            3               Relative row; absolute column
                            4               Relative
                     Or can be an array of values
@param mixed $referenceStyle A logical (boolean) value that specifies the A1 or R1C1 reference style.
                               TRUE or omitted    ADDRESS returns an A1-style reference
                               FALSE              ADDRESS returns an R1C1-style reference
                     Or can be an array of values
@param mixed $sheetName Optional Name of worksheet to use
                     Or can be an array of values
@return array|string
        If an array of values is passed as the $testValue argument, then the returned result will also be
           an array with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\Address.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Address`

**Functions/Methods**:
- `cell($row, $column, $relativity = 1, $referenceStyle = true, $sheetName = '')`
- `sheetName(string $sheetName)`
- `formatAsA1(int $row, int $column, int $relativity, string $sheetName)`
- `formatAsR1C1(int $row, int $column, int $relativity, string $sheetName)`

