# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int32.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int32.php`
- Type: PHP
- Size: 24542 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core32_Int32
Encapsulates a 32-bit integer.
These are immutable. It always returns a new instance.

@var array<int, int> - two 16-bit integers
0 is the higher 16 bits
1 is the lower 16 bits

@var int

@var bool

ParagonIE_Sodium_Core32_Int32 constructor.
@param array $array
@param bool $unsignedInt

Adds two int32 objects
@param ParagonIE_Sodium_Core32_Int32 $addend
@return ParagonIE_Sodium_Core32_Int32

Adds a normal integer to an int32 object
@param int $int
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError

@var int $int

@param int $b
@return int

@var int $x1

@var int $x2

@var int $gt

@var int $eq

@param int $m
@return ParagonIE_Sodium_Core32_Int32

@var int $hi

@var int $lo

@param array<int, int> $a
@param array<int, int> $b
@param int $baseLog2
@return array<int, int>

@var array<int, int> $r

@param int $int
@return ParagonIE_Sodium_Core32_Int32

@param ParagonIE_Sodium_Core32_Int32 $right
@return ParagonIE_Sodium_Core32_Int32

@param int $int
@param int $size
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError

@var int $int

@var int $size

@var int $size

@var int $size

@var int $i

@param ParagonIE_Sodium_Core32_Int32 $int
@param int $size
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError

@var int $size

@var int $size

@var int $i

OR this 32-bit integer with another.
@param ParagonIE_Sodium_Core32_Int32 $b
@return ParagonIE_Sodium_Core32_Int32

@var int overflow

@param int $b
@return bool

@param int $b
@return bool

@param int $c
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess

@var int $c

@var int $c

@var int $idx_shift

@var int $sub_shift

@var array<int, int> $limbs

@var array<int, int> $myLimbs

@var int $j

@var int $k

Rotate to the right
@param int $c
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArrayAccess

@var int $c

@var int $c

@var int $c

@var int $idx_shift

@var int $sub_shift

@var array<int, int> $limbs

@var array<int, int> $myLimbs

@var int $j

@var int $k

@param bool $bool
@return self

@param int $c
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError

@var int $c

@var int $c

@var int $c

@var int $c

@var int $tmp

@var int $carry

@var int $tmp

@param int $c
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError
@psalm-suppress MixedAssignment
@psalm-suppress MixedOperand

@var int $c

@var int $c

@var int $c

@var int $c

Subtract a normal integer from an int32 object.
@param int $int
@return ParagonIE_Sodium_Core32_Int32
@throws SodiumException
@throws TypeError

@var int $int

@var int $tmp

@var int $carry

@var int $tmp

Subtract two int32 objects from each other
@param ParagonIE_Sodium_Core32_Int32 $b
@return ParagonIE_Sodium_Core32_Int32

@var int $tmp

@var int $carry

@var int $tmp

XOR this 32-bit integer with another.
@param ParagonIE_Sodium_Core32_Int32 $b
@return ParagonIE_Sodium_Core32_Int32

@param int $signed
@return self
@throws SodiumException
@throws TypeError

@var int $signed

@param string $string
@return self
@throws SodiumException
@throws TypeError

@param string $string
@return self
@throws SodiumException
@throws TypeError

@return array<int, int>

@return string
@throws TypeError

@return int

@return ParagonIE_Sodium_Core32_Int32

@return ParagonIE_Sodium_Core32_Int64

@return string
@throws TypeError

@return string

## References

**Database Tables (inferred)**
- `an`
- `each`
- `__toString`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core32\Int32.php`

**Classes**:
- `ParagonIE_Sodium_Core32_Int32`

**Functions/Methods**:
- `__construct($array = array(0, 0)`
- `addInt32(ParagonIE_Sodium_Core32_Int32 $addend)`
- `addInt($int)`
- `compareInt($b = 0)`
- `mask($m = 0)`
- `multiplyLong(array $a, array $b, $baseLog2 = 16)`
- `mulIntFast($int)`
- `mulInt32Fast(ParagonIE_Sodium_Core32_Int32 $right)`
- `mulInt($int = 0, $size = 0)`
- `mulInt32(ParagonIE_Sodium_Core32_Int32 $int, $size = 0)`
- `orInt32(ParagonIE_Sodium_Core32_Int32 $b)`
- `isGreaterThan($b = 0)`
- `isLessThanInt($b = 0)`
- `rotateLeft($c = 0)`
- `rotateRight($c = 0)`
- `setUnsignedInt($bool = false)`
- `shiftLeft($c = 0)`
- `shiftRight($c = 0)`
- `subInt($int)`
- `subInt32(ParagonIE_Sodium_Core32_Int32 $b)`
- `xorInt32(ParagonIE_Sodium_Core32_Int32 $b)`
- `fromInt($signed)`
- `fromString($string)`
- `fromReverseString($string)`
- `toArray()`
- `toString()`
- `toInt()`
- `toInt32()`
- `toInt64()`
- `toReverseString()`
- `__toString()`

