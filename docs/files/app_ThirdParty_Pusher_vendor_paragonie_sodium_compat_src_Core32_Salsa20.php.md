# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Salsa20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Salsa20.php`
- Type: PHP
- Size: 11506 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_Salsa20

Calculate an salsa20 hash of a single block
@internal You should not use this directly from another application
@param string $in
@param string $k
@param string|null $c
@return string
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int32 $x0
@var ParagonIE_Sodium_Core32_Int32 $x1
@var ParagonIE_Sodium_Core32_Int32 $x2
@var ParagonIE_Sodium_Core32_Int32 $x3
@var ParagonIE_Sodium_Core32_Int32 $x4
@var ParagonIE_Sodium_Core32_Int32 $x5
@var ParagonIE_Sodium_Core32_Int32 $x6
@var ParagonIE_Sodium_Core32_Int32 $x7
@var ParagonIE_Sodium_Core32_Int32 $x8
@var ParagonIE_Sodium_Core32_Int32 $x9
@var ParagonIE_Sodium_Core32_Int32 $x10
@var ParagonIE_Sodium_Core32_Int32 $x11
@var ParagonIE_Sodium_Core32_Int32 $x12
@var ParagonIE_Sodium_Core32_Int32 $x13
@var ParagonIE_Sodium_Core32_Int32 $x14
@var ParagonIE_Sodium_Core32_Int32 $x15
@var ParagonIE_Sodium_Core32_Int32 $j0
@var ParagonIE_Sodium_Core32_Int32 $j1
@var ParagonIE_Sodium_Core32_Int32 $j2
@var ParagonIE_Sodium_Core32_Int32 $j3
@var ParagonIE_Sodium_Core32_Int32 $j4
@var ParagonIE_Sodium_Core32_Int32 $j5
@var ParagonIE_Sodium_Core32_Int32 $j6
@var ParagonIE_Sodium_Core32_Int32 $j7
@var ParagonIE_Sodium_Core32_Int32 $j8
@var ParagonIE_Sodium_Core32_Int32 $j9
@var ParagonIE_Sodium_Core32_Int32 $j10
@var ParagonIE_Sodium_Core32_Int32 $j11
@var ParagonIE_Sodium_Core32_Int32 $j12
@var ParagonIE_Sodium_Core32_Int32 $j13
@var ParagonIE_Sodium_Core32_Int32 $j14
@var ParagonIE_Sodium_Core32_Int32 $j15

@internal You should not use this directly from another application
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $m
@param string $n
@param int $ic
@param string $k
@return string
@throws SodiumException
@throws TypeError

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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Salsa20.php`

**Classes**:
- `ParagonIE_Sodium_Core32_Salsa20 extends ParagonIE_Sodium_Core32_Util`

**Functions/Methods**:
- `core_salsa20($in, $k, $c = null)`
- `salsa20($len, $nonce, $key)`
- `salsa20_xor_ic($m, $n, $ic, $k)`
- `salsa20_xor($message, $nonce, $key)`

