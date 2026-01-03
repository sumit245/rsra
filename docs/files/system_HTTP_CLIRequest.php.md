# system\HTTP\CLIRequest.php

- Path: `system\HTTP\CLIRequest.php`
- Type: PHP
- Size: 5235 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Represents a request from the command-line. Provides additional
tools to interact with that request since CLI requests are not
static like HTTP requests might be.
Portions of this code were initially from the FuelPHP Framework,
version 1.7.x, and used here under the MIT license they were
originally made available under.
http://fuelphp.com

Stores the segments of our cli "URI" command.
@var array

Command line options and their values.
@var array

Command line arguments (segments and options).
@var array

Set the expected HTTP verb
@var string

Constructor

Returns the "path" of the request script so that it can be used
in routing to the appropriate controller/method.
The path is determined by treating the command line arguments
as if it were a URL - up until we hit our first option.
Example:
     php index.php users 21 profile -foo bar
     // Routes to /users/21/profile (index is removed for routing sake)
     // with the option foo = bar.

Returns an associative array of all CLI options found, with
their values.

Returns an array of all CLI arguments (segments and options).

Returns the path segments.

Returns the value for a single CLI option that was passed in.
@return string|null

Returns the options as a string, suitable for passing along on
the CLI to other commands.
Example:
     $options = [
         'foo' => 'bar',
         'baz' => 'queue some stuff'
     ];
     getOptionString() = '-foo bar -baz "queue some stuff"'

Parses the command line it was called from and collects all options
and valid segments.
NOTE: I tried to use getopt but had it fail occasionally to find
any options, where argv has always had our back.

Determines if this request was made from the command line (CLI).

## References

**Database Tables (inferred)**
- `the`
- `and`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\CLIRequest.php`

**Classes**:
- `CodeIgniter\HTTP\CLIRequest extends Request`

**Functions/Methods**:
- `__construct(App $config)`
- `getPath()`
- `getOptions()`
- `getArgs()`
- `getSegments()`
- `getOption(string $key)`
- `getOptionString(bool $useLongOpts = false)`
- `parseCommand()`
- `isCLI()`

