# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\UnitConverter.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\UnitConverter.php`
- Type: PHP
- Size: 10130 bytes

## Summary (from docblocks)

Class for converting between different unit-lengths as specified by
CSS.

Units information array. Units are grouped into measuring systems
(English, Metric), and are assigned an integer representing
the conversion factor between that unit and the smallest unit in
the system. Numeric indexes are actually magical constants that
encode conversion data from one system to the next, with a O(n^2)
constraint on memory (this is generally not a problem, since
the number of measuring systems is small.)

Minimum bcmath precision for output.
@type int

Bcmath precision for internal calculations.
@type int

Whether or not BCMath is available.
@type bool

Converts a length object of one unit into another unit.
@param HTMLPurifier_Length $length
     Instance of HTMLPurifier_Length to convert. You must validate()
     it before passing it here!
@param string $to_unit
     Unit to convert to.
@return HTMLPurifier_Length|bool
@note
     About precision: This conversion function pays very special
     attention to the incoming precision of values and attempts
     to maintain a number of significant figure. Results are
     fairly accurate up to nine digits. Some caveats:
         - If a number is zero-padded as a result of this significant
           figure tracking, the zeroes will be eliminated.
         - If a number contains less than four sigfigs ($outputPrecision)
           and this causes some decimals to be excluded, those
           decimals will be added on.

Returns the number of significant figures in a string number.
@param string $n Decimal number
@return int number of sigfigs

Adds two numbers, using arbitrary precision when available.
@param string $s1
@param string $s2
@param int $scale
@return string

Multiples two numbers, using arbitrary precision when available.
@param string $s1
@param string $s2
@param int $scale
@return string

Divides two numbers, using arbitrary precision when available.
@param string $s1
@param string $s2
@param int $scale
@return string

Rounds a number according to the number of sigfigs it should have,
using arbitrary precision when available.
@param float $n
@param int $sigfigs
@return string

Scales a float to $scale digits right of decimal point, like BCMath.
@param float $r
@param int $scale
@return string

## References

**Database Tables (inferred)**
- `one`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\UnitConverter.php`

**Classes**:
- `HTMLPurifier_UnitConverter`

**Functions/Methods**:
- `__construct($output_precision = 4, $internal_precision = 10, $force_no_bcmath = false)`
- `convert($length, $to_unit)`
- `getSigFigs($n)`
- `add($s1, $s2, $scale)`
- `mul($s1, $s2, $scale)`
- `div($s1, $s2, $scale)`
- `round($n, $sigfigs)`
- `scale($r, $scale)`

