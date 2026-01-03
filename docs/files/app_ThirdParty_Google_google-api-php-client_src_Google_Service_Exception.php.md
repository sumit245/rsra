# app\ThirdParty\Google\google-api-php-client\src\Google\Service\Exception.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Service\Exception.php`
- Type: PHP
- Size: 1883 bytes

## Summary (from docblocks)

Optional list of errors returned in a JSON body of an HTTP error response.

Override default constructor to add the ability to set $errors and a retry
map.
@param string $message
@param int $code
@param Exception|null $previous
@param [{string, string}] errors List of errors returned in an HTTP
response.  Defaults to [].
@param array|null $retryMap Map of errors with retry counts.

An example of the possible errors returned.
{
  "domain": "global",
  "reason": "authError",
  "message": "Invalid Credentials",
  "locationType": "header",
  "location": "Authorization",
}
@return [{string, string}] List of errors return in an HTTP response or [].

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Service\Exception.php`

**Classes**:
- `Google_Service_Exception extends Google_Exception`

**Functions/Methods**:
- `__construct($message,
      $code = 0,
      Exception $previous = null,
      $errors = array()`
- `getErrors()`

