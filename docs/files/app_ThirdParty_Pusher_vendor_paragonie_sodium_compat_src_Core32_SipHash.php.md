# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SipHash.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SipHash.php`
- Type: PHP
- Size: 6613 bytes

## Summary (from docblocks)

Class ParagonIE_SodiumCompat_Core32_SipHash
Only uses 32-bit arithmetic, while the original SipHash used 64-bit integers

@internal You should not use this directly from another application
@param array<int, ParagonIE_Sodium_Core32_Int64> $v
@return array<int, ParagonIE_Sodium_Core32_Int64>

@internal You should not use this directly from another application
@param string $in
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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\SipHash.php`

**Classes**:
- `ParagonIE_Sodium_Core32_SipHash extends ParagonIE_Sodium_Core32_Util`

**Functions/Methods**:
- `sipRound(array $v)`
- `sipHash24($in, $key)`

