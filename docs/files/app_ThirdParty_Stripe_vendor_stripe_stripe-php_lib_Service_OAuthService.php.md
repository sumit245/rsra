# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OAuthService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OAuthService.php`
- Type: PHP
- Size: 4859 bytes

## Summary (from docblocks)

Sends a request to Stripe's Connect API.
@param string $method the HTTP method
@param string $path the path of the request
@param array $params the parameters of the request
@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
@return \Stripe\StripeObject the object returned by Stripe's Connect API

Generates a URL to Stripe's OAuth form.
@param null|array $params
@param null|array $opts
@return string the URL to Stripe's OAuth form

Use an authoriztion code to connect an account to your platform and
fetch the user's credentials.
@param null|array $params
@param null|array $opts
@throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
@return \Stripe\StripeObject object containing the response from the API

Disconnects an account from your platform.
@param null|array $params
@param null|array $opts
@throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
@return \Stripe\StripeObject object containing the response from the API

@param array|\Stripe\Util\RequestOptions $opts the special modifiers of the request
@throws \Stripe\Exception\InvalidArgumentException
@return \Stripe\Util\RequestOptions

@param \Stripe\Util\RequestOptions $opts
@return string

## References

**Database Tables (inferred)**
- `the`
- `your`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\OAuthService.php`

**Classes**:
- `Stripe\Service\OAuthService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `requestConnect($method, $path, $params, $opts)`
- `authorizeUrl($params = null, $opts = null)`
- `token($params = null, $opts = null)`
- `deauthorize($params = null, $opts = null)`
- `_getClientId($params = null)`
- `_getClientSecret($params = null)`
- `_parseOpts($opts)`
- `_getBase($opts)`

