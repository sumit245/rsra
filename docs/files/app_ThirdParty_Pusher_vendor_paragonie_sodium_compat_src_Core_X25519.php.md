# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\X25519.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\X25519.php`
- Type: PHP
- Size: 9450 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_X25519

Alters the objects passed to this method in place.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@param ParagonIE_Sodium_Core_Curve25519_Fe $g
@param int $b
@return void
@psalm-suppress MixedAssignment

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return ParagonIE_Sodium_Core_Curve25519_Fe

@var int $carry9

@var int $carry1

@var int $carry3

@var int $carry5

@var int $carry7

@var int $carry0

@var int $carry2

@var int $carry4

@var int $carry6

@var int $carry8

@internal You should not use this directly from another application
Inline comments preceded by # are from libsodium's ref10 code.
@param string $n
@param string $p
@return string
@throws SodiumException
@throws TypeError

@var int $swap

@var int $b

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $edwardsY
@param ParagonIE_Sodium_Core_Curve25519_Fe $edwardsZ
@return ParagonIE_Sodium_Core_Curve25519_Fe

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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\X25519.php`

**Classes**:
- `ParagonIE_Sodium_Core_X25519 extends ParagonIE_Sodium_Core_Curve25519`

**Functions/Methods**:
- `fe_cswap(ParagonIE_Sodium_Core_Curve25519_Fe $f,
        ParagonIE_Sodium_Core_Curve25519_Fe $g,
        $b = 0)`
- `fe_mul121666(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `crypto_scalarmult_curve25519_ref10($n, $p)`
- `edwards_to_montgomery(ParagonIE_Sodium_Core_Curve25519_Fe $edwardsY,
        ParagonIE_Sodium_Core_Curve25519_Fe $edwardsZ)`
- `crypto_scalarmult_curve25519_ref10_base($n)`

