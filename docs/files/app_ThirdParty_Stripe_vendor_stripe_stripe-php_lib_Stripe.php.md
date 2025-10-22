# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Stripe.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Stripe.php`
- Type: PHP
- Size: 7244 bytes

## Summary (from docblocks)

Class Stripe.

@var string The Stripe API key to be used for requests.

@var string The Stripe client_id to be used for Connect requests.

@var string The base URL for the Stripe API.

@var string The base URL for the OAuth API.

@var string The base URL for the Stripe API uploads endpoint.

@var null|string The version of the Stripe API to use for requests.

@var null|string The account ID for connected accounts requests.

@var string Path to the CA bundle used to verify SSL certificates

@var bool Defaults to true.

@var array The application's information (name, version, URL)

@var null|Util\LoggerInterface the logger to which the library will
  produce messages

@var int Maximum number of request retries

@var bool Whether client telemetry is enabled. Defaults to true.

@var float Maximum delay between retries, in seconds

@var float Maximum delay between retries, in seconds, that will be respected from the Stripe API

@var float Initial delay between retries, in seconds

@return string the API key used for requests

@return string the client_id used for Connect requests

@return Util\LoggerInterface the logger to which the library will
  produce messages

@param \Psr\Log\LoggerInterface|Util\LoggerInterface $logger the logger to which the library
  will produce messages

Sets the API key to be used for requests.
@param string $apiKey

Sets the client_id to be used for Connect requests.
@param string $clientId

@return string The API version used for requests. null if we're using the
   latest version.

@param string $apiVersion the API version to use for requests

@return string

@return string

@param string $caBundlePath

@return bool

@param bool $verify

@return null|string The Stripe account ID for connected account
  requests

@param string $accountId the Stripe account ID to set for connected
  account requests

@return null|array The application's information

@param string $appName The application's name
@param null|string $appVersion The application's version
@param null|string $appUrl The application's URL
@param null|string $appPartnerId The application's partner ID

@return int Maximum number of request retries

@param int $maxNetworkRetries Maximum number of request retries

@return float Maximum delay between retries, in seconds

@return float Maximum delay between retries, in seconds, that will be respected from the Stripe API

@return float Initial delay between retries, in seconds

@return bool Whether client telemetry is enabled

@param bool $enableTelemetry Enables client telemetry.
Client telemetry enables timing and request metrics to be sent back to Stripe as an HTTP Header
with the current request. This enables Stripe to do latency and metrics analysis without adding extra
overhead (such as extra network calls) on the client.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Stripe.php`

**Classes**:
- `Stripe\Stripe`

**Functions/Methods**:
- `getApiKey()`
- `getClientId()`
- `getLogger()`
- `setLogger($logger)`
- `setApiKey($apiKey)`
- `setClientId($clientId)`
- `getApiVersion()`
- `setApiVersion($apiVersion)`
- `getDefaultCABundlePath()`
- `getCABundlePath()`
- `setCABundlePath($caBundlePath)`
- `getVerifySslCerts()`
- `setVerifySslCerts($verify)`
- `getAccountId()`
- `setAccountId($accountId)`
- `getAppInfo()`
- `setAppInfo($appName, $appVersion = null, $appUrl = null, $appPartnerId = null)`
- `getMaxNetworkRetries()`
- `setMaxNetworkRetries($maxNetworkRetries)`
- `getMaxNetworkRetryDelay()`
- `getMaxRetryAfter()`
- `getInitialNetworkRetryDelay()`
- `getEnableTelemetry()`
- `setEnableTelemetry($enableTelemetry)`

