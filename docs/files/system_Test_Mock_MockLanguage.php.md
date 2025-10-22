# system\Test\Mock\MockLanguage.php

- Path: `system\Test\Mock\MockLanguage.php`
- Type: PHP
- Size: 1263 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Stores the data that should be
returned by the 'requireFile()' method.
@var mixed

Sets the data that should be returned by the
'requireFile()' method to allow easy overrides
during testing.
@return $this

Provides an override that allows us to set custom
data to be returned easily during testing.

Arbitrarily turnoff internationalization support for testing

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Mock\MockLanguage.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockLanguage extends Language`

**Functions/Methods**:
- `setData(string $file, array $data, ?string $locale = null)`
- `requireFile(string $path)`
- `disableIntlSupport()`

