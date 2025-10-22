# system\View\Filters.php

- Path: `system\View\Filters.php`
- Type: PHP
- Size: 6155 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

View filters

Returns $value as all lowercase with the first letter capitalized.

Formats a date into the given $format.
@param mixed $value

Given a string or DateTime object, will return the date modified
by the given value. Returns the value as a unix timestamp
Example:
     my_date|date_modify(+1 day)
@param string $value
@return false|int

Returns the given default value if $value is empty or undefined.
@param mixed $value

Escapes the given value with our `esc()` helper function.
@param string $value

Returns an excerpt of the given string.

Highlights a given phrase within the text using '<mark></mark>' tags.

Highlights code samples with HTML/CSS.
@param string $value

Limits the number of characters to $limit, and trails of with an ellipsis.
Will break at word break so may be more or less than $limit.
@param string $value

Limits the number of words to $limit, and trails of with an ellipsis.
@param string $value

Returns the $value displayed in a localized manner.
@param float|int $value

Returns the $value displayed as a currency string.
@param float|int $value
@param int       $fraction

Returns a string with all instances of newline character (\n)
converted to an HTML <br/> tag.

Takes a body of text and uses the auto_typography() method to
turn it into prettier, easier-to-read, prose.

Rounds a given $value in one of 3 ways;
 - common    Normal rounding
 - ceil      always rounds up
 - floor     always rounds down
@param mixed $precision
@return float|string

Returns a "title case" version of the string.

## Symbols

# Symbols

**Files documented**: 1

## `system\View\Filters.php`

**Classes**:
- `CodeIgniter\View\Filters`

**Functions/Methods**:
- `capitalize(string $value)`
- `date($value, string $format)`
- `date_modify($value, string $adjustment)`
- `default($value, string $default)`
- `esc($value, string $context = 'html')`
- `excerpt(string $value, string $phrase, int $radius = 100)`
- `highlight(string $value, string $phrase)`
- `highlight_code($value)`
- `limit_chars($value, int $limit = 500)`
- `limit_words($value, int $limit = 100)`
- `local_number($value, string $type = 'decimal', int $precision = 4, ?string $locale = null)`
- `local_currency($value, string $currency, ?string $locale = null, $fraction = null)`
- `nl2br(string $value)`
- `prose(string $value)`
- `round(string $value, $precision = 2, string $type = 'common')`
- `title(string $value)`

