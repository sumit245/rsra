# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\BLAKE2b.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\BLAKE2b.php`
- Type: PHP
- Size: 23892 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_BLAKE2b
Based on the work of Devi Mandiri in devi/salt.

@var SplFixedArray

@var array<int, array<int, int>>

Turn two 32-bit integers into a fixed array representing a 64-bit integer.
@internal You should not use this directly from another application
@param int $high
@param int $low
@return SplFixedArray
@psalm-suppress MixedAssignment

Convert an arbitrary number into an SplFixedArray of two 32-bit integers
that represents a 64-bit integer.
@internal You should not use this directly from another application
@param int $num
@return SplFixedArray

Adds two 64-bit integers together, returning their sum as a SplFixedArray
containing two 32-bit integers (representing a 64-bit integer).
@internal You should not use this directly from another application
@param SplFixedArray $x
@param SplFixedArray $y
@return SplFixedArray
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedOperand

@internal You should not use this directly from another application
@param SplFixedArray $x
@param SplFixedArray $y
@param SplFixedArray $z
@return SplFixedArray

@internal You should not use this directly from another application
@param SplFixedArray $x
@param SplFixedArray $y
@return SplFixedArray
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param SplFixedArray $x
@param int $c
@return SplFixedArray
@psalm-suppress MixedAssignment

@var int $tmp

@var int $h0

@var int $l0

@var int $h0

@var int $h1

@var int $l1

@var int $l1

@internal You should not use this directly from another application
@param SplFixedArray $x
@return int
@psalm-suppress MixedOperand

@internal You should not use this directly from another application
@param SplFixedArray $x
@param int $i
@return SplFixedArray
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayOffset

@var int $l

@var int $h

@internal You should not use this directly from another application
@param SplFixedArray $x
@param int $i
@param SplFixedArray $u
@return void
@psalm-suppress MixedAssignment

@var int $uIdx

@psalm-suppress MixedOperand

This just sets the $iv static variable.
@internal You should not use this directly from another application
@return void

Returns a fresh BLAKE2 context.
@internal You should not use this directly from another application
@return SplFixedArray
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@param SplFixedArray $buf
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset

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
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment

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
@psalm-suppress MixedOperand

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
@psalm-suppress MixedArrayOffset

Convert a string into an SplFixedArray of integers
@internal You should not use this directly from another application
@param string $str
@return SplFixedArray

Convert an SplFixedArray of integers into a string
@internal You should not use this directly from another application
@param SplFixedArray $a
@return string
@throws TypeError

@var array<int, int|string> $arr

@internal You should not use this directly from another application
@param SplFixedArray $ctx
@return string
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedAssignment
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayAssignment
@psalm-suppress MixedArrayOffset
@psalm-suppress MixedMethodCall

@var array<int, array<int, int>> $ctxA

@var int $ctx4

Creates an SplFixedArray containing other SplFixedArray elements, from
a string (compatible with \Sodium\crypto_generichash_{init, update, final})
@internal You should not use this directly from another application
@param string $string
@return SplFixedArray
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAssignment

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\BLAKE2b.php`

**Classes**:
- `ParagonIE_Sodium_Core_BLAKE2b extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `new64($high, $low)`
- `to64($num)`
- `add64($x, $y)`
- `add364($x, $y, $z)`
- `xor64(SplFixedArray $x, SplFixedArray $y)`
- `rotr64($x, $c)`
- `flatten64($x)`
- `load64(SplFixedArray $x, $i)`
- `store64(SplFixedArray $x, $i, SplFixedArray $u)`
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

