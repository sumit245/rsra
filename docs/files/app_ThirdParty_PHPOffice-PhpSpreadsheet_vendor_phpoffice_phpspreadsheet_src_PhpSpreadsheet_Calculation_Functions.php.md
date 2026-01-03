# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Functions.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Functions.php`
- Type: PHP
- Size: 19351 bytes

## Summary (from docblocks)

2 / PI.

Use of RETURNDATE_PHP_NUMERIC is discouraged - not 32-bit Y2038-safe, no timezone.

Use of RETURNDATE_UNIX_TIMESTAMP is discouraged - not 32-bit Y2038-safe, no timezone.

Compatibility mode to use for error checking and responses.
@var string

Data Type to use when returning date values.
@var string

Set the Compatibility Mode.
@param string $compatibilityMode Compatibility Mode
                                 Permitted values are:
                                     Functions::COMPATIBILITY_EXCEL        'Excel'
                                     Functions::COMPATIBILITY_GNUMERIC     'Gnumeric'
                                     Functions::COMPATIBILITY_OPENOFFICE   'OpenOfficeCalc'
@return bool (Success or Failure)

Return the current Compatibility Mode.
@return string Compatibility Mode
               Possible Return values are:
                   Functions::COMPATIBILITY_EXCEL        'Excel'
                   Functions::COMPATIBILITY_GNUMERIC     'Gnumeric'
                   Functions::COMPATIBILITY_OPENOFFICE   'OpenOfficeCalc'

Set the Return Date Format used by functions that return a date/time (Excel, PHP Serialized Numeric or PHP DateTime Object).
@param string $returnDateType Return Date Format
                              Permitted values are:
                                  Functions::RETURNDATE_UNIX_TIMESTAMP       'P'
                                  Functions::RETURNDATE_PHP_DATETIME_OBJECT  'O'
                                  Functions::RETURNDATE_EXCEL                'E'
@return bool Success or failure

Return the current Return Date Format for functions that return a date/time (Excel, PHP Serialized Numeric or PHP Object).
@return string Return Date Format
               Possible Return values are:
                   Functions::RETURNDATE_UNIX_TIMESTAMP         'P'
                   Functions::RETURNDATE_PHP_DATETIME_OBJECT    'O'
                   Functions::RETURNDATE_EXCEL            '     'E'

DUMMY.
@return string #Not Yet Implemented

NULL.
Returns the error value #NULL!
@Deprecated 1.23.0
@return string #NULL!
@see Information\ExcelError::null()
Use the null() method in the Information\Error class instead

NaN.
Returns the error value #NUM!
@Deprecated 1.23.0
@return string #NUM!
@see Information\ExcelError::NAN()
Use the NAN() method in the Information\Error class instead

REF.
Returns the error value #REF!
@Deprecated 1.23.0
@return string #REF!
@see Information\ExcelError::REF()
Use the REF() method in the Information\Error class instead

NA.
Excel Function:
       =NA()
Returns the error value #N/A
       #N/A is the error value that means "no value is available."
@Deprecated 1.23.0
@return string #N/A!
@see Information\ExcelError::NA()
Use the NA() method in the Information\Error class instead

VALUE.
Returns the error value #VALUE!
@Deprecated 1.23.0
@return string #VALUE!
@see Information\ExcelError::VALUE()
Use the VALUE() method in the Information\Error class instead

NAME.
Returns the error value #NAME?
@Deprecated 1.23.0
@return string #NAME?
@see Information\ExcelError::NAME()
Use the NAME() method in the Information\Error class instead

DIV0.
@Deprecated 1.23.0
@return string #Not Yet Implemented
@see Information\ExcelError::DIV0()
Use the DIV0() method in the Information\Error class instead

ERROR_TYPE.
@param mixed $value Value to check
@Deprecated 1.23.0
@return array|int|string
@see Information\ExcelError::type()
Use the type() method in the Information\Error class instead

IS_BLANK.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isBlank()
Use the isBlank() method in the Information\Value class instead
@return array|bool

IS_ERR.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isErr()
Use the isErr() method in the Information\Value class instead
@return array|bool

IS_ERROR.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isError()
Use the isError() method in the Information\Value class instead
@return array|bool

IS_NA.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isNa()
Use the isNa() method in the Information\Value class instead
@return array|bool

IS_EVEN.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isEven()
Use the isEven() method in the Information\Value class instead
@return array|bool|string

IS_ODD.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isOdd()
Use the isOdd() method in the Information\Value class instead
@return array|bool|string

IS_NUMBER.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isNumber()
Use the isNumber() method in the Information\Value class instead
@return array|bool

IS_LOGICAL.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isLogical()
Use the isLogical() method in the Information\Value class instead
@return array|bool

IS_TEXT.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isText()
Use the isText() method in the Information\Value class instead
@return array|bool

IS_NONTEXT.
@param mixed $value Value to check
@Deprecated 1.23.0
@see Information\Value::isNonText()
Use the isNonText() method in the Information\Value class instead
@return array|bool

N.
Returns a value converted to a number
@Deprecated 1.23.0
@see Information\Value::asNumber()
Use the asNumber() method in the Information\Value class instead
@param null|mixed $value The value you want converted
@return number|string N converts values listed in the following table
       If value is or refers to N returns
       A number            That number
       A date                The serial number of that date
       TRUE                1
       FALSE                0
       An error value        The error value
       Anything else        0

TYPE.
Returns a number that identifies the type of a value
@Deprecated 1.23.0
@see Information\Value::type()
Use the type() method in the Information\Value class instead
@param null|mixed $value The value you want tested
@return number N converts values listed in the following table
       If value is or refers to N returns
       A number            1
       Text                2
       Logical Value        4
       An error value        16
       Array or Matrix        64

Convert a multi-dimensional array to a simple 1-dimensional array.
@param array|mixed $array Array to be flattened
@return array Flattened array

@param mixed $value
@return null|mixed

Convert a multi-dimensional array to a simple 1-dimensional array, but retain an element of indexing.
@param array|mixed $array Array to be flattened
@return array Flattened array

Convert an array to a single scalar value by extracting the first element.
@param mixed $value Array or scalar value
@return mixed

ISFORMULA.
@Deprecated 1.23.0
@see Information\Value::isFormula()
Use the isFormula() method in the Information\Value class instead
@param mixed $cellReference The cell to check
@param ?Cell $cell The current cell (containing this formula)
@return array|bool|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Functions.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Functions`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`

**Functions/Methods**:
- `setCompatibilityMode($compatibilityMode)`
- `getCompatibilityMode()`
- `setReturnDateType($returnDateType)`
- `getReturnDateType()`
- `DUMMY()`
- `isMatrixValue($idx)`
- `isValue($idx)`
- `isCellValue($idx)`
- `ifCondition($condition)`
- `operandSpecialHandling($operand)`
- `null()`
- `NAN()`
- `REF()`
- `NA()`
- `VALUE()`
- `NAME()`
- `DIV0()`
- `errorType($value = '')`
- `isBlank($value = null)`
- `isErr($value = '')`
- `isError($value = '')`
- `isNa($value = '')`
- `isEven($value = null)`
- `isOdd($value = null)`
- `isNumber($value = null)`
- `isLogical($value = null)`
- `isText($value = null)`
- `isNonText($value = null)`
- `n($value = null)`
- `TYPE($value = null)`
- `flattenArray($array)`
- `scalar($value)`
- `flattenArrayIndexed($array)`
- `flattenSingleValue($value = '')`
- `isFormula($cellReference = '', ?Cell $cell = null)`
- `expandDefinedName(string $coordinate, Cell $cell)`
- `trimTrailingRange(string $coordinate)`
- `trimSheetFromCellReference(string $coordinate)`

