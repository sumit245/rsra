# system\Helpers\date_helper.php

- Path: `system\Helpers\date_helper.php`
- Type: PHP
- Size: 2138 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Get "now" time
Returns time() based on the timezone parameter or on the
app_timezone() setting
@param string $timezone
@throws Exception

Generates a select field of all available timezones
Returns a string with the formatted HTML
@param string $class   Optional class to apply to the select field
@param string $default Default value for initial selection
@param int    $what    One of the DateTimeZone class constants (for listIdentifiers)
@param string $country A two-letter ISO 3166-1 compatible country code (for listIdentifiers)
@throws Exception

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\date_helper.php`

**Classes**:
- `Optional`
- `to`
- `constants`

**Functions/Methods**:
- `now(?string $timezone = null)`
- `timezone_select(string $class = '', string $default = '', int $what = DateTimeZone::ALL, ?string $country = null)`

