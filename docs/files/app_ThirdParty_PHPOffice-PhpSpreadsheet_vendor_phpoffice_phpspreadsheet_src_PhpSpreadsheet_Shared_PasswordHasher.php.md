# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\PasswordHasher.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\PasswordHasher.php`
- Type: PHP
- Size: 3980 bytes

## Summary (from docblocks)

Get algorithm name for PHP.

Create a password hash from a given string.
This method is based on the spec at:
https://interoperability.blob.core.windows.net/files/MS-OFFCRYPTO/[MS-OFFCRYPTO].pdf
2.3.7.1 Binary Document Password Verifier Derivation Method 1
It replaces a method based on the algorithm provided by
Daniel Rentz of OpenOffice and the PEAR package
Spreadsheet_Excel_Writer by Xavier Noguer <xnoguer@rezebra.com>.
Scrutinizer will squawk at the use of bitwise operations here,
but it should ultimately pass.
@param string $password Password to hash

Create a password hash from a given string by a specific algorithm.
2.4.2.4 ISO Write Protection Method
@see https://docs.microsoft.com/en-us/openspecs/office_file_formats/ms-offcrypto/1357ea58-646e-4483-92ef-95d718079d6f
@param string $password Password to hash
@param string $algorithm Hash algorithm used to compute the password hash value
@param string $salt Pseudorandom string
@param int $spinCount Number of times to iterate on a hash of a password
@return string Hashed password

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\PasswordHasher.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\PasswordHasher`

**Functions/Methods**:
- `getAlgorithm(string $algorithmName)`
- `defaultHashPassword(string $password)`
- `hashPassword(string $password, string $algorithm = '', string $salt = '', int $spinCount = 10000)`

