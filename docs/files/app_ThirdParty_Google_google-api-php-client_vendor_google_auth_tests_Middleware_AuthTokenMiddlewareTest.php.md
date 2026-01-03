# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\Middleware\AuthTokenMiddlewareTest.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\Middleware\AuthTokenMiddlewareTest.php`
- Type: PHP
- Size: 11892 bytes

## Summary (from docblocks)

@dataProvider provideShouldNotifyTokenCallback

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\Middleware\AuthTokenMiddlewareTest.php`

**Classes**:
- `Google\Auth\Tests\AuthTokenMiddlewareTest extends BaseTest`
- `Google\Auth\Tests\MiddlewareCallback`

**Functions/Methods**:
- `setUp()`
- `testOnlyTouchesWhenAuthConfigScoped()`
- `testAddsTheTokenAsAnAuthorizationHeader()`
- `testDoesNotAddAnAuthorizationHeaderOnNoAccessToken()`
- `testUsesCachedAuthToken()`
- `testGetsCachedAuthTokenUsingCacheOptions()`
- `testShouldSaveValueInCacheWithSpecifiedPrefix()`
- `testShouldNotifyTokenCallback(callable $tokenCallback)`
- `provideShouldNotifyTokenCallback()`
- `__invoke($key, $value)`
- `methodInvoke($key, $value)`
- `staticInvoke($key, $value)`
- `MiddlewareCallbackFunction($key, $value)`

