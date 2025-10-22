# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\OAuth2.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\OAuth2.php`
- Type: PHP
- Size: 34286 bytes

## Summary (from docblocks)

OAuth2 supports authentication by OAuth2 2-legged flows.
It primary supports
- service account authorization
- authorization where a user already has an access token

TODO: determine known methods from the keys of JWT::methods.

The well known grant types.
@var array

- authorizationUri
  The authorization server's HTTP endpoint capable of
  authenticating the end-user and obtaining authorization.
@var UriInterface

- tokenCredentialUri
  The authorization server's HTTP endpoint capable of issuing
  tokens and refreshing expired tokens.
@var UriInterface

The redirection URI used in the initial request.
@var string

A unique identifier issued to the client to identify itself to the
authorization server.
@var string

A shared symmetric secret issued by the authorization server, which is
used to authenticate the client.
@var string

The resource owner's username.
@var string

The resource owner's password.
@var string

The scope of the access request, expressed either as an Array or as a
space-delimited string.
@var string

An arbitrary string designed to allow the client to maintain state.
@var string

The authorization code issued to this client.
Only used by the authorization code access grant type.
@var string

The issuer ID when using assertion profile.
@var string

The target audience for assertions.
@var string

The target sub when issuing assertions.
@var string

The number of seconds assertions are valid for.
@var int

The signing key when using assertion profile.
@var string

The signing algorithm when using an assertion profile.
@var string

The refresh token associated with the access token to be refreshed.
@var string

The current access token.
@var string

The current ID token.
@var string

The lifetime in seconds of the current access token.
@var int

The expiration time of the access token as a number of seconds since the
unix epoch.
@var int

The issue time of the access token as a number of seconds since the unix
epoch.
@var int

The current grant type.
@var string

When using an extension grant type, this is the set of parameters used by
that extension.

When using the toJwt function, these claims will be added to the JWT
payload.

Create a new OAuthCredentials.
The configuration array accepts various options
- authorizationUri
  The authorization server's HTTP endpoint capable of
  authenticating the end-user and obtaining authorization.
- tokenCredentialUri
  The authorization server's HTTP endpoint capable of issuing
  tokens and refreshing expired tokens.
- clientId
  A unique identifier issued to the client to identify itself to the
  authorization server.
- clientSecret
  A shared symmetric secret issued by the authorization server,
  which is used to authenticate the client.
- scope
  The scope of the access request, expressed either as an Array
  or as a space-delimited String.
- state
  An arbitrary string designed to allow the client to maintain state.
- redirectUri
  The redirection URI used in the initial request.
- username
  The resource owner's username.
- password
  The resource owner's password.
- issuer
  Issuer ID when using assertion profile
- audience
  Target audience for assertions
- expiry
  Number of seconds assertions are valid for
- signingKey
  Signing key when using assertion profile
- refreshToken
  The refresh token associated with the access token
  to be refreshed.
- accessToken
  The current access token for this client.
- idToken
  The current ID token for this client.
- extensionParams
  When using an extension grant type, this is the set of parameters used
  by that extension.
@param array $config Configuration array

Verifies the idToken if present.
- if none is present, return null
- if present, but invalid, raises DomainException.
- otherwise returns the payload in the idtoken as a PHP object.
if $publicKey is null, the key is decoded without being verified.
@param string $publicKey The public key to use to authenticate the token
@param array $allowed_algs List of supported verification algorithms
@return null|object

Obtains the encoded jwt from the instance data.
@param array $config array optional configuration parameters
@return string

Generates a request for token credentials.
@return RequestInterface the authorization Url.

Fetches the auth tokens based on the current state.
@param callable $httpHandler callback which delivers psr7 request
@return array the response

Obtains a key that can used to cache the results of #fetchAuthToken.
The key is derived from the scopes.
@return string a key that may be used to cache the auth token.

Parses the fetched tokens.
@param ResponseInterface $resp the response.
@return array the tokens parsed from the response body.
@throws \Exception

Updates an OAuth 2.0 client.
@example
  client.updateToken([
    'refresh_token' => 'n4E9O119d',
    'access_token' => 'FJQbwq9',
    'expires_in' => 3600
  ])
@param array $config
 The configuration parameters related to the token.
 - refresh_token
   The refresh token associated with the access token
   to be refreshed.
 - access_token
   The current access token for this client.
 - id_token
   The current ID token for this client.
 - expires_in
   The time in seconds until access token expiration.
 - expires_at
   The time as an integer number of seconds since the Epoch
 - issued_at
   The timestamp that the token was issued at.

Builds the authorization Uri that the user should be redirected to.
@param array $config configuration options that customize the return url
@return UriInterface the authorization Url.
@throws InvalidArgumentException

Sets the authorization server's HTTP endpoint capable of authenticating
the end-user and obtaining authorization.
@param string $uri

Gets the authorization server's HTTP endpoint capable of authenticating
the end-user and obtaining authorization.
@return UriInterface

Gets the authorization server's HTTP endpoint capable of issuing tokens
and refreshing expired tokens.
@return string

Sets the authorization server's HTTP endpoint capable of issuing tokens
and refreshing expired tokens.
@param string $uri

Gets the redirection URI used in the initial request.
@return string

Sets the redirection URI used in the initial request.
@param string $uri

Gets the scope of the access requests as a space-delimited String.
@return string

Sets the scope of the access request, expressed either as an Array or as
a space-delimited String.
@param string|array $scope
@throws InvalidArgumentException

Gets the current grant type.
@return string

Sets the current grant type.
@param $grantType
@throws InvalidArgumentException

Gets an arbitrary string designed to allow the client to maintain state.
@return string

Sets an arbitrary string designed to allow the client to maintain state.
@param string $state

Gets the authorization code issued to this client.

Sets the authorization code issued to this client.
@param string $code

Gets the resource owner's username.

Sets the resource owner's username.
@param string $username

Gets the resource owner's password.

Sets the resource owner's password.
@param $password

Sets a unique identifier issued to the client to identify itself to the
authorization server.

Sets a unique identifier issued to the client to identify itself to the
authorization server.
@param $clientId

Gets a shared symmetric secret issued by the authorization server, which
is used to authenticate the client.

Sets a shared symmetric secret issued by the authorization server, which
is used to authenticate the client.
@param $clientSecret

Gets the Issuer ID when using assertion profile.

Sets the Issuer ID when using assertion profile.
@param string $issuer

Gets the target sub when issuing assertions.

Sets the target sub when issuing assertions.
@param string $sub

Gets the target audience when issuing assertions.

Sets the target audience when issuing assertions.
@param string $audience

Gets the signing key when using an assertion profile.

Sets the signing key when using an assertion profile.
@param string $signingKey

Gets the signing algorithm when using an assertion profile.
@return string

Sets the signing algorithm when using an assertion profile.
@param string $signingAlgorithm

Gets the set of parameters used by extension when using an extension
grant type.

Sets the set of parameters used by extension when using an extension
grant type.
@param $extensionParams

Gets the number of seconds assertions are valid for.

Sets the number of seconds assertions are valid for.
@param int $expiry

Gets the lifetime of the access token in seconds.

Sets the lifetime of the access token in seconds.
@param int $expiresIn

Gets the time the current access token expires at.
@return int

Returns true if the acccess token has expired.
@return bool

Sets the time the current access token expires at.
@param int $expiresAt

Gets the time the current access token was issued at.

Sets the time the current access token was issued at.
@param int $issuedAt

Gets the current access token.

Sets the current access token.
@param string $accessToken

Gets the current ID token.

Sets the current ID token.
@param $idToken

Gets the refresh token associated with the current access token.

Sets the refresh token associated with the current access token.
@param $refreshToken

Sets additional claims to be included in the JWT token
@param array $additionalClaims

Gets the additional claims to be included in the JWT token.
@return array

The expiration of the last received token.
@return array

@todo handle uri as array
@param string $uri
@return null|UriInterface

@param string $idToken
@param string|array|null $publicKey
@param array $allowedAlgs
@return object

Determines if the URI is absolute based on its scheme and host or path
(RFC 3986).
@param string $uri
@return bool

@param array $params
@return array

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\OAuth2.php`

**Classes**:
- `Google\Auth\OAuth2 implements FetchAuthTokenInterface`

**Functions/Methods**:
- `__construct(array $config)`
- `verifyIdToken($publicKey = null, $allowed_algs = array()`
- `toJwt(array $config = [])`
- `generateCredentialsRequest()`
- `fetchAuthToken(callable $httpHandler = null)`
- `getCacheKey()`
- `parseTokenResponse(ResponseInterface $resp)`
- `updateToken(array $config)`
- `buildFullAuthorizationUri(array $config = [])`
- `setAuthorizationUri($uri)`
- `getAuthorizationUri()`
- `getTokenCredentialUri()`
- `setTokenCredentialUri($uri)`
- `getRedirectUri()`
- `setRedirectUri($uri)`
- `getScope()`
- `setScope($scope)`
- `getGrantType()`
- `setGrantType($grantType)`
- `getState()`
- `setState($state)`
- `getCode()`
- `setCode($code)`
- `getUsername()`
- `setUsername($username)`
- `getPassword()`
- `setPassword($password)`
- `getClientId()`
- `setClientId($clientId)`
- `getClientSecret()`
- `setClientSecret($clientSecret)`
- `getIssuer()`
- `setIssuer($issuer)`
- `getSub()`
- `setSub($sub)`
- `getAudience()`
- `setAudience($audience)`
- `getSigningKey()`
- `setSigningKey($signingKey)`
- `getSigningAlgorithm()`
- `setSigningAlgorithm($signingAlgorithm)`
- `getExtensionParams()`
- `setExtensionParams($extensionParams)`
- `getExpiry()`
- `setExpiry($expiry)`
- `getExpiresIn()`
- `setExpiresIn($expiresIn)`
- `getExpiresAt()`
- `isExpired()`
- `setExpiresAt($expiresAt)`
- `getIssuedAt()`
- `setIssuedAt($issuedAt)`
- `getAccessToken()`
- `setAccessToken($accessToken)`
- `getIdToken()`
- `setIdToken($idToken)`
- `getRefreshToken()`
- `setRefreshToken($refreshToken)`
- `setAdditionalClaims(array $additionalClaims)`
- `getAdditionalClaims()`
- `getLastReceivedToken()`
- `coerceUri($uri)`
- `jwtDecode($idToken, $publicKey, $allowedAlgs)`
- `jwtEncode($assertion, $signingKey, $signingAlgorithm)`
- `isAbsoluteUri($uri)`
- `addClientCredentials(&$params)`

