# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Pool.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Pool.php`
- Type: PHP
- Size: 4652 bytes

## Summary (from docblocks)

Sends and iterator of requests concurrently using a capped pool size.
The pool will read from an iterator until it is cancelled or until the
iterator is consumed. When a request is yielded, the request is sent after
applying the "request_options" request options (if provided in the ctor).
When a function is yielded by the iterator, the function is provided the
"request_options" array that should be merged on top of any existing
options, and the function MUST then return a wait-able promise.

@var EachPromise

@param ClientInterface $client   Client used to send the requests.
@param array|\Iterator $requests Requests or functions that return
                                 requests to send concurrently.
@param array           $config   Associative array of options
    - concurrency: (int) Maximum number of requests to send concurrently
    - options: Array of request options to apply to each request.
    - fulfilled: (callable) Function to invoke when a request completes.
    - rejected: (callable) Function to invoke when a request is rejected.

Sends multiple requests concurrently and returns an array of responses
and exceptions that uses the same ordering as the provided requests.
IMPORTANT: This method keeps every request and response in memory, and
as such, is NOT recommended when sending a large number or an
indeterminate number of requests concurrently.
@param ClientInterface $client   Client used to send the requests
@param array|\Iterator $requests Requests to send concurrently.
@param array           $options  Passes through the options available in
                                 {@see GuzzleHttp\Pool::__construct}
@return array Returns an array containing the response or an exception
              in the same order that the requests were sent.
@throws \InvalidArgumentException if the event format is incorrect.

## References

**Database Tables (inferred)**
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Pool.php`

**Classes**:
- `GuzzleHttp\Pool implements PromisorInterface`

**Functions/Methods**:
- `__construct(ClientInterface $client,
        $requests,
        array $config = [])`
- `promise()`
- `batch(ClientInterface $client,
        $requests,
        array $options = [])`
- `cmpCallback(array &$options, $name, array &$results)`

