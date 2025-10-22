# app\Config\Filters.php

- Path: `app\Config\Filters.php`
- Type: PHP
- Size: 2094 bytes

## Summary (from docblocks)

Configures aliases for Filter classes to
make reading things nicer and simpler.
@var array

List of filter aliases that are always
applied before and after every request.
@var array

List of filter aliases that works on a
particular HTTP method (GET, POST, etc.).
Example:
'post' => ['foo', 'bar']
If you use this, you should disable auto-routing because auto-routing
permits any HTTP method to access a controller. Accessing the controller
with a method you don’t expect could bypass the filter.
@var array

List of filter aliases that should run on any
before or after URI patterns.
Example:
'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
@var array

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Filters.php`

**Classes**:
- `Config\Filters extends BaseConfig`

**Functions/Methods**:
- `__construct()`

