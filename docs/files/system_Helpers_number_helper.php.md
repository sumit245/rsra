# system\Helpers\number_helper.php

- Path: `system\Helpers\number_helper.php`
- Type: PHP
- Size: 7062 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Formats a numbers as bytes, based on size, and adds the appropriate suffix
@param mixed  $num    Will be cast as int
@param string $locale
@return bool|string

Converts numbers to a more readable representation
when dealing with very large numbers (in the thousands or above),
up to the quadrillions, because you won't often deal with numbers
larger than that.
It uses the "short form" numbering system as this is most commonly
used within most English-speaking countries today.
@see https://simple.wikipedia.org/wiki/Names_for_large_numbers
@param string $num
@return bool|string

A general purpose, locale-aware, number_format method.
Used by all of the functions of the number_helper.

Convert a number to a roman numeral.
@param string $num it will convert to int

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\number_helper.php`

**Functions/Methods**:
- `number_to_size($num, int $precision = 1, ?string $locale = null)`
- `number_to_amount($num, int $precision = 0, ?string $locale = null)`
- `number_to_currency(float $num, string $currency, ?string $locale = null, int $fraction = 0)`
- `format_number(float $num, int $precision = 1, ?string $locale = null, array $options = [])`
- `number_to_roman(string $num)`

