# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\X25519.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\X25519.php`
- Type: PHP
- Size: 11042 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_X25519

Alters the objects passed to this method in place.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@param ParagonIE_Sodium_Core32_Curve25519_Fe $g
@param int $b
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedMethodCall

@var int $x0

@var int $x1

@var int $x2

@var int $x3

@var int $x4

@var int $x5

@var int $x6

@var int $x7

@var int $x8

@var int $x9

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedMethodCall

@var array<int, ParagonIE_Sodium_Core32_Int64> $h

@var array<int, ParagonIE_Sodium_Core32_Int32> $h2

@internal You should not use this directly from another application
Inline comments preceded by # are from libsodium's ref10 code.
@param string $n
@param string $p
@return string
@throws SodiumException
@throws TypeError

@var int $swap

@var int $b

@var int $swap

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $edwardsY
@param ParagonIE_Sodium_Core32_Curve25519_Fe $edwardsZ
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $n
@return string
@throws SodiumException
@throws TypeError

## References

**Database Tables (inferred)**
- `another`
- `libsodium`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\X25519.php`

**Classes**:
- `ParagonIE_Sodium_Core32_X25519 extends ParagonIE_Sodium_Core32_Curve25519`

**Functions/Methods**:
- `fe_cswap(ParagonIE_Sodium_Core32_Curve25519_Fe $f,
        ParagonIE_Sodium_Core32_Curve25519_Fe $g,
        $b = 0)`
- `fe_mul121666(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `crypto_scalarmult_curve25519_ref10($n, $p)`
- `edwards_to_montgomery(ParagonIE_Sodium_Core32_Curve25519_Fe $edwardsY,
        ParagonIE_Sodium_Core32_Curve25519_Fe $edwardsZ)`
- `crypto_scalarmult_curve25519_ref10_base($n)`

