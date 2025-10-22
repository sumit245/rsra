# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Length.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Length.php`
- Type: PHP
- Size: 3867 bytes

## Summary (from docblocks)

Represents a measurable length, with a string numeric magnitude
and a unit. This object is immutable.

String numeric magnitude.
@type string

String unit. False is permitted if $n = 0.
@type string|bool

Whether or not this length is valid. Null if not calculated yet.
@type bool

Array Lookup array of units recognized by CSS 3
@type array

@param string $n Magnitude
@param bool|string $u Unit

@param string $s Unit string, like '2em' or '3.4in'
@return HTMLPurifier_Length
@warning Does not perform validation.

Validates the number and unit.
@return bool

Returns string representation of number.
@return string

Retrieves string numeric magnitude.
@return string

Retrieves string unit.
@return string

Returns true if this length unit is valid.
@return bool

Compares two lengths, and returns 1 if greater, -1 if less and 0 if equal.
@param HTMLPurifier_Length $l
@return int
@warning If both values are too large or small, this calculation will
         not work properly

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Length.php`

**Classes**:
- `HTMLPurifier_Length`

**Functions/Methods**:
- `__construct($n = '0', $u = false)`
- `make($s)`
- `validate()`
- `toString()`
- `getN()`
- `getUnit()`
- `isValid()`
- `compareTo($l)`

