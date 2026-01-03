# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Curve25519.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Curve25519.php`
- Type: PHP
- Size: 105458 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Curve25519
Implements Curve25519 core functions
Based on the ref10 curve25519 code provided by libsodium
@ref https://github.com/jedisct1/libsodium/blob/master/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c

Get a field element of size 10 with a value of 0
@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core_Curve25519_Fe

Get a field element of size 10 with a value of 1
@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core_Curve25519_Fe

Add two field elements.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@param ParagonIE_Sodium_Core_Curve25519_Fe $g
@return ParagonIE_Sodium_Core_Curve25519_Fe
@psalm-suppress MixedAssignment
@psalm-suppress MixedOperand

@var array<int, int> $arr

Constant-time conditional move.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@param ParagonIE_Sodium_Core_Curve25519_Fe $g
@param int $b
@return ParagonIE_Sodium_Core_Curve25519_Fe
@psalm-suppress MixedAssignment

@var array<int, int> $h

@var int $x

Create a copy of a field element.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return ParagonIE_Sodium_Core_Curve25519_Fe

Give: 32-byte string.
Receive: A field element object to use for internal calculations.
@internal You should not use this directly from another application
@param string $s
@return ParagonIE_Sodium_Core_Curve25519_Fe
@throws RangeException
@throws TypeError

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

Convert a field element to a byte string.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $h
@return string

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

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $q

@var int $carry0

@var int $carry1

@var int $carry2

@var int $carry3

@var int $carry4

@var int $carry5

@var int $carry6

@var int $carry7

@var int $carry8

@var int $carry9

@var array<int, int>

Is a field element negative? (1 = yes, 0 = no. Used in calculations.)
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return int
@throws SodiumException
@throws TypeError

Returns 0 if this field element results in all NUL bytes.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return bool
@throws SodiumException
@throws TypeError

@var string $zero

@var string $str

Multiply two field elements
h = f * g
@internal You should not use this directly from another application
@security Is multiplication a source of timing leaks? If so, can we do
          anything to prevent that from happening?
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@param ParagonIE_Sodium_Core_Curve25519_Fe $g
@return ParagonIE_Sodium_Core_Curve25519_Fe

@var int $f0

@var int $f1

@var int $f2

@var int $f3

@var int $f4

@var int $f5

@var int $f6

@var int $f7

@var int $f8

@var int $f9

@var int $g0

@var int $g1

@var int $g2

@var int $g3

@var int $g4

@var int $g5

@var int $g6

@var int $g7

@var int $g8

@var int $g9

@var int $f1_2

@var int $f3_2

@var int $f5_2

@var int $f7_2

@var int $f9_2

@var int $carry0

@var int $carry4

@var int $carry1

@var int $carry5

@var int $carry2

@var int $carry6

@var int $carry3

@var int $carry7

@var int $carry4

@var int $carry8

@var int $carry9

@var int $carry0

Get the negative values for each piece of the field element.
h = -f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return ParagonIE_Sodium_Core_Curve25519_Fe
@psalm-suppress MixedAssignment

Square a field element
h = f * f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return ParagonIE_Sodium_Core_Curve25519_Fe

@var int $f0_2

@var int $f1_2

@var int $f2_2

@var int $f3_2

@var int $f4_2

@var int $f5_2

@var int $f6_2

@var int $f7_2

@var int $carry0

@var int $carry4

@var int $carry1

@var int $carry5

@var int $carry2

@var int $carry6

@var int $carry3

@var int $carry7

@var int $carry4

@var int $carry8

@var int $carry9

@var int $carry0

Square and double a field element
h = 2 * f * f
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@return ParagonIE_Sodium_Core_Curve25519_Fe

@var int $f0_2

@var int $f1_2

@var int $f2_2

@var int $f3_2

@var int $f4_2

@var int $f5_2

@var int $f6_2

@var int $f7_2

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

@var int $carry0

@var int $carry4

@var int $carry1

@var int $carry5

@var int $carry2

@var int $carry6

@var int $carry3

@var int $carry7

@var int $carry4

@var int $carry8

@var int $carry9

@var int $carry0

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $Z
@return ParagonIE_Sodium_Core_Curve25519_Fe

@internal You should not use this directly from another application
@ref https://github.com/jedisct1/libsodium/blob/68564326e1e9dc57ef03746f85734232d20ca6fb/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c#L1054-L1106
@param ParagonIE_Sodium_Core_Curve25519_Fe $z
@return ParagonIE_Sodium_Core_Curve25519_Fe

Subtract two field elements.
h = f - g
Preconditions:
|f| bounded by 1.1*2^25,1.1*2^24,1.1*2^25,1.1*2^24,etc.
|g| bounded by 1.1*2^25,1.1*2^24,1.1*2^25,1.1*2^24,etc.
Postconditions:
|h| bounded by 1.1*2^26,1.1*2^25,1.1*2^26,1.1*2^25,etc.
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Fe $f
@param ParagonIE_Sodium_Core_Curve25519_Fe $g
@return ParagonIE_Sodium_Core_Curve25519_Fe
@psalm-suppress MixedOperand

Add two group elements.
r = p + q
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core_Curve25519_Ge_Cached $q
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

@internal You should not use this directly from another application
@ref https://github.com/jedisct1/libsodium/blob/157c4a80c13b117608aeae12178b2d38825f9f8f/src/libsodium/crypto_core/curve25519/ref10/curve25519_ref10.c#L1185-L1215
@param string $a
@return array<int, mixed>
@throws SodiumException
@throws TypeError

@var array<int, int> $r

@var int $i

@internal You should not use this directly from another application
@param string $s
@return ParagonIE_Sodium_Core_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError

@var ParagonIE_Sodium_Core_Curve25519_Fe $d

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $R
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $q
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $R
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $q
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_P2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_P3

@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core_Curve25519_Ge_P2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P2 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

@internal You should not use this directly from another application
@return ParagonIE_Sodium_Core_Curve25519_Ge_P3

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_Cached

@var ParagonIE_Sodium_Core_Curve25519_Fe $d2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_P2

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $h
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

@return ParagonIE_Sodium_Core_Curve25519_Ge_Precomp

@internal You should not use this directly from another application
@param int $b
@param int $c
@return int

@internal You should not use this directly from another application
@param int|string $char
@return int (1 = yes, 0 = no)
@throws SodiumException
@throws TypeError

Conditional move
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $t
@param ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $u
@param int $b
@return ParagonIE_Sodium_Core_Curve25519_Ge_Precomp

@internal You should not use this directly from another application
@param int $pos
@param int $b
@return ParagonIE_Sodium_Core_Curve25519_Ge_Precomp
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess
@psalm-suppress MixedArrayOffset

@var int $i

@var array<int, array<int, ParagonIE_Sodium_Core_Curve25519_Ge_Precomp>> $base

@var int $bnegative

@var int $babs

Subtract two group elements.
r = p - q
@internal You should not use this directly from another application
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p
@param ParagonIE_Sodium_Core_Curve25519_Ge_Cached $q
@return ParagonIE_Sodium_Core_Curve25519_Ge_P1p1

Convert a group element to a byte string.
@param ParagonIE_Sodium_Core_Curve25519_Ge_P2 $h
@return string
@throws SodiumException
@throws TypeError

@internal You should not use this directly from another application
@param string $a
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A
@param string $b
@return ParagonIE_Sodium_Core_Curve25519_Ge_P2
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedArrayAccess

@var array<int, ParagonIE_Sodium_Core_Curve25519_Ge_Cached> $Ai

@var array<int, ParagonIE_Sodium_Core_Curve25519_Ge_Precomp> $Bi

@var array<int, int> $aslide

@var array<int, int> $bslide

@var int $index

@var int $index

@internal You should not use this directly from another application
@param string $a
@return ParagonIE_Sodium_Core_Curve25519_Ge_P3
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedOperand

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
@throws TypeError

@var int $a0

@var int $a1

@var int $a2

@var int $a3

@var int $a4

@var int $a5

@var int $a6

@var int $a7

@var int $a8

@var int $a9

@var int $a10

@var int $a11

@var int $b0

@var int $b1

@var int $b2

@var int $b3

@var int $b4

@var int $b5

@var int $b6

@var int $b7

@var int $b8

@var int $b9

@var int $b10

@var int $b11

@var int $c0

@var int $c1

@var int $c2

@var int $c3

@var int $c4

@var int $c5

@var int $c6

@var int $c7

@var int $c8

@var int $c9

@var int $c10

@var int $c11

@var int $carry0

@var int $carry2

@var int $carry4

@var int $carry6

@var int $carry8

@var int $carry10

@var int $carry12

@var int $carry14

@var int $carry16

@var int $carry18

@var int $carry20

@var int $carry22

@var int $carry1

@var int $carry3

@var int $carry5

@var int $carry7

@var int $carry9

@var int $carry11

@var int $carry13

@var int $carry15

@var int $carry17

@var int $carry19

@var int $carry21

@var int $carry6

@var int $carry8

@var int $carry10

@var int $carry12

@var int $carry14

@var int $carry16

@var int $carry7

@var int $carry9

@var int $carry11

@var int $carry13

@var int $carry15

@var int $carry0

@var int $carry2

@var int $carry4

@var int $carry6

@var int $carry8

@var int $carry10

@var int $carry1

@var int $carry3

@var int $carry5

@var int $carry7

@var int $carry9

@var int $carry11

@var int $carry0

@var int $carry1

@var int $carry2

@var int $carry3

@var int $carry4

@var int $carry5

@var int $carry6

@var int $carry7

@var int $carry8

@var int $carry9

@var int $carry10

@var int $carry11

@var int $carry0

@var int $carry1

@var int $carry2

@var int $carry3

@var int $carry4

@var int $carry5

@var int $carry6

@var int $carry7

@var int $carry8

@var int $carry9

@var int $carry10

@var array<int, int>

@internal You should not use this directly from another application
@param string $s
@return string
@throws TypeError

@var int $s0

@var int $s1

@var int $s2

@var int $s3

@var int $s4

@var int $s5

@var int $s6

@var int $s7

@var int $s8

@var int $s9

@var int $s10

@var int $s11

@var int $s12

@var int $s13

@var int $s14

@var int $s15

@var int $s16

@var int $s17

@var int $s18

@var int $s19

@var int $s20

@var int $s21

@var int $s22

@var int $s23

@var int $carry6

@var int $carry8

@var int $carry10

@var int $carry12

@var int $carry14

@var int $carry16

@var int $carry7

@var int $carry9

@var int $carry11

@var int $carry13

@var int $carry15

@var int $carry0

@var int $carry2

@var int $carry4

@var int $carry6

@var int $carry8

@var int $carry10

@var int $carry1

@var int $carry3

@var int $carry5

@var int $carry7

@var int $carry9

@var int $carry11

@var int $carry0

@var int $carry1

@var int $carry2

@var int $carry3

@var int $carry4

@var int $carry5

@var int $carry6

@var int $carry7

@var int $carry8

@var int $carry9

@var int $carry10

@var int $carry11

@var int $carry0

@var int $carry1

@var int $carry2

@var int $carry3

@var int $carry4

@var int $carry5

@var int $carry6

@var int $carry7

@var int $carry8

@var int $carry9

@var int $carry10

@var array<int, int>

multiply by the order of the main subgroup l = 2^252+27742317777372353535851937790883648493
@param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A
@return ParagonIE_Sodium_Core_Curve25519_Ge_P3

@var array<int, int> $aslide

@var array<int, ParagonIE_Sodium_Core_Curve25519_Ge_Cached> $Ai size 8

## References

**Database Tables (inferred)**
- `another`
- `happening`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Curve25519.php`

**Classes**:
- `ParagonIE_Sodium_Core_Curve25519 extends ParagonIE_Sodium_Core_Curve25519_H`

**Functions/Methods**:
- `fe_0()`
- `fe_1()`
- `fe_add(ParagonIE_Sodium_Core_Curve25519_Fe $f,
        ParagonIE_Sodium_Core_Curve25519_Fe $g)`
- `fe_cmov(ParagonIE_Sodium_Core_Curve25519_Fe $f,
        ParagonIE_Sodium_Core_Curve25519_Fe $g,
        $b = 0)`
- `fe_copy(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_frombytes($s)`
- `fe_tobytes(ParagonIE_Sodium_Core_Curve25519_Fe $h)`
- `fe_isnegative(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_isnonzero(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_mul(ParagonIE_Sodium_Core_Curve25519_Fe $f,
        ParagonIE_Sodium_Core_Curve25519_Fe $g)`
- `fe_neg(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_sq(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_sq2(ParagonIE_Sodium_Core_Curve25519_Fe $f)`
- `fe_invert(ParagonIE_Sodium_Core_Curve25519_Fe $Z)`
- `fe_pow22523(ParagonIE_Sodium_Core_Curve25519_Fe $z)`
- `fe_sub(ParagonIE_Sodium_Core_Curve25519_Fe $f, ParagonIE_Sodium_Core_Curve25519_Fe $g)`
- `ge_add(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core_Curve25519_Ge_Cached $q)`
- `slide($a)`
- `ge_frombytes_negate_vartime($s)`
- `ge_madd(ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $R,
        ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $q)`
- `ge_msub(ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $R,
        ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $q)`
- `ge_p1p1_to_p2(ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $p)`
- `ge_p1p1_to_p3(ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 $p)`
- `ge_p2_0()`
- `ge_p2_dbl(ParagonIE_Sodium_Core_Curve25519_Ge_P2 $p)`
- `ge_p3_0()`
- `ge_p3_to_cached(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p)`
- `ge_p3_to_p2(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p)`
- `ge_p3_tobytes(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $h)`
- `ge_p3_dbl(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p)`
- `ge_precomp_0()`
- `equal($b, $c)`
- `negative($char)`
- `cmov(ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $t,
        ParagonIE_Sodium_Core_Curve25519_Ge_Precomp $u,
        $b)`
- `ge_select($pos = 0, $b = 0)`
- `ge_sub(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $p,
        ParagonIE_Sodium_Core_Curve25519_Ge_Cached $q)`
- `ge_tobytes(ParagonIE_Sodium_Core_Curve25519_Ge_P2 $h)`
- `ge_double_scalarmult_vartime($a,
        ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A,
        $b)`
- `ge_scalarmult_base($a)`
- `sc_muladd($a, $b, $c)`
- `sc_reduce($s)`
- `ge_mul_l(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A)`

