# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\WinZipAes\WinZipAesContext.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\WinZipAes\WinZipAesContext.php`
- Type: PHP
- Size: 3954 bytes

## Summary (from docblocks)

WinZip Aes Encryption.
@see https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT APPENDIX E
@see https://www.winzip.com/win/en/aes_info.html
@internal

@var int AES Block size

@var int Footer size

@var int The iteration count for the derived keys of the cipher, KLAC and MAC.

@var int Password verifier size

@var int IV size

@throws ZipAuthenticationException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Filter\Cipher\WinZipAes\WinZipAesContext.php`

**Classes**:
- `PhpZip\IO\Filter\Cipher\WinZipAes\WinZipAesContext`

**Functions/Methods**:
- `__construct(int $encryptionStrengthBits, string $password, string $salt)`
- `getPasswordVerifier()`
- `updateIv()`
- `decryption(string $data)`
- `encrypt(string $data)`
- `checkAuthCode(string $authCode)`
- `getHmac()`

