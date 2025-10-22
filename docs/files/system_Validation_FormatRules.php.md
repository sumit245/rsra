# system\Validation\FormatRules.php

- Path: `system\Validation\FormatRules.php`
- Type: PHP
- Size: 8798 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Format validation Rules.

Alpha

Alpha with spaces.
@param string|null $value Value.
@return bool True if alpha with spaces, else false.

Alphanumeric with underscores and dashes
@see https://regex101.com/r/XfVY3d/1

Alphanumeric, spaces, and a limited set of punctuation characters.
Accepted punctuation characters are: ~ tilde, ! exclamation,
# number, $ dollar, % percent, & ampersand, * asterisk, - dash,
_ underscore, + plus, = equals, | vertical bar, : colon, . period
~ ! # $ % & * - _ + = | : .
@param string|null $str
@return bool
@see https://regex101.com/r/6N8dDY/1

Alphanumeric

Alphanumeric w/ spaces

Any type of string
Note: we specifically do NOT type hint $str here so that
it doesn't convert numbers into strings.
@param string|null $str

Decimal number

String of hexidecimal characters

Integer

Is a Natural number  (0,1,2,3, etc.)

Is a Natural number, but not a zero  (1,2,3, etc.)

Numeric

Compares value against a regular expression pattern.

Validates that the string is a valid timezone as per the
timezone_identifiers_list function.
@see http://php.net/manual/en/datetimezone.listidentifiers.php
@param string $str

Valid Base64
Tests a string for characters outside of the Base64 alphabet
as defined by RFC 2045 http://www.faqs.org/rfcs/rfc2045
@param string $str

Valid JSON
@param string $str

Checks for a correctly formatted email address
@param string $str

Validate a comma-separated list of email addresses.
Example:
    valid_emails[one@example.com,two@example.com]
@param string $str

Validate an IP address (human readable format or binary string - inet_pton)
@param string|null $which IP protocol: 'ipv4' or 'ipv6'

Checks a string to ensure it is (loosely) a URL.
Warning: this rule will pass basic strings like
"banana"; use valid_url_strict for a stricter rule.

Checks a URL to ensure it's formed correctly.
@param string|null $validSchemes comma separated list of allowed schemes

Checks for a valid date and matches a given date format

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\FormatRules.php`

**Classes**:
- `CodeIgniter\Validation\FormatRules`

**Functions/Methods**:
- `alpha(?string $str = null)`
- `alpha_space(?string $value = null)`
- `alpha_dash(?string $str = null)`
- `alpha_numeric_punct($str)`
- `alpha_numeric(?string $str = null)`
- `alpha_numeric_space(?string $str = null)`
- `string($str = null)`
- `decimal(?string $str = null)`
- `hex(?string $str = null)`
- `integer(?string $str = null)`
- `is_natural(?string $str = null)`
- `is_natural_no_zero(?string $str = null)`
- `numeric(?string $str = null)`
- `regex_match(?string $str, string $pattern)`
- `timezone(?string $str = null)`
- `valid_base64(?string $str = null)`
- `valid_json(?string $str = null)`
- `valid_email(?string $str = null)`
- `valid_emails(?string $str = null)`
- `valid_ip(?string $ip = null, ?string $which = null)`
- `valid_url(?string $str = null)`
- `valid_url_strict(?string $str = null, ?string $validSchemes = null)`
- `valid_date(?string $str = null, ?string $format = null)`

