# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Util.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Util.php`
- Type: PHP
- Size: 27429 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Core_Util

@param int $integer
@param int $size (16, 32, 64)
@return int

@var int $realSize

@var int $size

Convert a binary string into a hexadecimal string without cache-timing
leaks
@internal You should not use this directly from another application
@param string $binaryString (raw binary)
@return string
@throws TypeError

@var array<int, int> $chunk

@var int $c

@var int $b

Convert a binary string into a hexadecimal string without cache-timing
leaks, returning uppercase letters (as per RFC 4648)
@internal You should not use this directly from another application
@param string $bin_string (raw binary)
@return string
@throws TypeError

@var array<int, int> $chunk

Lower 16 bits
@var int $c

Upper 16 bits
@var int $b

Use pack() and binary operators to turn the two integers
into hexadecimal characters. We don't use chr() here, because
it uses a lookup table internally and we want to avoid
cache-timing side-channels.

Cache-timing-safe variant of ord()
@internal You should not use this directly from another application
@param string $chr
@return int
@throws SodiumException
@throws TypeError

@var array<int, int> $chunk

Compares two strings.
@internal You should not use this directly from another application
@param string $left
@param string $right
@param int $len
@return int
@throws SodiumException
@throws TypeError

If a variable does not match a given type, throw a TypeError.
@param mixed $mixedVar
@param string $type
@param int $argumentIndex
@throws TypeError
@throws SodiumException
@return void

Evaluate whether or not two strings are equal (in constant-time)
@param string $left
@param string $right
@return bool
@throws SodiumException
@throws TypeError

@var int $len

Convert a hexadecimal string into a binary string without cache-timing
leaks
@internal You should not use this directly from another application
@param string $hexString
@param bool $strictPadding
@return string (raw binary)
@throws RangeException
@throws TypeError

@var int $hex_pos

@var string $bin

@var int $c_acc

@var int $hex_len

@var int $state

@var int $c

@var int $c_num

@var int $c_num0

@var int $c_alpha

@var int $c_alpha0

@var int $c_val

Turn an array of integers into a string
@internal You should not use this directly from another application
@param array<int, int> $ints
@return string

@var array<int, int> $args

Cache-timing-safe variant of ord()
@internal You should not use this directly from another application
@param int $int
@return string
@throws TypeError

Load a 3 character substring into an integer
@internal You should not use this directly from another application
@param string $string
@return int
@throws RangeException
@throws TypeError

@var array<int, int> $unpacked

Load a 4 character substring into an integer
@internal You should not use this directly from another application
@param string $string
@return int
@throws RangeException
@throws TypeError

@var array<int, int> $unpacked

Load a 8 character substring into an integer
@internal You should not use this directly from another application
@param string $string
@return int
@throws RangeException
@throws SodiumException
@throws TypeError

@var array<int, int> $unpacked

@var int $result

@internal You should not use this directly from another application
@param string $left
@param string $right
@return int
@throws SodiumException
@throws TypeError

Multiply two integers in constant-time
Micro-architecture timing side-channels caused by how your CPU
implements multiplication are best prevented by never using the
multiplication operators and ensuring that our code always takes
the same number of operations to complete, regardless of the values
of $a and $b.
@internal You should not use this directly from another application
@param int $a
@param int $b
@param int $size Limits the number of operations (useful for small,
                 constant operands)
@return int

@var int $defaultSize

@var int $defaultSize

@var int $size

@var int $size

Mask is either -1 or 0.
-1 in binary looks like 0x1111 ... 1111
 0 in binary looks like 0x0000 ... 0000
@var int

Ensure $b is a positive integer, without creating
a branching side-channel
@var int $b

Unless $size is provided:
This loop always runs 32 times when PHP_INT_SIZE is 4.
This loop always runs 64 times when PHP_INT_SIZE is 8.

If $b was negative, we then apply the same value to $c here.
It doesn't matter much if $a was negative; the $c += above would
have produced a negative integer to begin with. But a negative $b
makes $b >>= 1 never return 0, so we would end up with incorrect
results.
The end result is what we'd expect from integer multiplication.

Convert any arbitrary numbers into two 32-bit integers that represent
a 64-bit integer.
@internal You should not use this directly from another application
@param int|float $num
@return array<int, int>

@var int $low

@var int $high

@var int $high

Store a 24-bit integer into a string, treating it as big-endian.
@internal You should not use this directly from another application
@param int $int
@return string
@throws TypeError

@var string $packed

Store a 32-bit integer into a string, treating it as little-endian.
@internal You should not use this directly from another application
@param int $int
@return string
@throws TypeError

@var string $packed

Store a 32-bit integer into a string, treating it as big-endian.
@internal You should not use this directly from another application
@param int $int
@return string
@throws TypeError

@var string $packed

Stores a 64-bit integer as an string, treating it as little-endian.
@internal You should not use this directly from another application
@param int $int
@return string
@throws TypeError

@var string $packed

Safe string length
@internal You should not use this directly from another application
@ref mbstring.func_overload
@param string $str
@return int
@throws TypeError

Turn a string into an array of integers
@internal You should not use this directly from another application
@param string $string
@return array<int, int>
@throws TypeError

@var array<int, int>

Safe substring
@internal You should not use this directly from another application
@ref mbstring.func_overload
@param string $str
@param int $start
@param int $length
@return string
@throws TypeError

Compare a 16-character byte string in constant time.
@internal You should not use this directly from another application
@param string $a
@param string $b
@return bool
@throws SodiumException
@throws TypeError

Compare a 32-character byte string in constant time.
@internal You should not use this directly from another application
@param string $a
@param string $b
@return bool
@throws SodiumException
@throws TypeError

Calculate $a ^ $b for two strings.
@internal You should not use this directly from another application
@param string $a
@param string $b
@return string
@throws TypeError

Returns whether or not mbstring.func_overload is in effect.
@internal You should not use this directly from another application
@return bool

@var bool $mbstring

## References

**Database Tables (inferred)**
- `another`
- `integer`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Core\Util.php`

**Classes**:
- `ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `abs($integer, $size = 0)`
- `bin2hex($binaryString)`
- `bin2hexUpper($bin_string)`
- `chrToInt($chr)`
- `compare($left, $right, $len = null)`
- `declareScalarType(&$mixedVar = null, $type = 'void', $argumentIndex = 0)`
- `hashEquals($left, $right)`
- `hex2bin($hexString, $strictPadding = false)`
- `intArrayToString(array $ints)`
- `intToChr($int)`
- `load_3($string)`
- `load_4($string)`
- `load64_le($string)`
- `memcmp($left, $right)`
- `mul($a, $b, $size = 0)`
- `numericTo64BitInteger($num)`
- `store_3($int)`
- `store32_le($int)`
- `store_4($int)`
- `store64_le($int)`
- `strlen($str)`
- `stringToIntArray($string)`
- `substr($str, $start = 0, $length = null)`
- `verify_16($a, $b)`
- `verify_32($a, $b)`
- `xorStrings($a, $b)`
- `isMbStringOverride()`

