# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaToken.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaToken.php`
- Type: PHP
- Size: 4303 bytes

## Summary (from docblocks)

PARTLY BASED ON:
Copyright (c) 2007 E. W. Bachtal, Inc.
Permission is hereby granted, free of charge, to any person obtaining a copy of this software
and associated documentation files (the "Software"), to deal in the Software without restriction,
including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial
portions of the Software.
The software is provided "as is", without warranty of any kind, express or implied, including but not
limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In
no event shall the authors or copyright holders be liable for any claim, damages or other liability,
whether in an action of contract, tort or otherwise, arising from, out of or in connection with the
software or the use or other dealings in the software.
https://ewbi.blogs.com/develops/2007/03/excel_formula_p.html
https://ewbi.blogs.com/develops/2004/12/excel_formula_p.html

Value.
@var string

Token Type (represented by TOKEN_TYPE_*).
@var string

Token SubType (represented by TOKEN_SUBTYPE_*).
@var string

Create a new FormulaToken.
@param string $value
@param string $tokenType Token type (represented by TOKEN_TYPE_*)
@param string $tokenSubType Token Subtype (represented by TOKEN_SUBTYPE_*)

Get Value.
@return string

Set Value.
@param string $value

Get Token Type (represented by TOKEN_TYPE_*).
@return string

Set Token Type (represented by TOKEN_TYPE_*).
@param string $value

Get Token SubType (represented by TOKEN_SUBTYPE_*).
@return string

Set Token SubType (represented by TOKEN_SUBTYPE_*).
@param string $value

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaToken.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\FormulaToken`

**Functions/Methods**:
- `__construct($value, $tokenType = self::TOKEN_TYPE_UNKNOWN, $tokenSubType = self::TOKEN_SUBTYPE_NOTHING)`
- `getValue()`
- `setValue($value)`
- `getTokenType()`
- `setTokenType($value)`
- `getTokenSubType()`
- `setTokenSubType($value)`

