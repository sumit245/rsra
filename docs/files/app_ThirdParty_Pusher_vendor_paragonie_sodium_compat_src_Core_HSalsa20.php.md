# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\HSalsa20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\HSalsa20.php`
- Type: PHP
- Size: 3673 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_HSalsa20

Calculate an hsalsa20 hash of a single block
HSalsa20 doesn't have a counter and will never be used for more than
one block (used to derive a subkey for xsalsa20).
@internal You should not use this directly from another application
@param string $in
@param string $k
@param string|null $c
@return string
@throws TypeError

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\HSalsa20.php`

**Classes**:
- `ParagonIE_Sodium_Core_HSalsa20 extends ParagonIE_Sodium_Core_Salsa20`

**Functions/Methods**:
- `hsalsa20($in, $k, $c = null)`

