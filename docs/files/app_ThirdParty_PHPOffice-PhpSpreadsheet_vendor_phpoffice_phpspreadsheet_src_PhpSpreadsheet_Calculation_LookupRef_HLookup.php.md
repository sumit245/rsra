# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\HLookup.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\HLookup.php`
- Type: PHP
- Size: 4402 bytes

## Summary (from docblocks)

HLOOKUP
The HLOOKUP function searches for value in the top-most row of lookup_array and returns the value
    in the same column based on the index_number.
@param mixed $lookupValue The value that you want to match in lookup_array
@param mixed $lookupArray The range of cells being searched
@param mixed $indexNumber The row number in table_array from which the matching value must be returned.
                               The first row is 1.
@param mixed $notExactMatch determines if you are looking for an exact match based on lookup_value
@return mixed The value of the found cell

@param mixed $lookupValue The value that you want to match in lookup_array
@param  int|string $column

## References

**Database Tables (inferred)**
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\LookupRef\HLookup.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\LookupRef\HLookup extends LookupBase`

**Functions/Methods**:
- `lookup($lookupValue, $lookupArray, $indexNumber, $notExactMatch = true)`
- `hLookupSearch($lookupValue, array $lookupArray, $column, bool $notExactMatch)`
- `convertLiteralArray(array $lookupArray)`

