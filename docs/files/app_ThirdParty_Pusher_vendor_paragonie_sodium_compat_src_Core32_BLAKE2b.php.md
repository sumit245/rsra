# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\BLAKE2b.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\BLAKE2b.php`
- Type: PHP
- Size: 22275 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_BLAKE2b
Based on the work of Devi Mandiri in devi/salt.

@var SplFixedArray

@var array<int, array<int, int>>

Turn two 32-bit integers into a fixed array representing a 64-bit integer.
@internal You should not use this directly from another application
@param int $high
@param int $low
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

Convert an arbitrary number into an SplFixedArray of two 32-bit integers
that represents a 64-bit integer.
@internal You should not use this directly from another application
@param int $num
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

Adds two 64-bit integers together, returning their sum as a SplFixedArray
containing two 32-bit integers (representing a 64-bit integer).
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Int64 $x
@param ParagonIE_Sodium_Core32_Int64 $y
@return ParagonIE_Sodium_Core32_Int64

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Int64 $x
@param ParagonIE_Sodium_Core32_Int64 $y
@param ParagonIE_Sodium_Core32_Int64 $z
@return ParagonIE_Sodium_Core32_Int64

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Int64 $x
@param ParagonIE_Sodium_Core32_Int64 $y
@return ParagonIE_Sodium_Core32_Int64
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Int64 $x
@param int $c
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param SplFixedArray $x
@param int $i
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@var int $l

@var int $h

@internal You should not use this directly from another application
@param SplFixedArray $x
@param int $i
@param ParagonIE_Sodium_Core32_Int64 $u
@return void
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset

This just sets the $iv static variable.
@internal You should not use this directly from another application
@return void
@throws SodiumException
@throws TypeError

Returns a fresh BLAKE2 context.
@internal You should not use this directly from another application
@return SplFixedArray
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@param SplFixedArray $buf
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedAssignment

@internal You should not use this directly from another application
@param int $r
@param int $i
@param int $a
@param int $b
@param int $c
@param int $d
@param SplFixedArray $v
@param SplFixedArray $m
@return SplFixedArray
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayOffset

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@param int $inc
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment

@var ParagonIE_Sodium_Core32_Int64 $c

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@param SplFixedArray $p
@param int $plen
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset
@psalm-suppress MixedMethodCall
@psalm-suppress MixedOperand

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@param SplFixedArray $out
@return SplFixedArray
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset
@psalm-suppress MixedMethodCall
@psalm-suppress MixedOperand

@var int $i

@internal You should not use this directly from another application
@param SplFixedArray|null $key
@param int $outlen
@param SplFixedArray|null $salt
@param SplFixedArray|null $personal
@return SplFixedArray
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedMethodCall

Convert a string into an SplFixedArray of integers
@internal You should not use this directly from another application
@param string $str
@return SplFixedArray

Convert an SplFixedArray of integers into a string
@internal You should not use this directly from another application
@param SplFixedArray $a
@return string

@var array<int, string|int>

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@return string
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedMethodCall

@var array<int, ParagonIE_Sodium_Core32_Int64> $ctxA

@var ParagonIE_Sodium_Core32_Int64 $ctxAi

@var array<int, ParagonIE_Sodium_Core32_Int64> $ctxA

@var ParagonIE_Sodium_Core32_Int64 $ctxA1

@var ParagonIE_Sodium_Core32_Int64 $ctxA2

@var int $ctx4

Creates an SplFixedArray containing other SplFixedArray elements, from
a string (compatible with \Sodium\crypto_generichash_{init, update, final})
@internal You should not use this directly from another application
@param string $string
@return SplFixedArray
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\BLAKE2b.php`

**Classes**:
- `ParagonIE_Sodium_Core32_BLAKE2b extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `new64($high, $low)`
- `to64($num)`
- `add64($x, $y)`
- `add364($x, $y, $z)`
- `xor64(ParagonIE_Sodium_Core32_Int64 $x, ParagonIE_Sodium_Core32_Int64 $y)`
- `rotr64(ParagonIE_Sodium_Core32_Int64 $x, $c)`
- `load64($x, $i)`
- `store64(SplFixedArray $x, $i, ParagonIE_Sodium_Core32_Int64 $u)`
- `pseudoConstructor()`
- `context()`
- `compress(SplFixedArray $ctx, SplFixedArray $buf)`
- `G($r, $i, $a, $b, $c, $d, SplFixedArray $v, SplFixedArray $m)`
- `increment_counter($ctx, $inc)`
- `update(SplFixedArray $ctx, SplFixedArray $p, $plen)`
- `finish(SplFixedArray $ctx, SplFixedArray $out)`
- `init($key = null,
        $outlen = 64,
        $salt = null,
        $personal = null)`
- `stringToSplFixedArray($str = '')`
- `SplFixedArrayToString(SplFixedArray $a)`
- `contextToString(SplFixedArray $ctx)`
- `stringToContext($string)`

