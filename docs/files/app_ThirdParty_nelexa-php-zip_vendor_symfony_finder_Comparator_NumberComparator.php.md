# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Comparator\NumberComparator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Comparator\NumberComparator.php`
- Type: PHP
- Size: 2570 bytes

## Summary (from docblocks)

NumberComparator compiles a simple comparison to an anonymous
subroutine, which you can call with a value to be tested again.
Now this would be very pointless, if NumberCompare didn't understand
magnitudes.
The target value may use magnitudes of kilobytes (k, ki),
megabytes (m, mi), or gigabytes (g, gi).  Those suffixed
with an i use the appropriate 2**n version in accordance with the
IEC standard: http://physics.nist.gov/cuu/Units/binary.html
Based on the Perl Number::Compare module.
@author    Fabien Potencier <fabien@symfony.com> PHP port
@author    Richard Clamp <richardc@unixbeard.net> Perl version
@copyright 2004-2005 Fabien Potencier <fabien@symfony.com>
@copyright 2002 Richard Clamp <richardc@unixbeard.net>
@see http://physics.nist.gov/cuu/Units/binary.html

@param string|int $test A comparison string or an integer
@throws \InvalidArgumentException If the test is not understood

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Comparator\NumberComparator.php`

**Classes**:
- `Symfony\Component\Finder\Comparator\NumberComparator extends Comparator`

**Functions/Methods**:
- `__construct(?string $test)`

