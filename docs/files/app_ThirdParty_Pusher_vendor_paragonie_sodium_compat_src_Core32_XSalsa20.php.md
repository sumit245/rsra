# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\XSalsa20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\XSalsa20.php`
- Type: PHP
- Size: 1379 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_XSalsa20

Expand a key and nonce into an xsalsa20 keystream.
@internal You should not use this directly from another application
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

Encrypt a string with XSalsa20. Doesn't provide integrity.
@internal You should not use this directly from another application
@param string $message
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\XSalsa20.php`

**Classes**:
- `ParagonIE_Sodium_Core32_XSalsa20 extends ParagonIE_Sodium_Core32_HSalsa20`

**Functions/Methods**:
- `xsalsa20($len, $nonce, $key)`
- `xsalsa20_xor($message, $nonce, $key)`

