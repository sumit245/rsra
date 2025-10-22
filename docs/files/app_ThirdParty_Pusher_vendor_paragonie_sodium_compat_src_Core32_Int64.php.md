# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int64.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int64.php`
- Type: PHP
- Size: 31156 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_Int64
Encapsulates a 64-bit integer.
These are immutable. It always returns a new instance.

@var array<int, int> - four 16-bit integers

@var int

@var bool

ParagonIE_Sodium_Core32_Int64 constructor.
@param array $array
@param bool $unsignedInt

Adds two int64 objects
@param ParagonIE_Sodium_Core32_Int64 $addend
@return ParagonIE_Sodium_Core32_Int64

Adds a normal integer to an int64 object
@param int $int
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@var int $int

@param int $b
@return int

@var int $x1

@var int $x2

int

int

@param int $b
@return bool

@param int $b
@return bool

@param int $hi
@param int $lo
@return ParagonIE_Sodium_Core32_Int64

@var int $a

@var int $b

@var int $c

@var int $d

@param int $int
@param int $size
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment

@var int $int

@var int $size

@var int $size

@var int $i

@param ParagonIE_Sodium_Core32_Int64 $A
@param ParagonIE_Sodium_Core32_Int64 $B
@return array<int, ParagonIE_Sodium_Core32_Int64>
@throws SodiumException
@throws TypeError
@psalm-suppress MixedInferredReturnType

@var int $aNeg

@var int $bNeg

@var int $m

@var int $swap

@var int $d

@param array<int, int> $a
@param array<int, int> $b
@param int $baseLog2
@return array<int, int>

@var array<int, int> $r

@param int $int
@return ParagonIE_Sodium_Core32_Int64

@param ParagonIE_Sodium_Core32_Int64 $right
@return ParagonIE_Sodium_Core32_Int64

@param ParagonIE_Sodium_Core32_Int64 $int
@param int $size
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment

@var int $size

@var int $i

OR this 64-bit integer with another.
@param ParagonIE_Sodium_Core32_Int64 $b
@return ParagonIE_Sodium_Core32_Int64

@param int $c
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess

@var int $c

@var array<int, int> $limbs

@var array<int, int> $myLimbs

@var int $idx_shift

@var int $sub_shift

@var int $j

@var int $k

Rotate to the right
@param int $c
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess

@var int $c

@var ParagonIE_Sodium_Core32_Int64 $return

@var int $c

@var array<int, int> $limbs

@var array<int, int> $myLimbs

@var int $idx_shift

@var int $sub_shift

@var int $j

@var int $k

@param int $c
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@var int $c

@var int $c

@var int $carry

@var int $tmp

@var int $carry

@param int $c
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@var int $c

@var int $carryRight

Subtract a normal integer from an int64 object.
@param int $int
@return ParagonIE_Sodium_Core32_Int64
@throws SodiumException
@throws TypeError

@var int $carry

@var int $tmp

@var int $carry

The difference between two Int64 objects.
@param ParagonIE_Sodium_Core32_Int64 $b
@return ParagonIE_Sodium_Core32_Int64

@var int $carry

@var int $tmp

@var int $carry

XOR this 64-bit integer with another.
@param ParagonIE_Sodium_Core32_Int64 $b
@return ParagonIE_Sodium_Core32_Int64

@param int $low
@param int $high
@return self
@throws SodiumException
@throws TypeError

@param int $low
@return self
@throws SodiumException
@throws TypeError

@return int

@param string $string
@return self
@throws SodiumException
@throws TypeError

@param string $string
@return self
@throws SodiumException
@throws TypeError

@return array<int, int>

@return ParagonIE_Sodium_Core32_Int32

@return ParagonIE_Sodium_Core32_Int64

@param bool $bool
@return self

@return string
@throws TypeError

@return string
@throws TypeError

@return string

## References

**Database Tables (inferred)**
- `an`
- `__toString`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int64.php`

**Classes**:
- `ParagonIE_Sodium_Core32_Int64`

**Functions/Methods**:
- `__construct($array = array(0, 0, 0, 0)`
- `addInt64(ParagonIE_Sodium_Core32_Int64 $addend)`
- `addInt($int)`
- `compareInt($b = 0)`
- `isGreaterThan($b = 0)`
- `isLessThanInt($b = 0)`
- `mask64($hi = 0, $lo = 0)`
- `mulInt($int = 0, $size = 0)`
- `ctSelect(ParagonIE_Sodium_Core32_Int64 $A,
        ParagonIE_Sodium_Core32_Int64 $B)`
- `multiplyLong(array $a, array $b, $baseLog2 = 16)`
- `mulIntFast($int)`
- `mulInt64Fast(ParagonIE_Sodium_Core32_Int64 $right)`
- `mulInt64(ParagonIE_Sodium_Core32_Int64 $int, $size = 0)`
- `orInt64(ParagonIE_Sodium_Core32_Int64 $b)`
- `rotateLeft($c = 0)`
- `rotateRight($c = 0)`
- `shiftLeft($c = 0)`
- `shiftRight($c = 0)`
- `subInt($int)`
- `subInt64(ParagonIE_Sodium_Core32_Int64 $b)`
- `xorInt64(ParagonIE_Sodium_Core32_Int64 $b)`
- `fromInts($low, $high)`
- `fromInt($low)`
- `toInt()`
- `fromString($string)`
- `fromReverseString($string)`
- `toArray()`
- `toInt32()`
- `toInt64()`
- `setUnsignedInt($bool = false)`
- `toString()`
- `toReverseString()`
- `__toString()`

