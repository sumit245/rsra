# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig.php`
- Type: PHP
- Size: 42227 bytes

## Summary (from docblocks)

@deprecated 1.18.0

ARABIC.
Converts a Roman numeral to an Arabic numeral.
Excel Function:
       ARABIC(text)
@Deprecated 1.18.0
@See MathTrig\Arabic::evaluate()
     Use the evaluate method in the MathTrig\Arabic class instead
@param array|string $roman
@return array|int|string the arabic numberal contrived from the roman numeral

ATAN2.
This function calculates the arc tangent of the two variables x and y. It is similar to
       calculating the arc tangent of y ÷ x, except that the signs of both arguments are used
       to determine the quadrant of the result.
The arctangent is the angle from the x-axis to a line containing the origin (0, 0) and a
       point with coordinates (xCoordinate, yCoordinate). The angle is given in radians between
       -pi and pi, excluding -pi.
Note that the Excel ATAN2() function accepts its arguments in the reverse order to the standard
       PHP atan2() function, so we need to reverse them here before calling the PHP atan() function.
Excel Function:
       ATAN2(xCoordinate,yCoordinate)
@Deprecated 1.18.0
@See MathTrig\Trig\Tangent::atan2()
     Use the atan2 method in the MathTrig\Trig\Tangent class instead
@param array|float $xCoordinate the x-coordinate of the point
@param array|float $yCoordinate the y-coordinate of the point
@return array|float|string the inverse tangent of the specified x- and y-coordinates, or a string containing an error

BASE.
Converts a number into a text representation with the given radix (base).
Excel Function:
       BASE(Number, Radix [Min_length])
@Deprecated 1.18.0
@See MathTrig\Base::evaluate()
     Use the evaluate method in the MathTrig\Base class instead
@param float $number
@param float $radix
@param int $minLength
@return array|string the text representation with the given radix (base)

CEILING.
Returns number rounded up, away from zero, to the nearest multiple of significance.
       For example, if you want to avoid using pennies in your prices and your product is
       priced at $4.42, use the formula =CEILING(4.42,0.05) to round prices up to the
       nearest nickel.
Excel Function:
       CEILING(number[,significance])
@Deprecated 1.17.0
@param float $number the number you want to round
@param float $significance the multiple to which you want to round
@return array|float|string Rounded Number, or a string containing an error
@see MathTrig\Ceiling::ceiling()
     Use the ceiling() method in the MathTrig\Ceiling class instead

COMBIN.
Returns the number of combinations for a given number of items. Use COMBIN to
       determine the total possible number of groups for a given number of items.
Excel Function:
       COMBIN(numObjs,numInSet)
@Deprecated 1.18.0
@see MathTrig\Combinations::withoutRepetition()
     Use the withoutRepetition() method in the MathTrig\Combinations class instead
@param array|int $numObjs Number of different objects
@param array|int $numInSet Number of objects in each combination
@return array|float|int|string Number of combinations, or a string containing an error

EVEN.
Returns number rounded up to the nearest even integer.
You can use this function for processing items that come in twos. For example,
       a packing crate accepts rows of one or two items. The crate is full when
       the number of items, rounded up to the nearest two, matches the crate's
       capacity.
Excel Function:
       EVEN(number)
@Deprecated 1.18.0
@see MathTrig\Round::even()
     Use the even() method in the MathTrig\Round class instead
@param array|float $number Number to round
@return array|float|int|string Rounded Number, or a string containing an error

Helper function for Even.
@Deprecated 1.18.0
@see MathTrig\Helpers::getEven()
     Use the evaluate() method in the MathTrig\Helpers class instead

FACT.
Returns the factorial of a number.
The factorial of a number is equal to 1*2*3*...* number.
Excel Function:
       FACT(factVal)
@Deprecated 1.18.0
@param array|float $factVal Factorial Value
@return array|float|int|string Factorial, or a string containing an error
@see MathTrig\Factorial::fact()
     Use the fact() method in the MathTrig\Factorial class instead

FACTDOUBLE.
Returns the double factorial of a number.
Excel Function:
       FACTDOUBLE(factVal)
@Deprecated 1.18.0
@param array|float $factVal Factorial Value
@return array|float|int|string Double Factorial, or a string containing an error
@see MathTrig\Factorial::factDouble()
     Use the factDouble() method in the MathTrig\Factorial class instead

FLOOR.
Rounds number down, toward zero, to the nearest multiple of significance.
Excel Function:
       FLOOR(number[,significance])
@Deprecated 1.17.0
@param float $number Number to round
@param float $significance Significance
@return array|float|string Rounded Number, or a string containing an error
@see MathTrig\Floor::floor()
     Use the floor() method in the MathTrig\Floor class instead

FLOOR.MATH.
Round a number down to the nearest integer or to the nearest multiple of significance.
Excel Function:
       FLOOR.MATH(number[,significance[,mode]])
@Deprecated 1.17.0
@param float $number Number to round
@param float $significance Significance
@param int $mode direction to round negative numbers
@return array|float|string Rounded Number, or a string containing an error
@see MathTrig\Floor::math()
     Use the math() method in the MathTrig\Floor class instead

FLOOR.PRECISE.
Rounds number down, toward zero, to the nearest multiple of significance.
Excel Function:
       FLOOR.PRECISE(number[,significance])
@Deprecated 1.17.0
@param float $number Number to round
@param float $significance Significance
@return array|float|string Rounded Number, or a string containing an error
@see MathTrig\Floor::precise()
     Use the precise() method in the MathTrig\Floor class instead

INT.
Casts a floating point value to an integer
Excel Function:
       INT(number)
@Deprecated 1.17.0
@see MathTrig\IntClass::evaluate()
     Use the evaluate() method in the MathTrig\IntClass class instead
@param array|float $number Number to cast to an integer
@return array|int|string Integer value, or a string containing an error

GCD.
Returns the greatest common divisor of a series of numbers.
The greatest common divisor is the largest integer that divides both
       number1 and number2 without a remainder.
Excel Function:
       GCD(number1[,number2[, ...]])
@Deprecated 1.18.0
@see MathTrig\Gcd::evaluate()
     Use the evaluate() method in the MathTrig\Gcd class instead
@param mixed ...$args Data values
@return int|mixed|string Greatest Common Divisor, or a string containing an error

LCM.
Returns the lowest common multiplier of a series of numbers
The least common multiple is the smallest positive integer that is a multiple
of all integer arguments number1, number2, and so on. Use LCM to add fractions
with different denominators.
Excel Function:
       LCM(number1[,number2[, ...]])
@Deprecated 1.18.0
@see MathTrig\Lcm::evaluate()
     Use the evaluate() method in the MathTrig\Lcm class instead
@param mixed ...$args Data values
@return int|string Lowest Common Multiplier, or a string containing an error

LOG_BASE.
Returns the logarithm of a number to a specified base. The default base is 10.
Excel Function:
       LOG(number[,base])
@Deprecated 1.18.0
@see MathTrig\Logarithms::withBase()
     Use the withBase() method in the MathTrig\Logarithms class instead
@param float $number The positive real number for which you want the logarithm
@param float $base The base of the logarithm. If base is omitted, it is assumed to be 10.
@return array|float|string The result, or a string containing an error

MDETERM.
Returns the matrix determinant of an array.
Excel Function:
       MDETERM(array)
@Deprecated 1.18.0
@see MathTrig\MatrixFunctions::determinant()
     Use the determinant() method in the MathTrig\MatrixFunctions class instead
@param array $matrixValues A matrix of values
@return float|string The result, or a string containing an error

MINVERSE.
Returns the inverse matrix for the matrix stored in an array.
Excel Function:
       MINVERSE(array)
@Deprecated 1.18.0
@see MathTrig\MatrixFunctions::inverse()
     Use the inverse() method in the MathTrig\MatrixFunctions class instead
@param array $matrixValues A matrix of values
@return array|string The result, or a string containing an error

MMULT.
@Deprecated 1.18.0
@see MathTrig\MatrixFunctions::multiply()
     Use the multiply() method in the MathTrig\MatrixFunctions class instead
@param array $matrixData1 A matrix of values
@param array $matrixData2 A matrix of values
@return array|string The result, or a string containing an error

MOD.
@Deprecated 1.18.0
@see MathTrig\Operations::mod()
     Use the mod() method in the MathTrig\Operations class instead
@param int $a Dividend
@param int $b Divisor
@return array|float|int|string Remainder, or a string containing an error

MROUND.
Rounds a number to the nearest multiple of a specified value
@Deprecated 1.17.0
@param float $number Number to round
@param array|int $multiple Multiple to which you want to round $number
@return array|float|string Rounded Number, or a string containing an error
@see MathTrig\Round::multiple()
     Use the multiple() method in the MathTrig\Mround class instead

MULTINOMIAL.
Returns the ratio of the factorial of a sum of values to the product of factorials.
@Deprecated 1.18.0
@See MathTrig\Factorial::multinomial()
     Use the multinomial method in the MathTrig\Factorial class instead
@param mixed[] $args An array of mixed values for the Data Series
@return float|string The result, or a string containing an error

ODD.
Returns number rounded up to the nearest odd integer.
@Deprecated 1.18.0
@See MathTrig\Round::odd()
     Use the odd method in the MathTrig\Round class instead
@param array|float $number Number to round
@return array|float|int|string Rounded Number, or a string containing an error

POWER.
Computes x raised to the power y.
@Deprecated 1.18.0
@See MathTrig\Operations::power()
     Use the evaluate method in the MathTrig\Power class instead
@param float $x
@param float $y
@return array|float|int|string The result, or a string containing an error

PRODUCT.
PRODUCT returns the product of all the values and cells referenced in the argument list.
@Deprecated 1.18.0
@See MathTrig\Operations::product()
     Use the product method in the MathTrig\Operations class instead
Excel Function:
       PRODUCT(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

QUOTIENT.
QUOTIENT function returns the integer portion of a division. Numerator is the divided number
       and denominator is the divisor.
@Deprecated 1.18.0
@See MathTrig\Operations::quotient()
     Use the quotient method in the MathTrig\Operations class instead
Excel Function:
       QUOTIENT(value1[,value2[, ...]])
@param mixed $numerator
@param mixed $denominator
@return array|int|string

RAND/RANDBETWEEN.
@Deprecated 1.18.0
@See MathTrig\Random::randBetween()
     Use the randBetween or randBetween method in the MathTrig\Random class instead
@param int $min Minimal value
@param int $max Maximal value
@return array|float|int|string Random number

ROMAN.
Converts a number to Roman numeral
@Deprecated 1.17.0
@Ssee MathTrig\Roman::evaluate()
     Use the evaluate() method in the MathTrig\Roman class instead
@param mixed $aValue Number to convert
@param mixed $style Number indicating one of five possible forms
@return array|string Roman numeral, or a string containing an error

ROUNDUP.
Rounds a number up to a specified number of decimal places
@Deprecated 1.17.0
@See MathTrig\Round::up()
     Use the up() method in the MathTrig\Round class instead
@param array|float $number Number to round
@param array|int $digits Number of digits to which you want to round $number
@return array|float|string Rounded Number, or a string containing an error

ROUNDDOWN.
Rounds a number down to a specified number of decimal places
@Deprecated 1.17.0
@See MathTrig\Round::down()
     Use the down() method in the MathTrig\Round class instead
@param array|float $number Number to round
@param array|int $digits Number of digits to which you want to round $number
@return array|float|string Rounded Number, or a string containing an error

SERIESSUM.
Returns the sum of a power series
@Deprecated 1.18.0
@See MathTrig\SeriesSum::evaluate()
     Use the evaluate method in the MathTrig\SeriesSum class instead
@param mixed $x Input value
@param mixed $n Initial power
@param mixed $m Step
@param mixed[] $args An array of coefficients for the Data Series
@return array|float|string The result, or a string containing an error

SIGN.
Determines the sign of a number. Returns 1 if the number is positive, zero (0)
       if the number is 0, and -1 if the number is negative.
@Deprecated 1.18.0
@See MathTrig\Sign::evaluate()
     Use the evaluate method in the MathTrig\Sign class instead
@param array|float $number Number to round
@return array|int|string sign value, or a string containing an error

returnSign = returns 0/-1/+1.
@Deprecated 1.18.0
@See MathTrig\Helpers::returnSign()
     Use the returnSign method in the MathTrig\Helpers class instead

SQRTPI.
Returns the square root of (number * pi).
@Deprecated 1.18.0
@See MathTrig\Sqrt::sqrt()
     Use the pi method in the MathTrig\Sqrt class instead
@param array|float $number Number
@return array|float|string Square Root of Number * Pi, or a string containing an error

SUBTOTAL.
Returns a subtotal in a list or database.
@Deprecated 1.18.0
@See MathTrig\Subtotal::evaluate()
     Use the evaluate method in the MathTrig\Subtotal class instead
@param int $functionType
           A number 1 to 11 that specifies which function to
                   use in calculating subtotals within a range
                   list
           Numbers 101 to 111 shadow the functions of 1 to 11
                   but ignore any values in the range that are
                   in hidden rows or columns
@param mixed[] $args A mixed data series of values
@return float|string

SUM.
SUM computes the sum of all the values and cells referenced in the argument list.
@Deprecated 1.18.0
@See MathTrig\Sum::sumErroringStrings()
     Use the sumErroringStrings method in the MathTrig\Sum class instead
Excel Function:
       SUM(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

SUMIF.
Totals the values of cells that contain numbers within the list of arguments
Excel Function:
       SUMIF(range, criteria, [sum_range])
@Deprecated 1.17.0
@see Statistical\Conditional::SUMIF()
     Use the SUMIF() method in the Statistical\Conditional class instead
@param mixed $range Data values
@param string $criteria the criteria that defines which cells will be summed
@param mixed $sumRange
@return float|string

SUMIFS.
   Totals the values of cells that contain numbers within the list of arguments
   Excel Function:
       SUMIFS(sum_range, criteria_range1, criteria1, [criteria_range2, criteria2], ...)
@Deprecated 1.17.0
@see Statistical\Conditional::SUMIFS()
     Use the SUMIFS() method in the Statistical\Conditional class instead
@param mixed $args Data values
@return null|float|string

SUMPRODUCT.
Excel Function:
       SUMPRODUCT(value1[,value2[, ...]])
@Deprecated 1.18.0
@See MathTrig\Sum::product()
     Use the product method in the MathTrig\Sum class instead
@param mixed ...$args Data values
@return float|string The result, or a string containing an error

SUMSQ.
SUMSQ returns the sum of the squares of the arguments
@Deprecated 1.18.0
@See MathTrig\SumSquares::sumSquare()
     Use the sumSquare method in the MathTrig\SumSquares class instead
Excel Function:
       SUMSQ(value1[,value2[, ...]])
@param mixed ...$args Data values
@return float|string

SUMX2MY2.
@Deprecated 1.18.0
@See MathTrig\SumSquares::sumXSquaredMinusYSquared()
    Use the sumXSquaredMinusYSquared method in the MathTrig\SumSquares class instead
@param mixed[] $matrixData1 Matrix #1
@param mixed[] $matrixData2 Matrix #2
@return float|string

SUMX2PY2.
@Deprecated 1.18.0
@See MathTrig\SumSquares::sumXSquaredPlusYSquared()
    Use the sumXSquaredPlusYSquared method in the MathTrig\SumSquares class instead
@param mixed[] $matrixData1 Matrix #1
@param mixed[] $matrixData2 Matrix #2
@return float|string

SUMXMY2.
@Deprecated 1.18.0
@See MathTrig\SumSquares::sumXMinusYSquared()
     Use the sumXMinusYSquared method in the MathTrig\SumSquares class instead
@param mixed[] $matrixData1 Matrix #1
@param mixed[] $matrixData2 Matrix #2
@return float|string

TRUNC.
Truncates value to the number of fractional digits by number_digits.
@Deprecated 1.17.0
@see MathTrig\Trunc::evaluate()
     Use the evaluate() method in the MathTrig\Trunc class instead
@param float $value
@param int $digits
@return array|float|string Truncated value, or a string containing an error

SEC.
Returns the secant of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Secant::sec()
     Use the sec method in the MathTrig\Trig\Secant class instead
@param array|float $angle Number
@return array|float|string The secant of the angle

SECH.
Returns the hyperbolic secant of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Secant::sech()
     Use the sech method in the MathTrig\Trig\Secant class instead
@param array|float $angle Number
@return array|float|string The hyperbolic secant of the angle

CSC.
Returns the cosecant of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosecant::csc()
     Use the csc method in the MathTrig\Trig\Cosecant class instead
@param array|float $angle Number
@return array|float|string The cosecant of the angle

CSCH.
Returns the hyperbolic cosecant of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosecant::csch()
     Use the csch method in the MathTrig\Trig\Cosecant class instead
@param array|float $angle Number
@return array|float|string The hyperbolic cosecant of the angle

COT.
Returns the cotangent of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Cotangent::cot()
     Use the cot method in the MathTrig\Trig\Cotangent class instead
@param array|float $angle Number
@return array|float|string The cotangent of the angle

COTH.
Returns the hyperbolic cotangent of an angle.
@Deprecated 1.18.0
@See MathTrig\Trig\Cotangent::coth()
     Use the coth method in the MathTrig\Trig\Cotangent class instead
@param array|float $angle Number
@return array|float|string The hyperbolic cotangent of the angle

ACOT.
Returns the arccotangent of a number.
@Deprecated 1.18.0
@See MathTrig\Trig\Cotangent::acot()
     Use the acot method in the MathTrig\Trig\Cotangent class instead
@param array|float $number Number
@return array|float|string The arccotangent of the number

Return NAN or value depending on argument.
@Deprecated 1.18.0
@See MathTrig\Helpers::numberOrNan()
     Use the numberOrNan method in the MathTrig\Helpers class instead
@param float $result Number
@return float|string

ACOTH.
Returns the hyperbolic arccotangent of a number.
@Deprecated 1.18.0
@See MathTrig\Trig\Cotangent::acoth()
     Use the acoth method in the MathTrig\Trig\Cotangent class instead
@param array|float $number Number
@return array|float|string The hyperbolic arccotangent of the number

ROUND.
Returns the result of builtin function round after validating args.
@Deprecated 1.17.0
@See MathTrig\Round::round()
     Use the round() method in the MathTrig\Round class instead
@param array|mixed $number Should be numeric
@param array|mixed $precision Should be int
@return array|float|string Rounded number

ABS.
Returns the result of builtin function abs after validating args.
@Deprecated 1.18.0
@See MathTrig\Absolute::evaluate()
     Use the evaluate method in the MathTrig\Absolute class instead
@param array|mixed $number Should be numeric
@return array|float|int|string Rounded number

ACOS.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosine::acos()
     Use the acos method in the MathTrig\Trig\Cosine class instead
Returns the result of builtin function acos after validating args.
@param array|float $number Should be numeric
@return array|float|string Rounded number

ACOSH.
Returns the result of builtin function acosh after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosine::acosh()
     Use the acosh method in the MathTrig\Trig\Cosine class instead
@param array|float $number Should be numeric
@return array|float|string Rounded number

ASIN.
Returns the result of builtin function asin after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Sine::asin()
     Use the asin method in the MathTrig\Trig\Sine class instead
@param array|float $number Should be numeric
@return array|float|string Rounded number

ASINH.
Returns the result of builtin function asinh after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Sine::asinh()
     Use the asinh method in the MathTrig\Trig\Sine class instead
@param array|float $number Should be numeric
@return array|float|string Rounded number

ATAN.
Returns the result of builtin function atan after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Tangent::atan()
     Use the atan method in the MathTrig\Trig\Tangent class instead
@param array|float $number Should be numeric
@return array|float|string Rounded number

ATANH.
Returns the result of builtin function atanh after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Tangent::atanh()
     Use the atanh method in the MathTrig\Trig\Tangent class instead
@param array|float $number Should be numeric
@return array|float|string Rounded number

COS.
Returns the result of builtin function cos after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosine::cos()
     Use the cos method in the MathTrig\Trig\Cosine class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

COSH.
Returns the result of builtin function cos after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Cosine::cosh()
     Use the cosh method in the MathTrig\Trig\Cosine class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

DEGREES.
Returns the result of builtin function rad2deg after validating args.
@Deprecated 1.18.0
@See MathTrig\Angle::toDegrees()
     Use the toDegrees method in the MathTrig\Angle class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

EXP.
Returns the result of builtin function exp after validating args.
@Deprecated 1.18.0
@See MathTrig\Exp::evaluate()
     Use the evaluate method in the MathTrig\Exp class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

LN.
Returns the result of builtin function log after validating args.
@Deprecated 1.18.0
@See MathTrig\Logarithms::natural()
     Use the natural method in the MathTrig\Logarithms class instead
@param mixed $number Should be numeric
@return array|float|string Rounded number

LOG10.
Returns the result of builtin function log after validating args.
@Deprecated 1.18.0
@See MathTrig\Logarithms::base10()
     Use the natural method in the MathTrig\Logarithms class instead
@param mixed $number Should be numeric
@return array|float|string Rounded number

RADIANS.
Returns the result of builtin function deg2rad after validating args.
@Deprecated 1.18.0
@See MathTrig\Angle::toRadians()
     Use the toRadians method in the MathTrig\Angle class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

SIN.
Returns the result of builtin function sin after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Sine::evaluate()
     Use the sin method in the MathTrig\Trig\Sine class instead
@param array|mixed $number Should be numeric
@return array|float|string sine

SINH.
Returns the result of builtin function sinh after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Sine::sinh()
     Use the sinh method in the MathTrig\Trig\Sine class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

SQRT.
Returns the result of builtin function sqrt after validating args.
@Deprecated 1.18.0
@See MathTrig\Sqrt::sqrt()
     Use the sqrt method in the MathTrig\Sqrt class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

TAN.
Returns the result of builtin function tan after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Tangent::tan()
     Use the tan method in the MathTrig\Trig\Tangent class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

TANH.
Returns the result of builtin function sinh after validating args.
@Deprecated 1.18.0
@See MathTrig\Trig\Tangent::tanh()
     Use the tanh method in the MathTrig\Trig\Tangent class instead
@param array|mixed $number Should be numeric
@return array|float|string Rounded number

Many functions accept null/false/true argument treated as 0/0/1.
@Deprecated 1.18.0
@See MathTrig\Helpers::validateNumericNullBool()
     Use the validateNumericNullBool method in the MathTrig\Helpers class instead
@param mixed $number

## References

**Database Tables (inferred)**
- `the`
- `zero`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\MathTrig.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\MathTrig`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`

**Functions/Methods**:
- `ARABIC($roman)`
- `ATAN2($xCoordinate = null, $yCoordinate = null)`
- `BASE($number, $radix, $minLength = null)`
- `CEILING($number, $significance = null)`
- `COMBIN($numObjs, $numInSet)`
- `EVEN($number)`
- `getEven(float $number)`
- `FACT($factVal)`
- `FACTDOUBLE($factVal)`
- `FLOOR($number, $significance = null)`
- `FLOORMATH($number, $significance = null, $mode = 0)`
- `FLOORPRECISE($number, $significance = 1)`
- `INT($number)`
- `GCD(...$args)`
- `LCM(...$args)`
- `logBase($number, $base = 10)`
- `MDETERM($matrixValues)`
- `MINVERSE($matrixValues)`
- `MMULT($matrixData1, $matrixData2)`
- `MOD($a = 1, $b = 1)`
- `MROUND($number, $multiple)`
- `MULTINOMIAL(...$args)`
- `ODD($number)`
- `POWER($x = 0, $y = 2)`
- `PRODUCT(...$args)`
- `QUOTIENT($numerator, $denominator)`
- `RAND($min = 0, $max = 0)`
- `ROMAN($aValue, $style = 0)`
- `ROUNDUP($number, $digits)`
- `ROUNDDOWN($number, $digits)`
- `SERIESSUM($x, $n, $m, ...$args)`
- `SIGN($number)`
- `returnSign(float $number)`
- `SQRTPI($number)`
- `SUBTOTAL($functionType, ...$args)`
- `SUM(...$args)`
- `SUMIF($range, $criteria, $sumRange = [])`
- `SUMIFS(...$args)`
- `SUMPRODUCT(...$args)`
- `SUMSQ(...$args)`
- `SUMX2MY2($matrixData1, $matrixData2)`
- `SUMX2PY2($matrixData1, $matrixData2)`
- `SUMXMY2($matrixData1, $matrixData2)`
- `TRUNC($value = 0, $digits = 0)`
- `SEC($angle)`
- `SECH($angle)`
- `CSC($angle)`
- `CSCH($angle)`
- `COT($angle)`
- `COTH($angle)`
- `ACOT($number)`
- `numberOrNan($result)`
- `ACOTH($number)`
- `builtinROUND($number, $precision)`
- `builtinABS($number)`
- `builtinACOS($number)`
- `builtinACOSH($number)`
- `builtinASIN($number)`
- `builtinASINH($number)`
- `builtinATAN($number)`
- `builtinATANH($number)`
- `builtinCOS($number)`
- `builtinCOSH($number)`
- `builtinDEGREES($number)`
- `builtinEXP($number)`
- `builtinLN($number)`
- `builtinLOG10($number)`
- `builtinRADIANS($number)`
- `builtinSIN($number)`
- `builtinSINH($number)`
- `builtinSQRT($number)`
- `builtinTAN($number)`
- `builtinTANH($number)`
- `nullFalseTrueToNumber(&$number)`

