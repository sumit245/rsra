# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Poly1305\State.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Poly1305\State.php`
- Type: PHP
- Size: 15980 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_Poly1305_State

@var array<int, int>

@var bool

@var array<int, ParagonIE_Sodium_Core32_Int32>

@var int

@var array<int, ParagonIE_Sodium_Core32_Int32>

@var array<int, ParagonIE_Sodium_Core32_Int64>

ParagonIE_Sodium_Core32_Poly1305_State constructor.
@internal You should not use this directly from another application
@param string $key
@throws InvalidArgumentException
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $message
@return self
@throws SodiumException
@throws TypeError

@var int $want

@var int $want

@var string $block

@internal You should not use this directly from another application
@param string $message
@param int $bytes
@return self
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int64 $d0
@var ParagonIE_Sodium_Core32_Int64 $d1
@var ParagonIE_Sodium_Core32_Int64 $d2
@var ParagonIE_Sodium_Core32_Int64 $d3
@var ParagonIE_Sodium_Core32_Int64 $d4
@var ParagonIE_Sodium_Core32_Int64 $r0
@var ParagonIE_Sodium_Core32_Int64 $r1
@var ParagonIE_Sodium_Core32_Int64 $r2
@var ParagonIE_Sodium_Core32_Int64 $r3
@var ParagonIE_Sodium_Core32_Int64 $r4
@var ParagonIE_Sodium_Core32_Int32 $h0
@var ParagonIE_Sodium_Core32_Int32 $h1
@var ParagonIE_Sodium_Core32_Int32 $h2
@var ParagonIE_Sodium_Core32_Int32 $h3
@var ParagonIE_Sodium_Core32_Int32 $h4

@var array<int, ParagonIE_Sodium_Core32_Int32> $h

@internal You should not use this directly from another application
@return string
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int32 $f
@var ParagonIE_Sodium_Core32_Int32 $g0
@var ParagonIE_Sodium_Core32_Int32 $g1
@var ParagonIE_Sodium_Core32_Int32 $g2
@var ParagonIE_Sodium_Core32_Int32 $g3
@var ParagonIE_Sodium_Core32_Int32 $g4
@var ParagonIE_Sodium_Core32_Int32 $h0
@var ParagonIE_Sodium_Core32_Int32 $h1
@var ParagonIE_Sodium_Core32_Int32 $h2
@var ParagonIE_Sodium_Core32_Int32 $h3
@var ParagonIE_Sodium_Core32_Int32 $h4

@var int $mask

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Poly1305\State.php`

**Classes**:
- `ParagonIE_Sodium_Core32_Poly1305_State extends ParagonIE_Sodium_Core32_Util`

**Functions/Methods**:
- `__construct($key = '')`
- `update($message = '')`
- `blocks($message, $bytes)`
- `finish()`

