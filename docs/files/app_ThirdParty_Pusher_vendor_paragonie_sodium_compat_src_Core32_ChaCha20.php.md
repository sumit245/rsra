# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20.php`
- Type: PHP
- Size: 14511 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_ChaCha20

The ChaCha20 quarter round function. Works on four 32-bit integers.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Int32 $a
@param ParagonIE_Sodium_Core32_Int32 $b
@param ParagonIE_Sodium_Core32_Int32 $c
@param ParagonIE_Sodium_Core32_Int32 $d
@return array<int, ParagonIE_Sodium_Core32_Int32>
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int32 $a

@var ParagonIE_Sodium_Core32_Int32 $b

@var ParagonIE_Sodium_Core32_Int32 $c

@var ParagonIE_Sodium_Core32_Int32 $d

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_ChaCha20_Ctx $ctx
@param string $message
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

@var ParagonIE_Sodium_Core32_Int32 $j12

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

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\ChaCha20.php`

**Classes**:
- `ParagonIE_Sodium_Core32_ChaCha20 extends ParagonIE_Sodium_Core32_Util`

**Functions/Methods**:
- `quarterRound(ParagonIE_Sodium_Core32_Int32 $a,
        ParagonIE_Sodium_Core32_Int32 $b,
        ParagonIE_Sodium_Core32_Int32 $c,
        ParagonIE_Sodium_Core32_Int32 $d)`
- `encryptBytes(ParagonIE_Sodium_Core32_ChaCha20_Ctx $ctx,
        $message = '')`
- `stream($len = 64, $nonce = '', $key = '')`
- `ietfStream($len, $nonce = '', $key = '')`
- `ietfStreamXorIc($message, $nonce = '', $key = '', $ic = '')`
- `streamXorIc($message, $nonce = '', $key = '', $ic = '')`

