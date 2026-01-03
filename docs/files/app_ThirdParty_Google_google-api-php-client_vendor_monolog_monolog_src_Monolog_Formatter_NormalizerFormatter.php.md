# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\NormalizerFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\NormalizerFormatter.php`
- Type: PHP
- Size: 9402 bytes

## Summary (from docblocks)

Normalizes incoming records to remove objects/resources so it's easier to dump to various targets
@author Jordi Boggiano <j.boggiano@seld.be>

@param string $dateFormat The format of the timestamp: one supported by DateTime::format

{@inheritdoc}

{@inheritdoc}

Return the JSON representation of a value
@param  mixed             $data
@param  bool              $ignoreErrors
@throws \RuntimeException if encoding fails and errors are not ignored
@return string

@param  mixed  $data
@return string JSON encoded data or null on failure

Handle a json_encode failure.
If the failure is due to invalid string encoding, try to clean the
input and encode again. If the second encoding attempt fails, the
inital error is not encoding related or the input can't be cleaned then
raise a descriptive exception.
@param  int               $code return code of json_last_error function
@param  mixed             $data data that was meant to be encoded
@throws \RuntimeException if failure can't be corrected
@return string            JSON encoded data after error correction

Throws an exception according to a given code with a customized message
@param  int               $code return code of json_last_error function
@param  mixed             $data data that was meant to be encoded
@throws \RuntimeException

Detect invalid UTF-8 string characters and convert to valid UTF-8.
Valid UTF-8 input will be left unmodified, but strings containing
invalid UTF-8 codepoints will be reencoded as UTF-8 with an assumed
original encoding of ISO-8859-15. This conversion may result in
incorrect output if the actual encoding was not ISO-8859-15, but it
will be clean UTF-8 output and will not rely on expensive and fragile
detection algorithms.
Function converts the input in place in the passed variable so that it
can be used as a callback for array_walk_recursive.
@param mixed &$data Input to check and convert if needed
@private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\NormalizerFormatter.php`

**Classes**:
- `Monolog\Formatter\NormalizerFormatter implements FormatterInterface`

**Functions/Methods**:
- `__construct($dateFormat = null)`
- `format(array $record)`
- `formatBatch(array $records)`
- `normalize($data)`
- `normalizeException($e)`
- `toJson($data, $ignoreErrors = false)`
- `jsonEncode($data)`
- `handleJsonError($code, $data)`
- `throwEncodeError($code, $data)`
- `detectAndCleanUtf8(&$data)`

