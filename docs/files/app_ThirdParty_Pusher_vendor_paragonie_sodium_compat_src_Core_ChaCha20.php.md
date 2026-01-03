# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20.php`
- Type: PHP
- Size: 12934 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_ChaCha20

Bitwise left rotation
@internal You should not use this directly from another application
@param int $v
@param int $n
@return int

The ChaCha20 quarter round function. Works on four 32-bit integers.
@internal You should not use this directly from another application
@param int $a
@param int $b
@param int $c
@param int $d
@return array<int, int>

@var int $a

@var int $c

@var int $a

@var int $c

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_ChaCha20_Ctx $ctx
@param string $message
@return string
@throws TypeError
@throws SodiumException

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

@var int $x10

@var int $x11

@var int $x12

@var int $x13

@var int $x14

@var int $x15

@internal You should not use this directly from another application
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $message
@param string $nonce
@param string $key
@param string $ic
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $message
@param string $nonce
@param string $key
@param string $ic
@return string
@throws SodiumException
@throws TypeError

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\ChaCha20.php`

**Classes**:
- `ParagonIE_Sodium_Core_ChaCha20 extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `rotate($v, $n)`
- `quarterRound($a, $b, $c, $d)`
- `encryptBytes(ParagonIE_Sodium_Core_ChaCha20_Ctx $ctx,
        $message = '')`
- `stream($len = 64, $nonce = '', $key = '')`
- `ietfStream($len, $nonce = '', $key = '')`
- `ietfStreamXorIc($message, $nonce = '', $key = '', $ic = '')`
- `streamXorIc($message, $nonce = '', $key = '', $ic = '')`

