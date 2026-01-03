# system\Config\Publisher.php

- Path: `system\Config\Publisher.php`
- Type: PHP
- Size: 1162 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Publisher Configuration
Defines basic security restrictions for the Publisher class
to prevent abuse by injecting malicious files into a project.

A list of allowed destinations with a (pseudo-)regex
of allowed files for each destination.
Attempts to publish to directories not in this list will
result in a PublisherException. Files that do no fit the
pattern will cause copy/merge to fail.
@var array<string,string>

Disables Registrars to prevent modules from altering the restrictions.

## References

**Database Tables (inferred)**
- `altering`

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\Publisher.php`

**Classes**:
- `CodeIgniter\Config\Publisher extends BaseConfig`

**Functions/Methods**:
- `registerProperties()`

