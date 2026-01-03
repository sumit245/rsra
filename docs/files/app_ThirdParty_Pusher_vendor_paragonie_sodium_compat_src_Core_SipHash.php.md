# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\SipHash.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\SipHash.php`
- Type: PHP
- Size: 8026 bytes

## Summary (from docblocks)

Class ParagonIE_SodiumCompat_Core_SipHash
Only uses 32-bit arithmetic, while the original SipHash used 64-bit integers

@internal You should not use this directly from another application
@param int[] $v
@return int[]

Add two 32 bit integers representing a 64-bit integer.
@internal You should not use this directly from another application
@param int[] $a
@param int[] $b
@return array<int, mixed>

@var int $x1

@var int $c

@var int $x0

@internal You should not use this directly from another application
@param int $int0
@param int $int1
@param int $c
@return array<int, mixed>

Implements Siphash-2-4 using only 32-bit numbers.
When we split an int into two, the higher bits go to the lower index.
e.g. 0xDEADBEEFAB10C92D becomes [
    0 => 0xDEADBEEF,
    1 => 0xAB10C92D
].
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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\SipHash.php`

**Classes**:
- `ParagonIE_Sodium_Core_SipHash extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `sipRound(array $v)`
- `add(array $a, array $b)`
- `rotl_64($int0, $int1, $c)`
- `sipHash24($in, $key)`

