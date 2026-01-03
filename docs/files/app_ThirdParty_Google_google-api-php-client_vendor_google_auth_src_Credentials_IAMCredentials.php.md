# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\IAMCredentials.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\IAMCredentials.php`
- Type: PHP
- Size: 2465 bytes

## Summary (from docblocks)

Authenticates requests using IAM credentials.

@var string

@var string

@param $selector string the IAM selector
@param $token string the IAM token

export a callback function which updates runtime metadata.
@return array updateMetadata function

Updates metadata with the appropriate header metadata.
@param array $metadata metadata hashmap
@param string $unusedAuthUri optional auth uri
@param callable $httpHandler callback which delivers psr7 request
       Note: this param is unused here, only included here for
       consistency with other credentials class
@return array updated metadata hashmap

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Credentials\IAMCredentials.php`

**Classes**:
- `Google\Auth\Credentials\IAMCredentials`

**Functions/Methods**:
- `__construct($selector, $token)`
- `getUpdateMetadataFunc()`
- `updateMetadata($metadata,
        $unusedAuthUri = null,
        callable $httpHandler = null)`

