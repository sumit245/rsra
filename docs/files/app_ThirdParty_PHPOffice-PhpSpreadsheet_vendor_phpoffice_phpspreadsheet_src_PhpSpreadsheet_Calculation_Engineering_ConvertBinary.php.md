# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertBinary.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertBinary.php`
- Type: PHP
- Size: 7229 bytes

## Summary (from docblocks)

toDecimal.
Return a binary value as decimal.
Excel Function:
       BIN2DEC(x)
@param array|string $value The binary number (as a string) that you want to convert. The number
                               cannot contain more than 10 characters (10 bits). The most significant
                               bit of number is the sign bit. The remaining 9 bits are magnitude bits.
                               Negative numbers are represented using two's-complement notation.
                               If number is not a valid binary number, or if number contains more than
                               10 characters (10 bits), BIN2DEC returns the #NUM! error value.
                     Or can be an array of values
@return array|string Result, or an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

toHex.
Return a binary value as hex.
Excel Function:
       BIN2HEX(x[,places])
@param array|string $value The binary number (as a string) that you want to convert. The number
                               cannot contain more than 10 characters (10 bits). The most significant
                               bit of number is the sign bit. The remaining 9 bits are magnitude bits.
                               Negative numbers are represented using two's-complement notation.
                               If number is not a valid binary number, or if number contains more than
                               10 characters (10 bits), BIN2HEX returns the #NUM! error value.
                     Or can be an array of values
@param array|int $places The number of characters to use. If places is omitted, BIN2HEX uses the
                               minimum number of characters necessary. Places is useful for padding the
                               return value with leading 0s (zeros).
                               If places is not an integer, it is truncated.
                               If places is nonnumeric, BIN2HEX returns the #VALUE! error value.
                               If places is negative, BIN2HEX returns the #NUM! error value.
                     Or can be an array of values
@return array|string Result, or an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

toOctal.
Return a binary value as octal.
Excel Function:
       BIN2OCT(x[,places])
@param array|string $value The binary number (as a string) that you want to convert. The number
                               cannot contain more than 10 characters (10 bits). The most significant
                               bit of number is the sign bit. The remaining 9 bits are magnitude bits.
                               Negative numbers are represented using two's-complement notation.
                               If number is not a valid binary number, or if number contains more than
                               10 characters (10 bits), BIN2OCT returns the #NUM! error value.
                     Or can be an array of values
@param array|int $places The number of characters to use. If places is omitted, BIN2OCT uses the
                               minimum number of characters necessary. Places is useful for padding the
                               return value with leading 0s (zeros).
                               If places is not an integer, it is truncated.
                               If places is nonnumeric, BIN2OCT returns the #VALUE! error value.
                               If places is negative, BIN2OCT returns the #NUM! error value.
                     Or can be an array of values
@return array|string Result, or an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Engineering\ConvertBinary.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Engineering\ConvertBinary extends ConvertBase`

**Functions/Methods**:
- `toDecimal($value)`
- `toHex($value, $places = null)`
- `toOctal($value, $places = null)`
- `validateBinary(string $value)`

