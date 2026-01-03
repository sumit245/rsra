# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\OAuth.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\OAuth.php`
- Type: PHP
- Size: 3393 bytes

## Summary (from docblocks)

Generates a URL to Stripe's OAuth form.
@param null|array $params
@param null|array $opts
@return string the URL to Stripe's OAuth form

Use an authoriztion code to connect an account to your platform and
fetch the user's credentials.
@param null|array $params
@param null|array $opts
@throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
@return StripeObject object containing the response from the API

Disconnects an account from your platform.
@param null|array $params
@param null|array $opts
@throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
@return StripeObject object containing the response from the API

## References

**Database Tables (inferred)**
- `the`
- `your`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\OAuth.php`

**Classes**:
- `Stripe\OAuth`

**Functions/Methods**:
- `authorizeUrl($params = null, $opts = null)`
- `token($params = null, $opts = null)`
- `deauthorize($params = null, $opts = null)`
- `_getClientId($params = null)`

