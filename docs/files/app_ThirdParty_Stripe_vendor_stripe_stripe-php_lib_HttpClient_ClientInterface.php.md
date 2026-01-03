# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\ClientInterface.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\ClientInterface.php`
- Type: PHP
- Size: 886 bytes

## Summary (from docblocks)

@param string $method The HTTP method being used
@param string $absUrl The URL being requested, including domain and protocol
@param array $headers Headers to be used in the request (full strings, not KV pairs)
@param array $params KV pairs for parameters. Can be nested for arrays and hashes
@param bool $hasFile Whether or not $params references a file (via an @ prefix or
                        CURLFile)
@throws \Stripe\Exception\ApiConnectionException
@throws \Stripe\Exception\UnexpectedValueException
@return array an array whose first element is raw request body, second
   element is HTTP status code and third array of HTTP headers

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\HttpClient\ClientInterface.php`

**Functions/Methods**:
- `request($method, $absUrl, $headers, $params, $hasFile)`

