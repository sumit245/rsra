# app\Config\Format.php

- Path: `app\Config\Format.php`
- Type: PHP
- Size: 2592 bytes

## Summary (from docblocks)

--------------------------------------------------------------------------
Available Response Formats
--------------------------------------------------------------------------
When you perform content negotiation with the request, these are the
available formats that your application supports. This is currently
only used with the API\ResponseTrait. A valid Formatter must exist
for the specified format.
These formats are only checked when the data passed to the respond()
method is an array.
@var string[]

--------------------------------------------------------------------------
Formatters
--------------------------------------------------------------------------
Lists the class to use to format responses with of a particular type.
For each mime type, list the class that should be used. Formatters
can be retrieved through the getFormatter() method.
@var array<string, string>

--------------------------------------------------------------------------
Formatters Options
--------------------------------------------------------------------------
Additional Options to adjust default formatters behaviour.
For each mime type, list the additional options that should be used.
@var array<string, int>

A Factory method to return the appropriate formatter for the given mime type.
@return FormatterInterface
@deprecated This is an alias of `\CodeIgniter\Format\Format::getFormatter`. Use that instead.

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Format.php`

**Classes**:
- `Config\Format extends BaseConfig`
- `Config\to`
- `Config\that`

**Functions/Methods**:
- `getFormatter(string $mime)`

