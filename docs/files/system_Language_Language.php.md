# system\Language\Language.php

- Path: `system\Language\Language.php`
- Type: PHP
- Size: 6811 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Handle system messages and localization.
Locale-based, built on top of PHP internationalization.

Stores the retrieved language lines
from files for faster retrieval on
second use.
@var array

The current language/locale to work with.
@var string

Boolean value whether the intl
libraries exist on the system.
@var bool

Stores filenames that have been
loaded so that we don't load them again.
@var array

Sets the current locale to use when performing string lookups.
@return $this

Parses the language string for a file, loads the file, if necessary,
getting the line.
@return string|string[]

@return array|string|null

Parses the language string which should include the
filename as the first segment (separated by period).

Advanced message formatting.
@param array|string $message
@param string[]     $args
@return array|string

Loads a language file in the current locale. If $return is true,
will return the file's contents, otherwise will merge with
the existing language lines.
@return array|void

A simple method for including files that can be
overridden during testing.

## References

**Database Tables (inferred)**
- `files`

## Symbols

# Symbols

**Files documented**: 1

## `system\Language\Language.php`

**Classes**:
- `CodeIgniter\Language\Language`

**Functions/Methods**:
- `__construct(string $locale)`
- `setLocale(?string $locale = null)`
- `getLocale()`
- `getLine(string $line, array $args = [])`
- `getTranslationOutput(string $locale, string $file, string $parsedLine)`
- `parseLine(string $line, string $locale)`
- `formatMessage($message, array $args = [])`
- `load(string $file, string $locale, bool $return = false)`
- `requireFile(string $path)`

