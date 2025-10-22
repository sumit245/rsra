# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorCollector.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorCollector.php`
- Type: PHP
- Size: 7625 bytes

## Summary (from docblocks)

Error collection class that enables HTML Purifier to report HTML
problems back to the user

Identifiers for the returned error array. These are purposely numeric
so list() can be used.

@type array

@type array

@type array

@type HTMLPurifier_Language

@type HTMLPurifier_Generator

@type HTMLPurifier_Context

@type array

@param HTMLPurifier_Context $context

Sends an error message to the collector for later use
@param int $severity Error severity, PHP error style (don't use E_USER_)
@param string $msg Error message text

Retrieves raw error data for custom formatter to use

Default HTML formatting implementation for error messages
@param HTMLPurifier_Config $config Configuration, vital for HTML output nature
@param array $errors Errors array to display; used for recursion.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorCollector.php`

**Classes**:
- `that`
- `HTMLPurifier_ErrorCollector`

**Functions/Methods**:
- `__construct($context)`
- `send($severity, $msg)`
- `getRaw()`
- `getHTMLFormatted($config, $errors = null)`
- `_renderStruct(&$ret, $struct, $line = null, $col = null)`

