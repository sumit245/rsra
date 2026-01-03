# app\ThirdParty\Google\google-api-php-client\src\Google\Client.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Client.php`
- Type: PHP
- Size: 31935 bytes

## Summary (from docblocks)

The Google API Client
https://github.com/google/google-api-php-client

@var Google\Auth\OAuth2 $auth

@var GuzzleHttp\ClientInterface $http

@var Psr\Cache\CacheItemPoolInterface $cache

@var array access token

@var array $config

@var Psr\Log\LoggerInterface $logger

@var boolean $deferExecution

@var array $scopes

Construct the Google Client.
@param array $config

Get a string containing the version of the library.
@return string

For backwards compatibility
alias for fetchAccessTokenWithAuthCode
@param $code string code from accounts.google.com
@return array access token
@deprecated

Attempt to exchange a code for an valid authentication token.
Helper wrapped around the OAuth 2.0 implementation.
@param $code string code from accounts.google.com
@return array access token

For backwards compatibility
alias for fetchAccessTokenWithAssertion
@return array access token
@deprecated

Fetches a fresh access token with a given assertion token.
@param ClientInterface $authHttp optional.
@return array access token

For backwards compatibility
alias for fetchAccessTokenWithRefreshToken
@param string $refreshToken
@return array access token

Fetches a fresh OAuth 2.0 access token with the given refresh token.
@param string $refreshToken
@return array access token

Create a URL to obtain user authorization.
The authorization endpoint allows the user to first
authenticate, and then grant/deny the access request.
@param string|array $scope The scope is expressed as an array or list of space-delimited strings.
@return string

Adds auth listeners to the HTTP client based on the credentials
set in the Google API Client object
@param GuzzleHttp\ClientInterface $http the http client object.
@return GuzzleHttp\ClientInterface the http client object

Set the configuration to use application default credentials for
authentication
@see https://developers.google.com/identity/protocols/application-default-credentials
@param boolean $useAppCreds

To prevent useApplicationDefaultCredentials from inappropriately being
called in a conditional
@see https://developers.google.com/identity/protocols/application-default-credentials

@param string|array $token
@throws InvalidArgumentException

@return string|null

Returns if the access_token is expired.
@return bool Returns True if the access_token is expired.

@deprecated See UPGRADING.md for more information

@deprecated See UPGRADING.md for more information

Set the OAuth 2.0 Client ID.
@param string $clientId

Set the OAuth 2.0 Client Secret.
@param string $clientSecret

Set the OAuth 2.0 Redirect URI.
@param string $redirectUri

Set OAuth 2.0 "state" parameter to achieve per-request customization.
@see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-3.1.2.2
@param string $state

@param string $accessType Possible values for access_type include:
 {@code "offline"} to request offline access from the user.
 {@code "online"} to request online access from the user.

@param string $approvalPrompt Possible values for approval_prompt include:
 {@code "force"} to force the approval UI to appear.
 {@code "auto"} to request auto-approval when possible. (This is the default value)

Set the login hint, email address or sub id.
@param string $loginHint

Set the application name, this is included in the User-Agent HTTP header.
@param string $applicationName

If 'plus.login' is included in the list of requested scopes, you can use
this method to define types of app activities that your app will write.
You can find a list of available types here:
@link https://developers.google.com/+/api/moment-types
@param array $requestVisibleActions Array of app activity types

Set the developer key to use, these are obtained through the API Console.
@see http://code.google.com/apis/console-help/#generatingdevkeys
@param string $developerKey

Set the hd (hosted domain) parameter streamlines the login process for
Google Apps hosted accounts. By including the domain of the user, you
restrict sign-in to accounts at that domain.
@param $hd string - the domain to use.

Set the prompt hint. Valid values are none, consent and select_account.
If no value is specified and the user has not previously authorized
access, then the user is shown a consent screen.
@param $prompt string

openid.realm is a parameter from the OpenID 2.0 protocol, not from OAuth
2.0. It is used in OpenID 2.0 requests to signify the URL-space for which
an authentication request is valid.
@param $realm string - the URL-space to use.

If this is provided with the value true, and the authorization request is
granted, the authorization will include any previous authorizations
granted to this user/application combination for other scopes.
@param $include boolean - the URL-space to use.

sets function to be called when an access token is fetched
@param callable $tokenCallback - function ($cacheKey, $accessToken)

Revoke an OAuth2 access token or refresh token. This method will revoke the current access
token, if a token isn't provided.
@param string|null $token The token (access token or a refresh token) that should be revoked.
@return boolean Returns True if the revocation was successful, otherwise False.

Verify an id_token. This method will verify the current id_token, if one
isn't provided.
@throws LogicException
@param string|null $idToken The token (id_token) that should be verified.
@return array|false Returns the token payload as an array if the verification was
successful, false otherwise.

Set the scopes to be requested. Must be called before createAuthUrl().
Will remove any previously configured scopes.
@param array $scopes, ie: array('https://www.googleapis.com/auth/plus.login',
'https://www.googleapis.com/auth/moderator')

This functions adds a scope to be requested as part of the OAuth2.0 flow.
Will append any scopes not previously requested to the scope parameter.
A single string will be treated as a scope to request. An array of strings
will each be appended.
@param $scope_or_scopes string|array e.g. "profile"

Returns the list of scopes requested by the client
@return array the list of scopes

@return string|null
@visible For Testing

Helper method to execute deferred HTTP requests.
@param $request Psr\Http\Message\RequestInterface|Google_Http_Batch
@throws Google_Exception
@return object of the type of the expected class or Psr\Http\Message\ResponseInterface.

Declare whether batch calls should be used. This may increase throughput
by making multiple requests in one connection.
@param boolean $useBatch True if the batch support should
be enabled. Defaults to False.

Are we running in Google AppEngine?
return bool

For backwards compatibility
alias for setAuthConfig
@param string $file the configuration file
@throws Google_Exception
@deprecated

Set the auth config from new or deprecated JSON config.
This structure should match the file downloaded from
the "Download JSON" button on in the Google Developer
Console.
@param string|array $config the configuration json
@throws Google_Exception

Use when the service account has been delegated domain wide access.
@param string $subject an email address account to impersonate

Declare whether making API calls should make the call immediately, or
return a request which can be called with ->execute();
@param boolean $defer True if calls should not be executed right away.

Whether or not to return raw requests
@return boolean

@return Google\Auth\OAuth2 implementation

create a default google auth object

Set the Cache object
@param Psr\Cache\CacheItemPoolInterface $cache

@return Psr\Cache\CacheItemPoolInterface Cache implementation

@param array $cacheConfig

Set the Logger object
@param Psr\Log\LoggerInterface $logger

@return Psr\Log\LoggerInterface implementation

Set the Http Client object
@param GuzzleHttp\ClientInterface $http

@return GuzzleHttp\ClientInterface implementation

## References

**Database Tables (inferred)**
- `the`
- `accounts`
- `inappropriately`
- `OAuth`
- `new`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Client.php`

**Classes**:
- `Google_Client`
- `used`
- `or`

**Functions/Methods**:
- `__construct(array $config = array()`
- `getLibraryVersion()`
- `authenticate($code)`
- `fetchAccessTokenWithAuthCode($code)`
- `refreshTokenWithAssertion()`
- `fetchAccessTokenWithAssertion(ClientInterface $authHttp = null)`
- `refreshToken($refreshToken)`
- `fetchAccessTokenWithRefreshToken($refreshToken = null)`
- `createAuthUrl($scope = null)`
- `authorize(ClientInterface $http = null)`
- `useApplicationDefaultCredentials($useAppCreds = true)`
- `isUsingApplicationDefaultCredentials()`
- `setAccessToken($token)`
- `getAccessToken()`
- `getRefreshToken()`
- `isAccessTokenExpired()`
- `getAuth()`
- `setAuth($auth)`
- `setClientId($clientId)`
- `getClientId()`
- `setClientSecret($clientSecret)`
- `getClientSecret()`
- `setRedirectUri($redirectUri)`
- `getRedirectUri()`
- `setState($state)`
- `setAccessType($accessType)`
- `setApprovalPrompt($approvalPrompt)`
- `setLoginHint($loginHint)`
- `setApplicationName($applicationName)`
- `setRequestVisibleActions($requestVisibleActions)`
- `setDeveloperKey($developerKey)`
- `setHostedDomain($hd)`
- `setPrompt($prompt)`
- `setOpenidRealm($realm)`
- `setIncludeGrantedScopes($include)`
- `setTokenCallback(callable $tokenCallback)`
- `revokeToken($token = null)`
- `verifyIdToken($idToken = null)`
- `setScopes($scopes)`
- `addScope($scope_or_scopes)`
- `getScopes()`
- `prepareScopes()`
- `execute(RequestInterface $request, $expectedClass = null)`
- `setUseBatch($useBatch)`
- `isAppEngine()`
- `setConfig($name, $value)`
- `getConfig($name, $default = null)`
- `setAuthConfigFile($file)`
- `setAuthConfig($config)`
- `setSubject($subject)`
- `setDefer($defer)`
- `shouldDefer()`
- `getOAuth2Service()`
- `createOAuth2Service()`
- `setCache(CacheItemPoolInterface $cache)`
- `getCache()`
- `setCacheConfig(array $cacheConfig)`
- `setLogger(LoggerInterface $logger)`
- `getLogger()`
- `createDefaultLogger()`
- `createDefaultCache()`
- `setHttpClient(ClientInterface $http)`
- `getHttpClient()`
- `createDefaultHttpClient()`
- `createApplicationDefaultCredentials()`
- `getAuthHandler()`
- `createUserRefreshCredentials($scope, $refreshToken)`

