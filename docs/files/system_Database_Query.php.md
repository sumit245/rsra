# system\Database\Query.php

- Path: `system\Database\Query.php`
- Type: PHP
- Size: 10522 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Query builder

The query string, as provided by the user.
@var string

The query string if table prefix has been swapped.
@var string|null

The final query string after binding, etc.
@var string|null

The binds and their values used for binding.
@var array

Bind marker
Character used to identify values in a prepared statement.
@var string

The start time in seconds with microseconds
for when this query was executed.
@var float|string

The end time in seconds with microseconds
for when this query was executed.
@var float

The error code, if any.
@var int

The error message, if any.
@var string

Pointer to database connection.
Mainly for escaping features.
@var ConnectionInterface

Sets the raw query string to use for this statement.
@param mixed $binds
@return $this

Will store the variables to bind into the query later.
@return $this

Returns the final, processed query string after binding, etal
has been performed.

Records the execution time of the statement using microtime(true)
for it's start and end values. If no end value is present, will
use the current time to determine total duration.
@param float $end
@return $this

Returns the start time in seconds with microseconds.
@return float|string

Returns the duration of this query during execution, or null if
the query has not been executed yet.
@param int $decimals The accuracy of the returned time.

Stores the error description that happened for this query.
@return $this

Reports whether this statement created an error not.

Returns the error code created while executing this statement.

Returns the error message created while executing this statement.

Determines if the statement is a write-type query or not.

Swaps out one table prefix for a new one.
@return $this

Returns the original SQL that was passed into the system.

Escapes and inserts any binds into the finalQueryString property.
@see https://regex101.com/r/EUEhay/5

Match bindings

Match bindings

Returns string to display in debug toolbar

@see https://stackoverflow.com/a/20767160
@see https://regex101.com/r/hUlrGN/4

Return text representation of the query

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\Query.php`

**Classes**:
- `CodeIgniter\Database\Query implements QueryInterface`

**Functions/Methods**:
- `__construct(ConnectionInterface $db)`
- `setQuery(string $sql, $binds = null, bool $setEscape = true)`
- `setBinds(array $binds, bool $setEscape = true)`
- `getQuery()`
- `setDuration(float $start, ?float $end = null)`
- `getStartTime(bool $returnRaw = false, int $decimals = 6)`
- `getDuration(int $decimals = 6)`
- `setError(int $code, string $error)`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`
- `isWriteType()`
- `swapPrefix(string $orig, string $swap)`
- `getOriginalQuery()`
- `compileBinds()`
- `matchNamedBinds(string $sql, array $binds)`
- `matchSimpleBinds(string $sql, array $binds, int $bindCount, int $ml)`
- `debugToolbarDisplay()`
- `__toString()`

