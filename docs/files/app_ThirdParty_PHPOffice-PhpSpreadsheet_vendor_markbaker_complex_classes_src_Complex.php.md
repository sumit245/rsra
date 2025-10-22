# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\complex\classes\src\Complex.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\complex\classes\src\Complex.php`
- Type: PHP
- Size: 11279 bytes

## Summary (from docblocks)

Class for the management of Complex numbers
@copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
@license    https://opensource.org/licenses/MIT    MIT

Complex Number object.
@package Complex
@method float abs()
@method Complex acos()
@method Complex acosh()
@method Complex acot()
@method Complex acoth()
@method Complex acsc()
@method Complex acsch()
@method float argument()
@method Complex asec()
@method Complex asech()
@method Complex asin()
@method Complex asinh()
@method Complex atan()
@method Complex atanh()
@method Complex conjugate()
@method Complex cos()
@method Complex cosh()
@method Complex cot()
@method Complex coth()
@method Complex csc()
@method Complex csch()
@method Complex exp()
@method Complex inverse()
@method Complex ln()
@method Complex log2()
@method Complex log10()
@method Complex negative()
@method Complex pow(int|float $power)
@method float rho()
@method Complex sec()
@method Complex sech()
@method Complex sin()
@method Complex sinh()
@method Complex sqrt()
@method Complex tan()
@method Complex tanh()
@method float theta()
@method Complex add(...$complexValues)
@method Complex subtract(...$complexValues)
@method Complex multiply(...$complexValues)
@method Complex divideby(...$complexValues)
@method Complex divideinto(...$complexValues)

@constant    Euler's Number.

@constant    Regexp to split an input string into real and imaginary components and suffix

@var    float    $realPart    The value of of this complex number on the real plane.

@var    float    $imaginaryPart    The value of of this complex number on the imaginary plane.

@var    string    $suffix    The suffix for this complex number (i or j).

Validates whether the argument is a valid complex number, converting scalar or array values if possible
@param     mixed    $complexNumber   The value to parse
@return    array
@throws    Exception    If the argument isn't a Complex number or cannot be converted to one

Gets the real part of this complex number
@return Float

Gets the imaginary part of this complex number
@return Float

Gets the suffix of this complex number
@return String

Returns true if this is a real value, false if a complex value
@return Bool

Returns true if this is a complex value, false if a real value
@return Bool

Validates whether the argument is a valid complex number, converting scalar or array values if possible
@param     mixed    $complex   The value to validate
@return    Complex
@throws    Exception    If the argument isn't a Complex number or cannot be converted to one

Returns the reverse of this complex number
@return    Complex

Returns the result of the function call or operation
@return    Complex|float
@throws    Exception|\InvalidArgumentException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\markbaker\complex\classes\src\Complex.php`

**Classes**:
- `Complex\Complex`

**Functions/Methods**:
- `parseComplex($complexNumber)`
- `__construct($realPart = 0.0, $imaginaryPart = null, $suffix = 'i')`
- `getReal()`
- `getImaginary()`
- `getSuffix()`
- `isReal()`
- `isComplex()`
- `format()`
- `__toString()`
- `validateComplexArgument($complex)`
- `reverse()`
- `invertImaginary()`
- `invertReal()`
- `__call($functionName, $arguments)`

