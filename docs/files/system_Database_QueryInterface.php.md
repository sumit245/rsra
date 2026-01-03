# system\Database\QueryInterface.php

- Path: `system\Database\QueryInterface.php`
- Type: PHP
- Size: 2262 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface QueryInterface
Represents a single statement that can be executed against the database.
Statements are platform-specific and can handle binding of binds.

Sets the raw query string to use for this statement.
@param mixed $binds
@return mixed

Returns the final, processed query string after binding, etal
has been performed.
@return mixed

Records the execution time of the statement using microtime(true)
for it's start and end values. If no end value is present, will
use the current time to determine total duration.
@return mixed

Returns the duration of this query during execution, or null if
the query has not been executed yet.
@param int $decimals The accuracy of the returned time.

Stores the error description that happened for this query.

Reports whether this statement created an error not.

Returns the error code created while executing this statement.

Returns the error message created while executing this statement.

Determines if the statement is a write-type query or not.

Swaps out one table prefix for a new one.
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\QueryInterface.php`

**Functions/Methods**:
- `setQuery(string $sql, $binds = null, bool $setEscape = true)`
- `getQuery()`
- `setDuration(float $start, ?float $end = null)`
- `getDuration(int $decimals = 6)`
- `setError(int $code, string $error)`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`
- `isWriteType()`
- `swapPrefix(string $orig, string $swap)`

