# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Math\BigInteger.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Math\BigInteger.php`
- Type: PHP
- Size: 125332 bytes

## Summary (from docblocks)

Pure-PHP arbitrary precision integer arithmetic library.
Supports base-2, base-10, base-16, and base-256 numbers.  Uses the GMP or BCMath extensions, if available,
and an internal implementation, otherwise.
PHP version 5
{@internal (all DocBlock comments regarding implementation - such as the one that follows - refer to the
{@link self::MODE_INTERNAL self::MODE_INTERNAL} mode)
BigInteger uses base-2**26 to perform operations such as multiplication and division and
base-2**52 (ie. two base 2**26 digits) to perform addition and subtraction.  Because the largest possible
value when multiplying two base-2**26 numbers together is a base-2**52 number, double precision floating
point numbers - numbers that should be supported on most hardware and whose significand is 53 bits - are
used.  As a consequence, bitwise operators such as >> and << cannot be used, nor can the modulo operator %,
which only supports integers.  Although this fact will slow this library down, the fact that such a high
base is being used should more than compensate.
Numbers are stored in {@link http://en.wikipedia.org/wiki/Endianness little endian} format.  ie.
(new \phpseclib\Math\BigInteger(pow(2, 26)))->value = array(0, 1)
Useful resources are as follows:
 - {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf Handbook of Applied Cryptography (HAC)}
 - {@link http://math.libtomcrypt.com/files/tommath.pdf Multi-Precision Math (MPM)}
 - Java's BigInteger classes.  See /j2se/src/share/classes/java/math in jdk-1_5_0-src-jrl.zip
Here's an example of how to use this library:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger(2);
   $b = new \phpseclib\Math\BigInteger(3);
   $c = $a->add($b);
   echo $c->toString(); // outputs 5
?>
</code>
@category  Math
@package   BigInteger
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2006 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://pear.php.net/package/Math_BigInteger

Pure-PHP arbitrary precision integer arithmetic library. Supports base-2, base-10, base-16, and base-256
numbers.
@package BigInteger
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
Reduction constants
@access private
@see BigInteger::_reduce()

@see BigInteger::_montgomery()
@see BigInteger::_prepMontgomery()

@see BigInteger::_barrett()

@see BigInteger::_mod2()

@see BigInteger::_remainder()

@see BigInteger::__clone()

#@-

#@+
Array constants
Rather than create a thousands and thousands of new BigInteger objects in repeated function calls to add() and
multiply() or whatever, we'll just work directly on arrays, taking them in as parameters and returning them.
@access private

$result[self::VALUE] contains the value.

$result[self::SIGN] contains the sign.

#@-

#@+
@access private
@see BigInteger::_montgomery()
@see BigInteger::_barrett()

Cache constants
$cache[self::VARIABLE] tells us whether or not the cached data is still valid.

$cache[self::DATA] contains the cached data.

#@-

#@+
Mode constants.
@access private
@see BigInteger::__construct()

To use the pure-PHP implementation

To use the BCMath library
(if enabled; otherwise, the internal implementation will be used)

To use the GMP library
(if present; otherwise, either the BCMath or the internal implementation will be used)

#@-

Karatsuba Cutoff
At what point do we switch between Karatsuba multiplication and schoolbook long multiplication?
@access private

#@+
Static properties used by the pure-PHP implementation.
@see __construct()

$max10 in greatest $max10Len satisfying
$max10 = 10**$max10Len <= 2**$base.

$max10Len in greatest $max10Len satisfying
$max10 = 10**$max10Len <= 2**$base.

#@-

Holds the BigInteger's value.
@var array
@access private

Holds the BigInteger's magnitude.
@var bool
@access private

Precision
@see self::setPrecision()
@access private

Precision Bitmask
@see self::setPrecision()
@access private

Mode independent value used for serialization.
If the bcmath or gmp extensions are installed $this->value will be a non-serializable resource, hence the need for
a variable that'll be serializable regardless of whether or not extensions are being used.  Unlike $this->value,
however, $this->hex is only calculated when $this->__sleep() is called.
@see self::__sleep()
@see self::__wakeup()
@var string
@access private

Converts base-2, base-10, base-16, and binary strings (base-256) to BigIntegers.
If the second parameter - $base - is negative, then it will be assumed that the number's are encoded using
two's compliment.  The sole exception to this is -10, which is treated the same as 10 is.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('0x32', 16); // 50 in base-16
   echo $a->toString(); // outputs 50
?>
</code>
@param $x base-10 number or base-$base number if $base set.
@param int $base
@return \phpseclib\Math\BigInteger
@access public

Converts a BigInteger to a byte string (eg. base-256).
Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
saved as two's compliment.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('65');
   echo $a->toBytes(); // outputs chr(65)
?>
</code>
@param bool $twos_compliment
@return string
@access public
@internal Converts a base-2**26 number to base-2**8

Converts a BigInteger to a hex string (eg. base-16)).
Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
saved as two's compliment.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('65');
   echo $a->toHex(); // outputs '41'
?>
</code>
@param bool $twos_compliment
@return string
@access public
@internal Converts a base-2**26 number to base-2**8

Converts a BigInteger to a bit string (eg. base-2).
Negative numbers are saved as positive numbers, unless $twos_compliment is set to true, at which point, they're
saved as two's compliment.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('65');
   echo $a->toBits(); // outputs '1000001'
?>
</code>
@param bool $twos_compliment
@return string
@access public
@internal Converts a base-2**26 number to base-2**2

Converts a BigInteger to a base-10 number.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('50');
   echo $a->toString(); // outputs 50
?>
</code>
@return string
@access public
@internal Converts a base-2**26 number to base-10**7 (which is pretty much base-10)

Copy an object
PHP5 passes objects by reference while PHP4 passes by value.  As such, we need a function to guarantee
that all objects are passed by value, when appropriate.  More information can be found here:
{@link http://php.net/language.oop5.basic#51624}
@access public
@see self::__clone()
@return \phpseclib\Math\BigInteger

__toString() magic method
Will be called, automatically, if you're supporting just PHP5.  If you're supporting PHP4, you'll need to call
toString().
@access public
@internal Implemented per a suggestion by Techie-Michael - thanks!

__clone() magic method
Although you can call BigInteger::__toString() directly in PHP5, you cannot call BigInteger::__clone() directly
in PHP5.  You can in PHP4 since it's not a magic method, but in PHP5, you have to call it by using the PHP5
only syntax of $y = clone $x.  As such, if you're trying to write an application that works on both PHP4 and
PHP5, call BigInteger::copy(), instead.
@access public
@see self::copy()
@return \phpseclib\Math\BigInteger

__sleep() magic method
Will be called, automatically, when serialize() is called on a BigInteger object.
@see self::__wakeup()
@access public

__wakeup() magic method
Will be called, automatically, when unserialize() is called on a BigInteger object.
@see self::__sleep()
@access public

__debugInfo() magic method
Will be called, automatically, when print_r() or var_dump() are called
@access public

Adds two BigIntegers.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('10');
   $b = new \phpseclib\Math\BigInteger('20');
   $c = $a->add($b);
   echo $c->toString(); // outputs 30
?>
</code>
@param \phpseclib\Math\BigInteger $y
@return \phpseclib\Math\BigInteger
@access public
@internal Performs base-2**52 addition

Performs addition.
@param array $x_value
@param bool $x_negative
@param array $y_value
@param bool $y_negative
@return array
@access private

Subtracts two BigIntegers.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('10');
   $b = new \phpseclib\Math\BigInteger('20');
   $c = $a->subtract($b);
   echo $c->toString(); // outputs -10
?>
</code>
@param \phpseclib\Math\BigInteger $y
@return \phpseclib\Math\BigInteger
@access public
@internal Performs base-2**52 subtraction

Performs subtraction.
@param array $x_value
@param bool $x_negative
@param array $y_value
@param bool $y_negative
@return array
@access private

Multiplies two BigIntegers
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('10');
   $b = new \phpseclib\Math\BigInteger('20');
   $c = $a->multiply($b);
   echo $c->toString(); // outputs 200
?>
</code>
@param \phpseclib\Math\BigInteger $x
@return \phpseclib\Math\BigInteger
@access public

Performs multiplication.
@param array $x_value
@param bool $x_negative
@param array $y_value
@param bool $y_negative
@return array
@access private

Performs long multiplication on two BigIntegers
Modeled after 'multiply' in MutableBigInteger.java.
@param array $x_value
@param array $y_value
@return array
@access private

Performs Karatsuba multiplication on two BigIntegers
See {@link http://en.wikipedia.org/wiki/Karatsuba_algorithm Karatsuba algorithm} and
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=120 MPM 5.2.3}.
@param array $x_value
@param array $y_value
@return array
@access private

Performs squaring
@param array $x
@return array
@access private

Performs traditional squaring on two BigIntegers
Squaring can be done faster than multiplying a number by itself can be.  See
{@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=7 HAC 14.2.4} /
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=141 MPM 5.3} for more information.
@param array $value
@return array
@access private

Performs Karatsuba "squaring" on two BigIntegers
See {@link http://en.wikipedia.org/wiki/Karatsuba_algorithm Karatsuba algorithm} and
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=151 MPM 5.3.4}.
@param array $value
@return array
@access private

Divides two BigIntegers.
Returns an array whose first element contains the quotient and whose second element contains the
"common residue".  If the remainder would be positive, the "common residue" and the remainder are the
same.  If the remainder would be negative, the "common residue" is equal to the sum of the remainder
and the divisor (basically, the "common residue" is the first positive modulo).
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('10');
   $b = new \phpseclib\Math\BigInteger('20');
   list($quotient, $remainder) = $a->divide($b);
   echo $quotient->toString(); // outputs 0
   echo "\r\n";
   echo $remainder->toString(); // outputs 10
?>
</code>
@param \phpseclib\Math\BigInteger $y
@return array
@access public
@internal This function is based off of {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=9 HAC 14.20}.

Divides a BigInteger by a regular integer
abc / x = a00 / x + b0 / x + c / x
@param array $dividend
@param array $divisor
@return array
@access private

Performs modular exponentiation.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger('10');
   $b = new \phpseclib\Math\BigInteger('20');
   $c = new \phpseclib\Math\BigInteger('30');
   $c = $a->modPow($b, $c);
   echo $c->toString(); // outputs 10
?>
</code>
@param \phpseclib\Math\BigInteger $e
@param \phpseclib\Math\BigInteger $n
@return \phpseclib\Math\BigInteger
@access public
@internal The most naive approach to modular exponentiation has very unreasonable requirements, and
   and although the approach involving repeated squaring does vastly better, it, too, is impractical
   for our purposes.  The reason being that division - by far the most complicated and time-consuming
   of the basic operations (eg. +,-,*,/) - occurs multiple times within it.
   Modular reductions resolve this issue.  Although an individual modular reduction takes more time
   then an individual division, when performed in succession (with the same modulo), they're a lot faster.
   The two most commonly used modular reductions are Barrett and Montgomery reduction.  Montgomery reduction,
   although faster, only works when the gcd of the modulo and of the base being used is 1.  In RSA, when the
   base is a power of two, the modulo - a product of two primes - is always going to have a gcd of 1 (because
   the product of two odd numbers is odd), but what about when RSA isn't used?
   In contrast, Barrett reduction has no such constraint.  As such, some bigint implementations perform a
   Barrett reduction after every operation in the modpow function.  Others perform Barrett reductions when the
   modulo is even and Montgomery reductions when the modulo is odd.  BigInteger.java's modPow method, however,
   uses a trick involving the Chinese Remainder Theorem to factor the even modulo into two numbers - one odd and
   the other, a power of two - and recombine them, later.  This is the method that this modPow function uses.
   {@link http://islab.oregonstate.edu/papers/j34monex.pdf Montgomery Reduction with Even Modulus} elaborates.

Performs modular exponentiation.
Alias for modPow().
@param \phpseclib\Math\BigInteger $e
@param \phpseclib\Math\BigInteger $n
@return \phpseclib\Math\BigInteger
@access public

Sliding Window k-ary Modular Exponentiation
Based on {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=27 HAC 14.85} /
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=210 MPM 7.7}.  In a departure from those algorithims,
however, this function performs a modular reduction after every multiplication and squaring operation.
As such, this function has the same preconditions that the reductions being used do.
@param \phpseclib\Math\BigInteger $e
@param \phpseclib\Math\BigInteger $n
@param int $mode
@return \phpseclib\Math\BigInteger
@access private

Modular reduction
For most $modes this will return the remainder.
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@param int $mode
@return array

Modular reduction preperation
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@param int $mode
@return array

Modular multiply
@see self::_slidingWindow()
@access private
@param array $x
@param array $y
@param array $n
@param int $mode
@return array

Modular square
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@param int $mode
@return array

Modulos for Powers of Two
Calculates $x%$n, where $n = 2**$e, for some $e.  Since this is basically the same as doing $x & ($n-1),
we'll just use this function as a wrapper for doing that.
@see self::_slidingWindow()
@access private
@param \phpseclib\Math\BigInteger
@return \phpseclib\Math\BigInteger

Barrett Modular Reduction
See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=14 HAC 14.3.3} /
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=165 MPM 6.2.5} for more information.  Modified slightly,
so as not to require negative numbers (initially, this script didn't support negative numbers).
Employs "folding", as described at
{@link http://www.cosic.esat.kuleuven.be/publications/thesis-149.pdf#page=66 thesis-149.pdf#page=66}.  To quote from
it, "the idea [behind folding] is to find a value x' such that x (mod m) = x' (mod m), with x' being smaller than x."
Unfortunately, the "Barrett Reduction with Folding" algorithm described in thesis-149.pdf is not, as written, all that
usable on account of (1) its not using reasonable radix points as discussed in
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=162 MPM 6.2.2} and (2) the fact that, even with reasonable
radix points, it only works when there are an even number of digits in the denominator.  The reason for (2) is that
(x >> 1) + (x >> 1) != x / 2 + x / 2.  If x is even, they're the same, but if x is odd, they're not.  See the in-line
comments for details.
@see self::_slidingWindow()
@access private
@param array $n
@param array $m
@return array

(Regular) Barrett Modular Reduction
For numbers with more than four digits BigInteger::_barrett() is faster.  The difference between that and this
is that this function does not fold the denominator into a smaller form.
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@return array

Performs long multiplication up to $stop digits
If you're going to be doing array_slice($product->value, 0, $stop), some cycles can be saved.
@see self::_regularBarrett()
@param array $x_value
@param bool $x_negative
@param array $y_value
@param bool $y_negative
@param int $stop
@return array
@access private

Montgomery Modular Reduction
($x->_prepMontgomery($n))->_montgomery($n) yields $x % $n.
{@link http://math.libtomcrypt.com/files/tommath.pdf#page=170 MPM 6.3} provides insights on how this can be
improved upon (basically, by using the comba method).  gcd($n, 2) must be equal to one for this function
to work correctly.
@see self::_prepMontgomery()
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@return array

Montgomery Multiply
Interleaves the montgomery reduction and long multiplication algorithms together as described in
{@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=13 HAC 14.36}
@see self::_prepMontgomery()
@see self::_montgomery()
@access private
@param array $x
@param array $y
@param array $m
@return array

Prepare a number for use in Montgomery Modular Reductions
@see self::_montgomery()
@see self::_slidingWindow()
@access private
@param array $x
@param array $n
@return array

Modular Inverse of a number mod 2**26 (eg. 67108864)
Based off of the bnpInvDigit function implemented and justified in the following URL:
{@link http://www-cs-students.stanford.edu/~tjw/jsbn/jsbn.js}
The following URL provides more info:
{@link http://groups.google.com/group/sci.crypt/msg/7a137205c1be7d85}
As for why we do all the bitmasking...  strange things can happen when converting from floats to ints. For
instance, on some computers, var_dump((int) -4294967297) yields int(-1) and on others, it yields
int(-2147483648).  To avoid problems stemming from this, we use bitmasks to guarantee that ints aren't
auto-converted to floats.  The outermost bitmask is present because without it, there's no guarantee that
the "residue" returned would be the so-called "common residue".  We use fmod, in the last step, because the
maximum possible $x is 26 bits and the maximum $result is 16 bits.  Thus, we have to be able to handle up to
40 bits, which only 64-bit floating points will support.
Thanks to Pedro Gimeno Fortea for input!
@see self::_montgomery()
@access private
@param array $x
@return int

Calculates modular inverses.
Say you have (30 mod 17 * x mod 17) mod 17 == 1.  x can be found using modular inverses.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger(30);
   $b = new \phpseclib\Math\BigInteger(17);
   $c = $a->modInverse($b);
   echo $c->toString(); // outputs 4
   echo "\r\n";
   $d = $a->multiply($c);
   list(, $d) = $d->divide($b);
   echo $d; // outputs 1 (as per the definition of modular inverse)
?>
</code>
@param \phpseclib\Math\BigInteger $n
@return \phpseclib\Math\BigInteger|false
@access public
@internal See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=21 HAC 14.64} for more information.

Calculates the greatest common divisor and Bezout's identity.
Say you have 693 and 609.  The GCD is 21.  Bezout's identity states that there exist integers x and y such that
693*x + 609*y == 21.  In point of fact, there are actually an infinite number of x and y combinations and which
combination is returned is dependent upon which mode is in use.  See
{@link http://en.wikipedia.org/wiki/B%C3%A9zout%27s_identity Bezout's identity - Wikipedia} for more information.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger(693);
   $b = new \phpseclib\Math\BigInteger(609);
   extract($a->extendedGCD($b));
   echo $gcd->toString() . "\r\n"; // outputs 21
   echo $a->toString() * $x->toString() + $b->toString() * $y->toString(); // outputs 21
?>
</code>
@param \phpseclib\Math\BigInteger $n
@return \phpseclib\Math\BigInteger
@access public
@internal Calculates the GCD using the binary xGCD algorithim described in
   {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap14.pdf#page=19 HAC 14.61}.  As the text above 14.61 notes,
   the more traditional algorithim requires "relatively costly multiple-precision divisions".

Calculates the greatest common divisor
Say you have 693 and 609.  The GCD is 21.
Here's an example:
<code>
<?php
   $a = new \phpseclib\Math\BigInteger(693);
   $b = new \phpseclib\Math\BigInteger(609);
   $gcd = a->extendedGCD($b);
   echo $gcd->toString() . "\r\n"; // outputs 21
?>
</code>
@param \phpseclib\Math\BigInteger $n
@return \phpseclib\Math\BigInteger
@access public

Absolute value.
@return \phpseclib\Math\BigInteger
@access public

Compares two numbers.
Although one might think !$x->compare($y) means $x != $y, it, in fact, means the opposite.  The reason for this is
demonstrated thusly:
$x  > $y: $x->compare($y)  > 0
$x  < $y: $x->compare($y)  < 0
$x == $y: $x->compare($y) == 0
Note how the same comparison operator is used.  If you want to test for equality, use $x->equals($y).
@param \phpseclib\Math\BigInteger $y
@return int < 0 if $this is less than $y; > 0 if $this is greater than $y, and 0 if they are equal.
@access public
@see self::equals()
@internal Could return $this->subtract($x), but that's not as fast as what we do do.

Compares two numbers.
@param array $x_value
@param bool $x_negative
@param array $y_value
@param bool $y_negative
@return int
@see self::compare()
@access private

Tests the equality of two numbers.
If you need to see if one number is greater than or less than another number, use BigInteger::compare()
@param \phpseclib\Math\BigInteger $x
@return bool
@access public
@see self::compare()

Set Precision
Some bitwise operations give different results depending on the precision being used.  Examples include left
shift, not, and rotates.
@param int $bits
@access public

Logical And
@param \phpseclib\Math\BigInteger $x
@access public
@internal Implemented per a request by Lluis Pamies i Juarez <lluis _a_ pamies.cat>
@return \phpseclib\Math\BigInteger

Logical Or
@param \phpseclib\Math\BigInteger $x
@access public
@internal Implemented per a request by Lluis Pamies i Juarez <lluis _a_ pamies.cat>
@return \phpseclib\Math\BigInteger

Logical Exclusive-Or
@param \phpseclib\Math\BigInteger $x
@access public
@internal Implemented per a request by Lluis Pamies i Juarez <lluis _a_ pamies.cat>
@return \phpseclib\Math\BigInteger

Logical Not
@access public
@internal Implemented per a request by Lluis Pamies i Juarez <lluis _a_ pamies.cat>
@return \phpseclib\Math\BigInteger

Logical Right Shift
Shifts BigInteger's by $shift bits, effectively dividing by 2**$shift.
@param int $shift
@return \phpseclib\Math\BigInteger
@access public
@internal The only version that yields any speed increases is the internal version.

Logical Left Shift
Shifts BigInteger's by $shift bits, effectively multiplying by 2**$shift.
@param int $shift
@return \phpseclib\Math\BigInteger
@access public
@internal The only version that yields any speed increases is the internal version.

Logical Left Rotate
Instead of the top x bits being dropped they're appended to the shifted bit string.
@param int $shift
@return \phpseclib\Math\BigInteger
@access public

Logical Right Rotate
Instead of the bottom x bits being dropped they're prepended to the shifted bit string.
@param int $shift
@return \phpseclib\Math\BigInteger
@access public

Generates a random BigInteger
Byte length is equal to $length. Uses \phpseclib\Crypt\Random if it's loaded and mt_rand if it's not.
@param int $length
@return \phpseclib\Math\BigInteger
@access private

Generate a random number
Returns a random number between $min and $max where $min and $max
can be defined using one of the two methods:
$min->random($max)
$max->random($min)
@param \phpseclib\Math\BigInteger $arg1
@param \phpseclib\Math\BigInteger $arg2
@return \phpseclib\Math\BigInteger
@access public
@internal The API for creating random numbers used to be $a->random($min, $max), where $a was a BigInteger object.
          That method is still supported for BC purposes.

Generate a random prime number.
If there's not a prime within the given range, false will be returned.
If more than $timeout seconds have elapsed, give up and return false.
@param \phpseclib\Math\BigInteger $arg1
@param \phpseclib\Math\BigInteger $arg2
@param int $timeout
@return Math_BigInteger|false
@access public
@internal See {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap4.pdf#page=15 HAC 4.44}.

Make the current number odd
If the current number is odd it'll be unchanged.  If it's even, one will be added to it.
@see self::randomPrime()
@access private

Checks a numer to see if it's prime
Assuming the $t parameter is not set, this function has an error rate of 2**-80.  The main motivation for the
$t parameter is distributability.  BigInteger::randomPrime() can be distributed across multiple pageloads
on a website instead of just one.
@param \phpseclib\Math\BigInteger $t
@return bool
@access public
@internal Uses the
    {@link http://en.wikipedia.org/wiki/Miller%E2%80%93Rabin_primality_test Miller-Rabin primality test}.  See
    {@link http://www.cacr.math.uwaterloo.ca/hac/about/chap4.pdf#page=8 HAC 4.24}.

Logical Left Shift
Shifts BigInteger's by $shift bits.
@param int $shift
@access private

Logical Right Shift
Shifts BigInteger's by $shift bits.
@param int $shift
@access private

Normalize
Removes leading zeros and truncates (if necessary) to maintain the appropriate precision
@param \phpseclib\Math\BigInteger
@return \phpseclib\Math\BigInteger
@see self::_trim()
@access private

Trim
Removes leading zeros
@param array $value
@return \phpseclib\Math\BigInteger
@access private

Array Repeat
@param $input Array
@param $multiplier mixed
@return array
@access private

Logical Left Shift
Shifts binary strings $shift bits, essentially multiplying by 2**$shift.
@param $x String
@param $shift Integer
@return string
@access private

Logical Right Shift
Shifts binary strings $shift bits, essentially dividing by 2**$shift and returning the remainder.
@param $x String
@param $shift Integer
@return string
@access private

Converts 32-bit integers to bytes.
@param int $x
@return string
@access private

Converts bytes to 32-bit integers
@param string $x
@return int
@access private

DER-encode an integer
The ability to DER-encode integers is needed to create RSA public keys for use with OpenSSL
@see self::modPow()
@access private
@param int $length
@return string

Single digit division
Even if int64 is being used the division operator will return a float64 value
if the dividend is not evenly divisible by the divisor. Since a float64 doesn't
have the precision of int64 this is a problem so, when int64 is being used,
we'll guarantee that the dividend is divisible by first subtracting the remainder.
@access private
@param int $x
@param int $y
@return int

## References

**Database Tables (inferred)**
- `using`
- `those`
- `BigInteger`
- `MPM`
- `a`
- `another`
- `floats`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Math\BigInteger.php`

**Classes**:
- `phpseclib\Math\BigInteger`

**Functions/Methods**:
- `__construct($x = 0, $base = 10)`
- `toBytes($twos_compliment = false)`
- `toHex($twos_compliment = false)`
- `toBits($twos_compliment = false)`
- `toString()`
- `copy()`
- `__toString()`
- `__clone()`
- `__sleep()`
- `__wakeup()`
- `__debugInfo()`
- `add($y)`
- `_add($x_value, $x_negative, $y_value, $y_negative)`
- `subtract($y)`
- `_subtract($x_value, $x_negative, $y_value, $y_negative)`
- `multiply($x)`
- `_multiply($x_value, $x_negative, $y_value, $y_negative)`
- `_regularMultiply($x_value, $y_value)`
- `_karatsuba($x_value, $y_value)`
- `_square($x = false)`
- `_baseSquare($value)`
- `_karatsubaSquare($value)`
- `divide($y)`
- `_divide_digit($dividend, $divisor)`
- `modPow($e, $n)`
- `powMod($e, $n)`
- `_slidingWindow($e, $n, $mode)`
- `_reduce($x, $n, $mode)`
- `_prepareReduce($x, $n, $mode)`
- `_multiplyReduce($x, $y, $n, $mode)`
- `_squareReduce($x, $n, $mode)`
- `_mod2($n)`
- `_barrett($n, $m)`
- `_regularBarrett($x, $n)`
- `_multiplyLower($x_value, $x_negative, $y_value, $y_negative, $stop)`
- `_montgomery($x, $n)`
- `_montgomeryMultiply($x, $y, $m)`
- `_prepMontgomery($x, $n)`
- `_modInverse67108864($x)`
- `modInverse($n)`
- `extendedGCD($n)`
- `gcd($n)`
- `abs()`
- `compare($y)`
- `_compare($x_value, $x_negative, $y_value, $y_negative)`
- `equals($x)`
- `setPrecision($bits)`
- `bitwise_and($x)`
- `bitwise_or($x)`
- `bitwise_xor($x)`
- `bitwise_not()`
- `bitwise_rightShift($shift)`
- `bitwise_leftShift($shift)`
- `bitwise_leftRotate($shift)`
- `bitwise_rightRotate($shift)`
- `_random_number_helper($size)`
- `random($arg1, $arg2 = false)`
- `randomPrime($arg1, $arg2 = false, $timeout = false)`
- `_make_odd()`
- `isPrime($t = false)`
- `_lshift($shift)`
- `_rshift($shift)`
- `_normalize($result)`
- `_trim($value)`
- `_array_repeat($input, $multiplier)`
- `_base256_lshift(&$x, $shift)`
- `_base256_rshift(&$x, $shift)`
- `_int2bytes($x)`
- `_bytes2int($x)`
- `_encodeASN1Length($length)`
- `_safe_divide($x, $y)`

