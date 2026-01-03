# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LineFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LineFormatter.php`
- Type: PHP
- Size: 5528 bytes

## Summary (from docblocks)

Formats incoming records into a one-line string
This is especially useful for logging to files
@author Jordi Boggiano <j.boggiano@seld.be>
@author Christophe Coevoet <stof@notk.org>

@param string $format                     The format of the message
@param string $dateFormat                 The format of the timestamp: one supported by DateTime::format
@param bool   $allowInlineLineBreaks      Whether to allow inline line breaks in log entries
@param bool   $ignoreEmptyContextAndExtra

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LineFormatter.php`

**Classes**:
- `Monolog\Formatter\LineFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($format = null, $dateFormat = null, $allowInlineLineBreaks = false, $ignoreEmptyContextAndExtra = false)`
- `includeStacktraces($include = true)`
- `allowInlineLineBreaks($allow = true)`
- `ignoreEmptyContextAndExtra($ignore = true)`
- `format(array $record)`
- `formatBatch(array $records)`
- `stringify($value)`
- `normalizeException($e)`
- `convertToString($data)`
- `replaceNewlines($str)`

