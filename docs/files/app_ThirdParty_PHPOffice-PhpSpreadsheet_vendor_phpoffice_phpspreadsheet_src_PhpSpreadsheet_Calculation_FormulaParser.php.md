# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaParser.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaParser.php`
- Type: PHP
- Size: 22599 bytes

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

Formula.
@var string

Tokens.
@var FormulaToken[]

Create a new FormulaParser.
@param string $formula Formula to parse

Get Formula.
@return string

Get Token.
@param int $id Token id

Get Token count.
@return int

Get Tokens.
@return FormulaToken[]

Parse to tokens.

## References

**Database Tables (inferred)**
- `Excel`
- `absolute`
- `function`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\FormulaParser.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\FormulaParser`

**Functions/Methods**:
- `__construct($formula = '')`
- `getFormula()`
- `getToken(int $id = 0)`
- `getTokenCount()`
- `getTokens()`
- `parseToTokens()`
- `if($this->formula[$index] == self::PAREN_OPEN)`

