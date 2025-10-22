# app\ThirdParty\Google\google-api-php-client\vendor\firebase\php-jwt\src\JWT.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\firebase\php-jwt\src\JWT.php`
- Type: PHP
- Size: 14348 bytes

## Summary (from docblocks)

JSON Web Token implementation, based on this spec:
https://tools.ietf.org/html/rfc7519
PHP version 5
@category Authentication
@package  Authentication_JWT
@author   Neuman Vong <neuman@twilio.com>
@author   Anant Narayanan <anant@php.net>
@license  http://opensource.org/licenses/BSD-3-Clause 3-clause BSD
@link     https://github.com/firebase/php-jwt

When checking nbf, iat or expiration times,
we want to provide some extra leeway time to
account for clock skew.

Allow the current timestamp to be specified.
Useful for fixing a value within unit testing.
Will default to PHP time() value if null.

Decodes a JWT string into a PHP object.
@param string        $jwt            The JWT
@param string|array  $key            The key, or map of keys.
                                     If the algorithm used is asymmetric, this is the public key
@param array         $allowed_algs   List of supported verification algorithms
                                     Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
@return object The JWT's payload as a PHP object
@throws UnexpectedValueException     Provided JWT was invalid
@throws SignatureInvalidException    Provided JWT was invalid because the signature verification failed
@throws BeforeValidException         Provided JWT is trying to be used before it's eligible as defined by 'nbf'
@throws BeforeValidException         Provided JWT is trying to be used before it's been created as defined by 'iat'
@throws ExpiredException             Provided JWT has since expired, as defined by the 'exp' claim
@uses jsonDecode
@uses urlsafeB64Decode

Converts and signs a PHP object or array into a JWT string.
@param object|array  $payload    PHP object or array
@param string        $key        The secret key.
                                 If the algorithm used is asymmetric, this is the private key
@param string        $alg        The signing algorithm.
                                 Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
@param mixed         $keyId
@param array         $head       An array with header elements to attach
@return string A signed JWT
@uses jsonEncode
@uses urlsafeB64Encode

Sign a string with a given key and algorithm.
@param string            $msg    The message to sign
@param string|resource   $key    The secret key
@param string            $alg    The signing algorithm.
                                 Supported algorithms are 'HS256', 'HS384', 'HS512' and 'RS256'
@return string An encrypted message
@throws DomainException Unsupported algorithm was specified

Verify a signature with the message, key and method. Not all methods
are symmetric, so we must have a separate verify and sign method.
@param string            $msg        The original message (header and body)
@param string            $signature  The original signature
@param string|resource   $key        For HS*, a string key works. for RS*, must be a resource of an openssl public key
@param string            $alg        The algorithm
@return bool
@throws DomainException Invalid Algorithm or OpenSSL failure

Decode a JSON string into a PHP object.
@param string $input JSON string
@return object Object representation of JSON string
@throws DomainException Provided string was invalid JSON

In PHP >=5.4.0, json_decode() accepts an options parameter, that allows you
to specify that large ints (like Steam Transaction IDs) should be treated as
strings, rather than the PHP default behaviour of converting them to floats.

Not all servers will support that, however, so for older versions we must
manually detect large ints in the JSON string and quote them (thus converting
them to strings) before decoding, hence the preg_replace() call.

Encode a PHP object into a JSON string.
@param object|array $input A PHP object or array
@return string JSON representation of the PHP object or array
@throws DomainException Provided object could not be encoded to valid JSON

Decode a string with URL-safe Base64.
@param string $input A Base64 encoded string
@return string A decoded string

Encode a string with URL-safe Base64.
@param string $input The string you want encoded
@return string The base64 encode of what you passed in

Helper method to create a JSON error.
@param int $errno An error number from json_last_error()
@return void

Get the number of bytes in cryptographic strings.
@param string
@return int

## References

**Database Tables (inferred)**
- `json_last_error`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\firebase\php-jwt\src\JWT.php`

**Classes**:
- `Firebase\JWT\JWT`

**Functions/Methods**:
- `decode($jwt, $key, array $allowed_algs = array()`
- `encode($payload, $key, $alg = 'HS256', $keyId = null, $head = null)`
- `sign($msg, $key, $alg = 'HS256')`
- `verify($msg, $signature, $key, $alg)`
- `jsonDecode($input)`
- `jsonEncode($input)`
- `urlsafeB64Decode($input)`
- `urlsafeB64Encode($input)`
- `handleJsonError($errno)`
- `safeStrlen($str)`

