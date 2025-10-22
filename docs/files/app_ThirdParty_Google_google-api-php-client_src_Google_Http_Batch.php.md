# app\ThirdParty\Google\google-api-php-client\src\Google\Http\Batch.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Http\Batch.php`
- Type: PHP
- Size: 6899 bytes

## Summary (from docblocks)

Class to handle batched requests to the Google API service.

@var string Multipart Boundary.

@var array service requests to be executed.

@var Google_Client

@var Google_Http_Request $req

Used by the IO lib and also the batch processing.
@param $respData
@param $headerSize
@return array

## References

**Database Tables (inferred)**
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Http\Batch.php`

**Classes**:
- `Google_Http_Batch`

**Functions/Methods**:
- `__construct(Google_Client $client,
      $boundary = false,
      $rootUrl = null,
      $batchPath = null)`
- `add(RequestInterface $request, $key = false)`
- `execute()`
- `parseResponse(ResponseInterface $response, $classes = array()`
- `parseRawHeaders($rawHeaders)`
- `parseHttpResponse($respData, $headerSize)`

