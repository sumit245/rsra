# system\Config\View.php

- Path: `system\Config\View.php`
- Type: PHP
- Size: 4119 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

View configuration

When false, the view method will clear the data between each
call.
@var bool

Parser Filters map a filter name with any PHP callable. When the
Parser prepares a variable for display, it will chain it
through the filters in the order defined, inserting any parameters.
To prevent potential abuse, all filters MUST be defined here
in order for them to be available for use within the Parser.

Parser Plugins provide a way to extend the functionality provided
by the core Parser by creating aliases that will be replaced with
any callable. Can be single or tag pair.

Built-in View filters.
@var array

Built-in View plugins.
@var array

View Decorators are class methods that will be run in sequence to
have a chance to alter the generated output just prior to caching
the results.
All classes must implement CodeIgniter\View\ViewDecoratorInterface
@var class-string<ViewDecoratorInterface>[]

Merge the built-in and developer-configured filters and plugins,
with preference to the developer ones.

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\View.php`

**Classes**:
- `CodeIgniter\Config\View extends BaseConfig`
- `CodeIgniter\Config\methods`

**Functions/Methods**:
- `__construct()`

