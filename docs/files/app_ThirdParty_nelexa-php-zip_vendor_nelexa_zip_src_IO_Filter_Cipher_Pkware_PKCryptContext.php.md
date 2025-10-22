# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\Pkware\PKCryptContext.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\Pkware\PKCryptContext.php`
- Type: PHP
- Size: 8399 bytes

## Summary (from docblocks)

Traditional PKWARE Encryption Engine.
@see https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT .ZIP File Format Specification

@var int Encryption header size

Crc table.
@var int[]|array

@var array encryption keys

@throws ZipAuthenticationException

Decrypt byte.

Update keys.

Update crc.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\Pkware\PKCryptContext.php`

**Classes**:
- `PhpZip\IO\Filter\Cipher\Pkware\PKCryptContext`

**Functions/Methods**:
- `__construct(string $password)`
- `checkHeader(string $header, int $checkByte)`
- `decryptString(string $content)`
- `decryptByte()`
- `updateKeys(int $charAt)`
- `crc32(int $oldCrc, int $charAt)`
- `encryptString(string $content)`
- `encryptByte(int $byte)`

