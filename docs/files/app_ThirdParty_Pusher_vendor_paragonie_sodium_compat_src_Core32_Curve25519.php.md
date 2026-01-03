# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Curve25519.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Curve25519.php`
- Type: PHP
- Size: 134754 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_Curve25519
Implements Curve25519 core functions
Based on the ref10 curve25519 code provided by libsodium
@ref https://github.com/jedisct1/libsodium/blob/master/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c

Get a field element of size 10 with a value of 0
@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

Get a field element of size 10 with a value of 1
@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

Add two field elements.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@param ParagonIE_Sodium_Core32_Curve25519_Fe $g
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedMethodCall

@var array<int, ParagonIE_Sodium_Core32_Int32> $arr

Constant-time conditional move.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@param ParagonIE_Sodium_Core32_Curve25519_Fe $g
@param int $b
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedMethodCall

@var array<int, ParagonIE_Sodium_Core32_Int32> $h

@var array<int, ParagonIE_Sodium_Core32_Int32> $h

Create a copy of a field element.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return ParagonIE_Sodium_Core32_Curve25519_Fe

Give: 32-byte string.
Receive: A field element object to use for internal calculations.
@internal You should not use this directly from another application
@param string $s
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws RangeException
@throws SodiumException
@throws TypeError
@psalm-suppress MixedMethodCall

@var ParagonIE_Sodium_Core32_Int32 $h0

@var ParagonIE_Sodium_Core32_Int32 $h1

@var ParagonIE_Sodium_Core32_Int32 $h2

@var ParagonIE_Sodium_Core32_Int32 $h3

@var ParagonIE_Sodium_Core32_Int32 $h4

@var ParagonIE_Sodium_Core32_Int32 $h5

@var ParagonIE_Sodium_Core32_Int32 $h6

@var ParagonIE_Sodium_Core32_Int32 $h7

@var ParagonIE_Sodium_Core32_Int32 $h8

@var ParagonIE_Sodium_Core32_Int32 $h9

Convert a field element to a byte string.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $h
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedMethodCall

@var ParagonIE_Sodium_Core32_Int64[] $f
@var ParagonIE_Sodium_Core32_Int64 $q

@var int $h0

@var int $h1

@var int $h2

@var int $h3

@var int $h4

@var int $h5

@var int $h6

@var int $h7

@var int $h8

@var int $h9

@var array<int, int>

Is a field element negative? (1 = yes, 0 = no. Used in calculations.)
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return int
@throws SodiumException
@throws TypeError

Returns 0 if this field element results in all NUL bytes.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return bool
@throws SodiumException
@throws TypeError

@var string $str

@var string $zero

Multiply two field elements
h = f * g
@internal You should not use this directly from another application
@security Is multiplication a source of timing leaks? If so, can we do
          anything to prevent that from happening?
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@param ParagonIE_Sodium_Core32_Curve25519_Fe $g
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int32[] $f
@var ParagonIE_Sodium_Core32_Int32[] $g
@var ParagonIE_Sodium_Core32_Int64 $f0
@var ParagonIE_Sodium_Core32_Int64 $f1
@var ParagonIE_Sodium_Core32_Int64 $f2
@var ParagonIE_Sodium_Core32_Int64 $f3
@var ParagonIE_Sodium_Core32_Int64 $f4
@var ParagonIE_Sodium_Core32_Int64 $f5
@var ParagonIE_Sodium_Core32_Int64 $f6
@var ParagonIE_Sodium_Core32_Int64 $f7
@var ParagonIE_Sodium_Core32_Int64 $f8
@var ParagonIE_Sodium_Core32_Int64 $f9
@var ParagonIE_Sodium_Core32_Int64 $g0
@var ParagonIE_Sodium_Core32_Int64 $g1
@var ParagonIE_Sodium_Core32_Int64 $g2
@var ParagonIE_Sodium_Core32_Int64 $g3
@var ParagonIE_Sodium_Core32_Int64 $g4
@var ParagonIE_Sodium_Core32_Int64 $g5
@var ParagonIE_Sodium_Core32_Int64 $g6
@var ParagonIE_Sodium_Core32_Int64 $g7
@var ParagonIE_Sodium_Core32_Int64 $g8
@var ParagonIE_Sodium_Core32_Int64 $g9

@var ParagonIE_Sodium_Core32_Int64 $f1_2

@var ParagonIE_Sodium_Core32_Int64 $f3_2

@var ParagonIE_Sodium_Core32_Int64 $f5_2

@var ParagonIE_Sodium_Core32_Int64 $f7_2

@var ParagonIE_Sodium_Core32_Int64 $f9_2

@var ParagonIE_Sodium_Core32_Int64 $h0
@var ParagonIE_Sodium_Core32_Int64 $h1
@var ParagonIE_Sodium_Core32_Int64 $h2
@var ParagonIE_Sodium_Core32_Int64 $h3
@var ParagonIE_Sodium_Core32_Int64 $h4
@var ParagonIE_Sodium_Core32_Int64 $h5
@var ParagonIE_Sodium_Core32_Int64 $h6
@var ParagonIE_Sodium_Core32_Int64 $h7
@var ParagonIE_Sodium_Core32_Int64 $h8
@var ParagonIE_Sodium_Core32_Int64 $h9
@var ParagonIE_Sodium_Core32_Int64 $carry0
@var ParagonIE_Sodium_Core32_Int64 $carry1
@var ParagonIE_Sodium_Core32_Int64 $carry2
@var ParagonIE_Sodium_Core32_Int64 $carry3
@var ParagonIE_Sodium_Core32_Int64 $carry4
@var ParagonIE_Sodium_Core32_Int64 $carry5
@var ParagonIE_Sodium_Core32_Int64 $carry6
@var ParagonIE_Sodium_Core32_Int64 $carry7
@var ParagonIE_Sodium_Core32_Int64 $carry8
@var ParagonIE_Sodium_Core32_Int64 $carry9

Get the negative values for each piece of the field element.
h = -f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@psalm-suppress MixedAssignment
@psalm-suppress MixedMethodCall

Square a field element
h = f * f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedMethodCall

@var ParagonIE_Sodium_Core32_Int64 $f0

@var ParagonIE_Sodium_Core32_Int64 $f1

@var ParagonIE_Sodium_Core32_Int64 $f2

@var ParagonIE_Sodium_Core32_Int64 $f3

@var ParagonIE_Sodium_Core32_Int64 $f4

@var ParagonIE_Sodium_Core32_Int64 $f5

@var ParagonIE_Sodium_Core32_Int64 $f6

@var ParagonIE_Sodium_Core32_Int64 $f7

@var ParagonIE_Sodium_Core32_Int64 $f8

@var ParagonIE_Sodium_Core32_Int64 $f9

@var ParagonIE_Sodium_Core32_Int64 $f0_2

@var ParagonIE_Sodium_Core32_Int64 $f0f0

@var ParagonIE_Sodium_Core32_Int64 $h0
@var ParagonIE_Sodium_Core32_Int64 $h1
@var ParagonIE_Sodium_Core32_Int64 $h2
@var ParagonIE_Sodium_Core32_Int64 $h3
@var ParagonIE_Sodium_Core32_Int64 $h4
@var ParagonIE_Sodium_Core32_Int64 $h5
@var ParagonIE_Sodium_Core32_Int64 $h6
@var ParagonIE_Sodium_Core32_Int64 $h7
@var ParagonIE_Sodium_Core32_Int64 $h8
@var ParagonIE_Sodium_Core32_Int64 $h9

Square and double a field element
h = 2 * f * f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedMethodCall

@var ParagonIE_Sodium_Core32_Int64 $f0

@var ParagonIE_Sodium_Core32_Int64 $f1

@var ParagonIE_Sodium_Core32_Int64 $f2

@var ParagonIE_Sodium_Core32_Int64 $f3

@var ParagonIE_Sodium_Core32_Int64 $f4

@var ParagonIE_Sodium_Core32_Int64 $f5

@var ParagonIE_Sodium_Core32_Int64 $f6

@var ParagonIE_Sodium_Core32_Int64 $f7

@var ParagonIE_Sodium_Core32_Int64 $f8

@var ParagonIE_Sodium_Core32_Int64 $f9

@var ParagonIE_Sodium_Core32_Int64 $h0
@var ParagonIE_Sodium_Core32_Int64 $h1
@var ParagonIE_Sodium_Core32_Int64 $h2
@var ParagonIE_Sodium_Core32_Int64 $h3
@var ParagonIE_Sodium_Core32_Int64 $h4
@var ParagonIE_Sodium_Core32_Int64 $h5
@var ParagonIE_Sodium_Core32_Int64 $h6
@var ParagonIE_Sodium_Core32_Int64 $h7
@var ParagonIE_Sodium_Core32_Int64 $h8
@var ParagonIE_Sodium_Core32_Int64 $h9

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $Z
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@ref https://github.com/jedisct1/libsodium/blob/68564326e1e9dc57ef03746f85734232d20ca6fb/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c#L1054-L1106
@param ParagonIE_Sodium_Core32_Curve25519_Fe $z
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError

Subtract two field elements.
h = f - g
Preconditions:
|f| bounded by 1.1*2^25,1.1*2^24,1.1*2^25,1.1*2^24,etc.
|g| bounded by 1.1*2^25,1.1*2^24,1.1*2^25,1.1*2^24,etc.
Postconditions:
|h| bounded by 1.1*2^26,1.1*2^25,1.1*2^26,1.1*2^25,etc.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Fe $f
@param ParagonIE_Sodium_Core32_Curve25519_Fe $g
@return ParagonIE_Sodium_Core32_Curve25519_Fe
@throws SodiumException
@throws TypeError
@psalm-suppress MixedMethodCall
@psalm-suppress MixedTypeCoercion

Add two group elements.
r = p + q
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Cached $q
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@ref https://github.com/jedisct1/libsodium/blob/157c4a80c13b117608aeae12178b2d38825f9f8f/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c#L1185-L1215
@param string $a
@return array<int, mixed>
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayOffset

@var array<int, int> $r

@internal You should not use this directly from another application
@param string $s
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Curve25519_Fe $d

@var ParagonIE_Sodium_Core32_Curve25519_Fe $d

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $R
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $q
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $R
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $q
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P2
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P2
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_Cached
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Curve25519_Fe $d2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $h
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

@return ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param int $b
@param int $c
@return int
@psalm-suppress MixedReturnStatement

@internal You should not use this directly from another application
@param string|int $char
@return int (1 = yes, 0 = no)
@throws SodiumException
@throws TypeError

@var string $char

@var int $x

Conditional move
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $t
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $u
@param int $b
@return ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param int $pos
@param int $b
@return ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayOffset
@psalm-suppress MixedArgument

@var int $babs

Subtract two group elements.
r = p - q
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core32_Curve25519_Ge_Cached $q
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
@throws SodiumException
@throws TypeError

Convert a group element to a byte string.
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $h
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $a
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A
@param string $b
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P2
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess

@var array<int, ParagonIE_Sodium_Core32_Curve25519_Ge_Cached> $Ai

@var array<int, ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp> $Bi

@var array<int, ParagonIE_Sodium_Core32_Curve25519_Ge_Cached> $Ai

@var array<int, int> $aslide

@var array<int, int> $bslide

@var array<int, ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp> $Bi

@var int $index

@var ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $thisB

@var int $index

@var ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $thisB

@internal You should not use this directly from another application
@param string $a
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P3
@psalm-suppress MixedAssignment
@psalm-suppress MixedOperand
@throws SodiumException
@throws TypeError

@var array<int, int> $e

@var int $dbl

@var int $carry

@var int $carry

@var int $carry

@var array<int, int> $e

Calculates (ab + c) mod l
where l = 2^252 + 27742317777372353535851937790883648493
@internal You should not use this directly from another application
@param string $a
@param string $b
@param string $c
@return string
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int64 $s0
@var ParagonIE_Sodium_Core32_Int64 $s1
@var ParagonIE_Sodium_Core32_Int64 $s2
@var ParagonIE_Sodium_Core32_Int64 $s3
@var ParagonIE_Sodium_Core32_Int64 $s4
@var ParagonIE_Sodium_Core32_Int64 $s5
@var ParagonIE_Sodium_Core32_Int64 $s6
@var ParagonIE_Sodium_Core32_Int64 $s7
@var ParagonIE_Sodium_Core32_Int64 $s8
@var ParagonIE_Sodium_Core32_Int64 $s9
@var ParagonIE_Sodium_Core32_Int64 $s10
@var ParagonIE_Sodium_Core32_Int64 $s11
@var ParagonIE_Sodium_Core32_Int64 $s12
@var ParagonIE_Sodium_Core32_Int64 $s13
@var ParagonIE_Sodium_Core32_Int64 $s14
@var ParagonIE_Sodium_Core32_Int64 $s15
@var ParagonIE_Sodium_Core32_Int64 $s16
@var ParagonIE_Sodium_Core32_Int64 $s17
@var ParagonIE_Sodium_Core32_Int64 $s18
@var ParagonIE_Sodium_Core32_Int64 $s19
@var ParagonIE_Sodium_Core32_Int64 $s20
@var ParagonIE_Sodium_Core32_Int64 $s21
@var ParagonIE_Sodium_Core32_Int64 $s22
@var ParagonIE_Sodium_Core32_Int64 $s23

@var array<int, int>

@internal You should not use this directly from another application
@param string $s
@return string
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core32_Int64 $s0
@var ParagonIE_Sodium_Core32_Int64 $s1
@var ParagonIE_Sodium_Core32_Int64 $s2
@var ParagonIE_Sodium_Core32_Int64 $s3
@var ParagonIE_Sodium_Core32_Int64 $s4
@var ParagonIE_Sodium_Core32_Int64 $s5
@var ParagonIE_Sodium_Core32_Int64 $s6
@var ParagonIE_Sodium_Core32_Int64 $s7
@var ParagonIE_Sodium_Core32_Int64 $s8
@var ParagonIE_Sodium_Core32_Int64 $s9
@var ParagonIE_Sodium_Core32_Int64 $s10
@var ParagonIE_Sodium_Core32_Int64 $s11
@var ParagonIE_Sodium_Core32_Int64 $s12
@var ParagonIE_Sodium_Core32_Int64 $s13
@var ParagonIE_Sodium_Core32_Int64 $s14
@var ParagonIE_Sodium_Core32_Int64 $s15
@var ParagonIE_Sodium_Core32_Int64 $s16
@var ParagonIE_Sodium_Core32_Int64 $s17
@var ParagonIE_Sodium_Core32_Int64 $s18
@var ParagonIE_Sodium_Core32_Int64 $s19
@var ParagonIE_Sodium_Core32_Int64 $s20
@var ParagonIE_Sodium_Core32_Int64 $s21
@var ParagonIE_Sodium_Core32_Int64 $s22
@var ParagonIE_Sodium_Core32_Int64 $s23

@var array<int, int>

multiply by the order of the main subgroup l = 2^252+27742317777372353535851937790883648493
@param ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A
@return ParagonIE_Sodium_Core32_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError

@var array<int, int> $aslide

@var array<int, ParagonIE_Sodium_Core32_Curve25519_Ge_Cached> $Ai size 8

## References

**Database Tables (inferred)**
- `another`
- `happening`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Curve25519.php`

**Classes**:
- `ParagonIE_Sodium_Core32_Curve25519 extends ParagonIE_Sodium_Core32_Curve25519_H`

**Functions/Methods**:
- `fe_0()`
- `fe_1()`
- `fe_add(ParagonIE_Sodium_Core32_Curve25519_Fe $f,
        ParagonIE_Sodium_Core32_Curve25519_Fe $g)`
- `fe_cmov(ParagonIE_Sodium_Core32_Curve25519_Fe $f,
        ParagonIE_Sodium_Core32_Curve25519_Fe $g,
        $b = 0)`
- `fe_copy(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_frombytes($s)`
- `fe_tobytes(ParagonIE_Sodium_Core32_Curve25519_Fe $h)`
- `fe_isnegative(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_isnonzero(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_mul(ParagonIE_Sodium_Core32_Curve25519_Fe $f,
        ParagonIE_Sodium_Core32_Curve25519_Fe $g)`
- `fe_neg(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_sq(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_sq2(ParagonIE_Sodium_Core32_Curve25519_Fe $f)`
- `fe_invert(ParagonIE_Sodium_Core32_Curve25519_Fe $Z)`
- `fe_pow22523(ParagonIE_Sodium_Core32_Curve25519_Fe $z)`
- `fe_sub(ParagonIE_Sodium_Core32_Curve25519_Fe $f, ParagonIE_Sodium_Core32_Curve25519_Fe $g)`
- `ge_add(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core32_Curve25519_Ge_Cached $q)`
- `slide($a)`
- `ge_frombytes_negate_vartime($s)`
- `ge_madd(ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $R,
        ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $q)`
- `ge_msub(ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $R,
        ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $q)`
- `ge_p1p1_to_p2(ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $p)`
- `ge_p1p1_to_p3(ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 $p)`
- `ge_p2_0()`
- `ge_p2_dbl(ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $p)`
- `ge_p3_0()`
- `ge_p3_to_cached(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p)`
- `ge_p3_to_p2(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p)`
- `ge_p3_tobytes(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $h)`
- `ge_p3_dbl(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p)`
- `ge_precomp_0()`
- `equal($b, $c)`
- `negative($char)`
- `cmov(ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $t,
        ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp $u,
        $b)`
- `ge_select($pos = 0, $b = 0)`
- `ge_sub(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core32_Curve25519_Ge_Cached $q)`
- `ge_tobytes(ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $h)`
- `ge_double_scalarmult_vartime($a,
        ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A,
        $b)`
- `ge_scalarmult_base($a)`
- `sc_muladd($a, $b, $c)`
- `sc_reduce($s)`
- `ge_mul_l(ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A)`

