# system\Test\Filters\CITestStreamFilter.php

- Path: `system\Test\Filters\CITestStreamFilter.php`
- Type: PHP
- Size: 1218 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Used to capture output during unit testing, so that it can
be used in assertions.

Buffer to capture stream content.
@var string

This method is called whenever data is read from or written to the
attached stream (such as with fread() or fwrite()).
@param resource $in
@param resource $out
@param int      $consumed
@param bool     $closing

## References

**Database Tables (inferred)**
- `or`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Filters\CITestStreamFilter.php`

**Classes**:
- `CodeIgniter\Test\Filters\CITestStreamFilter extends php_user_filter`

**Functions/Methods**:
- `filter($in, $out, &$consumed, $closing)`

