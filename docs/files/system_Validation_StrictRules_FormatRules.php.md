# system\Validation\StrictRules\FormatRules.php

- Path: `system\Validation\StrictRules\FormatRules.php`
- Type: PHP
- Size: 8986 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Format validation Rules.

Alpha
@param mixed $str

Alpha with spaces.
@param mixed $value Value.
@return bool True if alpha with spaces, else false.

Alphanumeric with underscores and dashes
@param mixed $str

Alphanumeric, spaces, and a limited set of punctuation characters.
Accepted punctuation characters are: ~ tilde, ! exclamation,
# number, $ dollar, % percent, & ampersand, * asterisk, - dash,
_ underscore, + plus, = equals, | vertical bar, : colon, . period
~ ! # $ % & * - _ + = | : .
@param mixed $str
@return bool

Alphanumeric
@param mixed $str

Alphanumeric w/ spaces
@param mixed $str

Any type of string
@param mixed $str

Decimal number
@param mixed $str

String of hexidecimal characters
@param mixed $str

Integer
@param mixed $str

Is a Natural number  (0,1,2,3, etc.)
@param mixed $str

Is a Natural number, but not a zero  (1,2,3, etc.)
@param mixed $str

Numeric
@param mixed $str

Compares value against a regular expression pattern.
@param mixed $str

Validates that the string is a valid timezone as per the
timezone_identifiers_list function.
@see http://php.net/manual/en/datetimezone.listidentifiers.php
@param mixed $str

Valid Base64
Tests a string for characters outside of the Base64 alphabet
as defined by RFC 2045 http://www.faqs.org/rfcs/rfc2045
@param mixed $str

Valid JSON
@param mixed $str

Checks for a correctly formatted email address
@param mixed $str

Validate a comma-separated list of email addresses.
Example:
    valid_emails[one@example.com,two@example.com]
@param mixed $str

Validate an IP address (human readable format or binary string - inet_pton)
@param mixed       $ip
@param string|null $which IP protocol: 'ipv4' or 'ipv6'

Checks a string to ensure it is (loosely) a URL.
Warning: this rule will pass basic strings like
"banana"; use valid_url_strict for a stricter rule.
@param mixed $str

Checks a URL to ensure it's formed correctly.
@param mixed       $str
@param string|null $validSchemes comma separated list of allowed schemes

Checks for a valid date and matches a given date format
@param mixed $str

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\StrictRules\FormatRules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\FormatRules`

**Functions/Methods**:
- `__construct()`
- `alpha($str = null)`
- `alpha_space($value = null)`
- `alpha_dash($str = null)`
- `alpha_numeric_punct($str)`
- `alpha_numeric($str = null)`
- `alpha_numeric_space($str = null)`
- `string($str = null)`
- `decimal($str = null)`
- `hex($str = null)`
- `integer($str = null)`
- `is_natural($str = null)`
- `is_natural_no_zero($str = null)`
- `numeric($str = null)`
- `regex_match($str, string $pattern)`
- `timezone($str = null)`
- `valid_base64($str = null)`
- `valid_json($str = null)`
- `valid_email($str = null)`
- `valid_emails($str = null)`
- `valid_ip($ip = null, ?string $which = null)`
- `valid_url($str = null)`
- `valid_url_strict($str = null, ?string $validSchemes = null)`
- `valid_date($str = null, ?string $format = null)`

