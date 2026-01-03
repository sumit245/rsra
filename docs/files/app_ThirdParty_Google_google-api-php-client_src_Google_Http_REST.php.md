# app\ThirdParty\Google\google-api-php-client\src\Google\Http\REST.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Http\REST.php`
- Type: PHP
- Size: 5547 bytes

## Summary (from docblocks)

This class implements the RESTful transport of apiServiceRequest()'s

Executes a Psr\Http\Message\RequestInterface and (if applicable) automatically retries
when errors occur.
@param Google_Client $client
@param Psr\Http\Message\RequestInterface $req
@return array decoded result
@throws Google_Service_Exception on server side error (ie: not authenticated,
 invalid or malformed post body, invalid url)

Executes a Psr\Http\Message\RequestInterface
@param Google_Client $client
@param Psr\Http\Message\RequestInterface $request
@return array decoded result
@throws Google_Service_Exception on server side error (ie: not authenticated,
 invalid or malformed post body, invalid url)

Decode an HTTP Response.
@static
@throws Google_Service_Exception
@param Psr\Http\Message\RequestInterface $response The http response to be decoded.
@param Psr\Http\Message\ResponseInterface $response
@return mixed|null

## References

**Database Tables (inferred)**
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Http\REST.php`

**Classes**:
- `implements`
- `Google_Http_REST`
- `from`

**Functions/Methods**:
- `execute(ClientInterface $client,
      RequestInterface $request,
      $expectedClass = null,
      $config = array()`
- `doExecute(ClientInterface $client, RequestInterface $request, $expectedClass = null)`
- `decodeHttpResponse(ResponseInterface $response,
      RequestInterface $request = null,
      $expectedClass = null)`
- `decodeBody(ResponseInterface $response, RequestInterface $request = null)`
- `determineExpectedClass($expectedClass, RequestInterface $request = null)`
- `getResponseErrors($body)`
- `isAltMedia(RequestInterface $request = null)`

