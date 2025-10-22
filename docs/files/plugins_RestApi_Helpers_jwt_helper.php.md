# plugins\RestApi\Helpers\jwt_helper.php

- Path: `plugins\RestApi\Helpers\jwt_helper.php`
- Type: PHP
- Size: 3399 bytes

## Summary (from docblocks)

[Decode JWT token and get original data]
@param string $encodedToken   [token]
@param string $jwt_secret_key [purchase_code]
@return  array [decoded information]

[generate JWT token]
@param array  $data           [payload data]

Request All Headers

Authorization Header Exists

Request All Headers

Authorization Header Exists

Token Decode

Check Token Time Valid

All Validation False Return Data

Token Header Check
@param: request headers

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\Helpers\jwt_helper.php`

**Functions/Methods**:
- `DecodeJWTtoken(string $encodedToken, string $jwt_secret_key)`
- `EncodeJWTtoken($data = null)`
- `get_token()`
- `validateToken()`
- `tokenIsExist($headers)`
- `token($headers)`

