# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\HtmlFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\HtmlFormatter.php`
- Type: PHP
- Size: 4537 bytes

## Summary (from docblocks)

Formats incoming records into an HTML table
This is especially useful for html email logging
@author Tiago Brito <tlfbrito@gmail.com>

Translates Monolog log levels to html color priorities.

@param string $dateFormat The format of the timestamp: one supported by DateTime::format

Creates an HTML table row
@param  string $th       Row header content
@param  string $td       Row standard cell content
@param  bool   $escapeTd false if td content must not be html escaped
@return string

Create a HTML h1 tag
@param  string $title Text to be in the h1
@param  int    $level Error level
@return string

Formats a log record.
@param  array $record A record to format
@return mixed The formatted record

Formats a set of log records.
@param  array $records A set of records to format
@return mixed The formatted set of records

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\HtmlFormatter.php`

**Classes**:
- `Monolog\Formatter\HtmlFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($dateFormat = null)`
- `addRow($th, $td = ' ', $escapeTd = true)`
- `addTitle($title, $level)`
- `format(array $record)`
- `formatBatch(array $records)`
- `convertToString($data)`

