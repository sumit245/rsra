# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Node\Number.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Node\Number.php`
- Type: PHP
- Size: 21303 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Dimension + optional units
{@internal
    This is a work-in-progress.
    The \ArrayAccess interface is temporary until the migration is complete.
}}
@author Anthon Pang <anthon.pang@gmail.com>
@template-implements \ArrayAccess<int, mixed>

@var int
@deprecated use {Number::PRECISION} instead to read the precision. Configuring it is not supported anymore.

@see http://www.w3.org/TR/2012/WD-css3-values-20120308/
@var array
@phpstan-var array<string, array<string, float|int>>

@var int|float

@var string[]
@phpstan-var list<string>

@var string[]
@phpstan-var list<string>

Initialize number
@param int|float       $dimension
@param string[]|string $numeratorUnits
@param string[]        $denominatorUnits
@phpstan-param list<string>|string $numeratorUnits
@phpstan-param list<string>        $denominatorUnits

@return float|int

@return string[]

@return string[]

@return bool

@return mixed

@return void

@return void

Returns true if the number is unitless
@return bool

Checks whether the number has exactly this unit
@param string $unit
@return bool

Returns unit(s) as the product of numerator units divided by the product of denominator units
@return string

@param float|int $min
@param float|int $max
@param string|null $name
@return float|int
@throws SassScriptException

@param string|null $varName
@return void

@param string      $unit
@param string|null $varName
@return void

@param Number $other
@return void

Returns a copy of this number, converted to the units represented by $newNumeratorUnits and $newDenominatorUnits.
This does not throw an error if this number is unitless and
$newNumeratorUnits/$newDenominatorUnits are not empty, or vice versa. Instead,
it treats all unitless numbers as convertible to and from all units without
changing the value.
@param string[] $newNumeratorUnits
@param string[] $newDenominatorUnits
@return Number
@phpstan-param list<string> $newNumeratorUnits
@phpstan-param list<string> $newDenominatorUnits
@throws SassScriptException if this number's units are not compatible with $newNumeratorUnits and $newDenominatorUnits

@param Number $other
@return bool

@param Number $other
@return bool

@param Number $other
@return bool

@param Number $other
@return bool

@param Number $other
@return bool

@param Number $other
@return Number

@param Number $other
@return Number

@return Number

@param Number $other
@return Number

@param Number $other
@return Number

@param Number $other
@return Number

@param Number $other
@return bool

Output number
@param \ScssPhp\ScssPhp\Compiler $compiler
@return string

{@inheritdoc}

@param Number   $other
@param callable $operation
@return Number
@phpstan-param callable(int|float, int|float): (int|float) $operation

@param Number $other
@param callable $operation
@return mixed
@phpstan-template T
@phpstan-param callable(int|float, int|float): T $operation
@phpstan-return T

@param string[] $numeratorUnits
@param string[] $denominatorUnits
@return int|float
@phpstan-param list<string> $numeratorUnits
@phpstan-param list<string> $denominatorUnits
@throws SassScriptException if this number's units are not compatible with $numeratorUnits and $denominatorUnits

@param int|float $value
@param string[] $numerators1
@param string[] $denominators1
@param string[] $numerators2
@param string[] $denominators2
@return Number
@phpstan-param list<string> $numerators1
@phpstan-param list<string> $denominators1
@phpstan-param list<string> $numerators2
@phpstan-param list<string> $denominators2

Returns the number of [unit1]s per [unit2].
Equivalently, `1unit1 * conversionFactor(unit1, unit2) = 1unit2`.
@param string $unit1
@param string $unit2
@return float|int|null

Returns unit(s) as the product of numerator units divided by the product of denominator units
@param string[] $numerators
@param string[] $denominators
@phpstan-param list<string> $numerators
@phpstan-param list<string> $denominators
@return string

## References

**Database Tables (inferred)**
- `all`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Node\Number.php`

**Classes**:
- `ScssPhp\ScssPhp\Node\Number extends Node implements \ArrayAccess`

**Functions/Methods**:
- `__construct($dimension, $numeratorUnits, array $denominatorUnits = [])`
- `getDimension()`
- `getNumeratorUnits()`
- `getDenominatorUnits()`
- `offsetExists($offset)`
- `offsetGet($offset)`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `unitless()`
- `hasUnit($unit)`
- `unitStr()`
- `valueInRange($min, $max, $name = null)`
- `assertNoUnits($varName = null)`
- `assertUnit($unit, $varName = null)`
- `assertSameUnitOrUnitless(Number $other)`
- `coerce(array $newNumeratorUnits, array $newDenominatorUnits)`
- `isComparableTo(Number $other)`
- `lessThan(Number $other)`
- `lessThanOrEqual(Number $other)`
- `greaterThan(Number $other)`
- `greaterThanOrEqual(Number $other)`
- `plus(Number $other)`
- `minus(Number $other)`
- `unaryMinus()`
- `modulo(Number $other)`
- `times(Number $other)`
- `dividedBy(Number $other)`
- `equals(Number $other)`
- `output(Compiler $compiler = null)`
- `__toString()`
- `coerceNumber(Number $other, $operation)`
- `coerceUnits(Number $other, $operation)`
- `valueInUnits(array $numeratorUnits, array $denominatorUnits)`
- `multiplyUnits($value, array $numerators1, array $denominators1, array $numerators2, array $denominators2)`
- `getConversionFactor($unit1, $unit2)`
- `getUnitString(array $numerators, array $denominators)`

