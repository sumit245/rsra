# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Ed25519.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Ed25519.php`
- Type: PHP
- Size: 15559 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Ed25519

@internal You should not use this directly from another application
@return string (96 bytes)
@throws Exception
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $pk
@param string $sk
@param string $seed
@return string
@throws SodiumException
@throws TypeError

@var string $pk

@internal You should not use this directly from another application
@param string $keypair
@return string
@throws TypeError

@internal You should not use this directly from another application
@param string $keypair
@return string
@throws TypeError

@internal You should not use this directly from another application
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@var string $sk

@param string $pk
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@var string $signature

@internal You should not use this directly from another application
@param string $message A signed message
@param string $pk      Public key
@return string         Message (without signature)
@throws SodiumException
@throws TypeError

@var string $signature

@var string $message

@internal You should not use this directly from another application
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $sig
@param string $message
@param string $pk
@return bool
@throws SodiumException
@throws TypeError

@var bool The original value of ParagonIE_Sodium_Compat::$fastMult

@var ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A

@var string $hDigest

@var string $h

@var ParagonIE_Sodium_Core_Curve25519_Ge_P2 $R

@var string $rcheck

@internal You should not use this directly from another application
@param string $S
@return bool
@throws SodiumException
@throws TypeError

@var array<int, int> $L

@param string $R
@return bool
@throws SodiumException
@throws TypeError

@var array<int, array<int, int>> $blacklist

@var int $countBlacklist

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Ed25519.php`

**Classes**:
- `ParagonIE_Sodium_Core_Ed25519 extends ParagonIE_Sodium_Core_Curve25519`

**Functions/Methods**:
- `keypair()`
- `seed_keypair(&$pk, &$sk, $seed)`
- `secretkey($keypair)`
- `publickey($keypair)`
- `publickey_from_secretkey($sk)`
- `pk_to_curve25519($pk)`
- `sk_to_pk($sk)`
- `sign($message, $sk)`
- `sign_open($message, $pk)`
- `sign_detached($message, $sk)`
- `verify_detached($sig, $message, $pk)`
- `check_S_lt_L($S)`
- `small_order($R)`

