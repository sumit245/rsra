# system\Publisher\Exceptions\PublisherException.php

- Path: `system\Publisher\Exceptions\PublisherException.php`
- Type: PHP
- Size: 1412 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Publisher Exception Class
Handles exceptions related to actions taken by a Publisher.

Throws when a file should be overwritten yet cannot.
@param string $from The source file
@param string $to   The destination file

Throws when given a destination that is not in the list of allowed directories.

Throws when a file fails to match the allowed pattern for its destination.

## References

**Database Tables (inferred)**
- `The`

## Symbols

# Symbols

**Files documented**: 1

## `system\Publisher\Exceptions\PublisherException.php`

**Classes**:
- `CodeIgniter\Publisher\Exceptions\PublisherException extends FrameworkException`

**Functions/Methods**:
- `forCollision(string $from, string $to)`
- `forDestinationNotAllowed(string $destination)`
- `forFileNotAllowed(string $file, string $directory, string $pattern)`

