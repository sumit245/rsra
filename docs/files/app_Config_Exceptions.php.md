# app\Config\Exceptions.php

- Path: `app\Config\Exceptions.php`
- Type: PHP
- Size: 1845 bytes

## Summary (from docblocks)

Setup how the exception handler works.

--------------------------------------------------------------------------
LOG EXCEPTIONS?
--------------------------------------------------------------------------
If true, then exceptions will be logged
through Services::Log.
Default: true
@var bool

--------------------------------------------------------------------------
DO NOT LOG STATUS CODES
--------------------------------------------------------------------------
Any status codes here will NOT be logged if logging is turned on.
By default, only 404 (Page Not Found) exceptions are ignored.
@var array

--------------------------------------------------------------------------
Error Views Path
--------------------------------------------------------------------------
This is the path to the directory that contains the 'cli' and 'html'
directories that hold the views used to generate errors.
Default: APPPATH.'Views/errors'
@var string

--------------------------------------------------------------------------
HIDE FROM DEBUG TRACE
--------------------------------------------------------------------------
Any data that you would like to hide from the debug trace.
In order to specify 2 levels, use "/" to separate.
ex. ['server', 'setup/password', 'secret_token']
@var array

## References

**Database Tables (inferred)**
- `DEBUG`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Exceptions.php`

**Classes**:
- `Config\Exceptions extends BaseConfig`

