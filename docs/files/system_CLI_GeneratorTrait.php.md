# system\CLI\GeneratorTrait.php

- Path: `system\CLI\GeneratorTrait.php`
- Type: PHP
- Size: 9960 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

GeneratorTrait contains a collection of methods
to build the commands that generates a file.

Component Name
@var string

File directory
@var string

View template name
@var string

Language string key for required class names.
@var string

Whether to require class name.
@internal
@var bool

Whether to sort class imports.
@internal
@var bool

Whether the `--suffix` option has any effect.
@internal
@var bool

The params array for easy access by other methods.
@internal
@var array

Execute the command.

Prepare options and do the necessary replacements.

Change file basename before saving.
Useful for components where the file name has a date.

Parses the class name and checks if it is already qualified.

@see https://regex101.com/r/a5KNCR/1

Gets the generator view as defined in the `Config\Generators::$views`,
with fallback to `$template` when the defined view does not exist.

Performs pseudo-variables contained within view file.

Builds the contents for class being generated, doing all
the replacements necessary, and alphabetically sorts the
imports for a given template.

Builds the file path from the class name.

Allows child generators to modify the internal `$hasClassName` flag.
@return $this

Allows child generators to modify the internal `$sortImports` flag.
@return $this

Allows child generators to modify the internal `$enabledSuffixing` flag.
@return $this

Gets a single command-line option. Returns TRUE if the option exists,
but doesn't have a value, and is simply acting as a flag.
@return mixed

## References

**Views Rendered**
- `CodeIgniter\\Commands\\Generators\\Views\\{$this->template}`

**Database Tables (inferred)**
- `the`
- `class`
- `input`

## Symbols

# Symbols

**Files documented**: 1

## `system\CLI\GeneratorTrait.php`

**Classes**:
- `CodeIgniter\CLI\names`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\imports`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\based`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\being`
- `CodeIgniter\CLI\name`

**Functions/Methods**:
- `execute(array $params)`
- `prepare(string $class)`
- `basename(string $filename)`
- `qualifyClassName()`
- `renderTemplate(array $data = [])`
- `parseTemplate(string $class, array $search = [], array $replace = [], array $data = [])`
- `buildContent(string $class)`
- `buildPath(string $class)`
- `setHasClassName(bool $hasClassName)`
- `setSortImports(bool $sortImports)`
- `setEnabledSuffixing(bool $enabledSuffixing)`
- `getOption(string $name)`

