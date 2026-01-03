# system\Config\DotEnv.php

- Path: `system\Config\DotEnv.php`
- Type: PHP
- Size: 6878 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Environment-specific configuration

The directory where the .env file can be located.
@var string

Builds the path to our file.

The main entry point, will load the .env file and process it
so that we end up with all settings in the PHP environment vars
(i.e. getenv(), $_ENV, and $_SERVER)

Parse the .env file into an array of key => value

Sets the variable into the environment. Will parse the string
first to look for {name}={value} pattern, ensure that nested
variables are handled, and strip it of single and double quotes.

Parses for assignment, cleans the $name and $value, and ensures
that nested variables are handled.

Strips quotes from the environment variable value.
This was borrowed from the excellent phpdotenv with very few changes.
https://github.com/vlucas/phpdotenv
@throws InvalidArgumentException

Resolve the nested variables.
Look for ${varname} patterns in the variable value and replace with an existing
environment variable.
This was borrowed from the excellent phpdotenv with very few changes.
https://github.com/vlucas/phpdotenv

Search the different places for environment variables and return first value found.
This was borrowed from the excellent phpdotenv with very few changes.
https://github.com/vlucas/phpdotenv
@return string|null

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\DotEnv.php`

**Classes**:
- `CodeIgniter\Config\DotEnv`

**Functions/Methods**:
- `__construct(string $path, string $file = '.env')`
- `load()`
- `parse()`
- `setVariable(string $name, string $value = '')`
- `normaliseVariable(string $name, string $value = '')`
- `sanitizeValue(string $value)`
- `resolveNestedVariables(string $value)`
- `getVariable(string $name)`

