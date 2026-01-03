# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\OAuth2Test.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\OAuth2Test.php`
- Type: PHP
- Size: 29165 bytes

## Summary (from docblocks)

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException InvalidArgumentException

@expectedException DomainException

@expectedException DomainException



@expectedException DomainException

@expectedException DomainException

@expectedException DomainException

@expectedException DomainException

@expectedException GuzzleHttp\Exception\ClientException

@expectedException GuzzleHttp\Exception\ServerException

@expectedException Exception
@expectedExceptionMessage Invalid JSON response

@expectedException UnexpectedValueException

@expectedException DomainException

@expectedException DomainException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\tests\OAuth2Test.php`

**Classes**:
- `Google\Auth\Tests\OAuth2AuthorizationUriTest extends TestCase`
- `Google\Auth\Tests\OAuth2GrantTypeTest extends TestCase`
- `Google\Auth\Tests\OAuth2GetCacheKeyTest extends TestCase`
- `Google\Auth\Tests\OAuth2TimingTest extends TestCase`
- `Google\Auth\Tests\OAuth2GeneralTest extends TestCase`
- `Google\Auth\Tests\OAuth2JwtTest extends TestCase`
- `Google\Auth\Tests\OAuth2GenerateAccessTokenRequestTest extends TestCase`
- `Google\Auth\Tests\OAuth2FetchAuthTokenTest extends TestCase`
- `Google\Auth\Tests\OAuth2VerifyIdTokenTest extends TestCase`

**Functions/Methods**:
- `testIsNullIfAuthorizationUriIsNull()`
- `testRequiresTheClientId()`
- `testRequiresTheRedirectUri()`
- `testCannotHavePromptAndApprovalPrompt()`
- `testCannotHaveInsecureAuthorizationUri()`
- `testCannotHaveRelativeRedirectUri()`
- `testHasDefaultXXXTypeParams()`
- `testCanBeUrlObject()`
- `testCanOverrideParams()`
- `testIncludesTheScope()`
- `testRedirectUriPostmessageIsAllowed()`
- `testReturnsNullIfCannotBeInferred()`
- `testInfersAuthorizationCode()`
- `testInfersRefreshToken()`
- `testInfersPassword()`
- `testInfersJwtBearer()`
- `testSetsKnownTypes()`
- `testSetsUrlAsGrantType()`
- `testIsNullWithNoScopes()`
- `testIsScopeIfSingleScope()`
- `testIsAllScopesWhenScopeIsArray()`
- `testIssuedAtDefaultsToNull()`
- `testExpiresAtDefaultsToNull()`
- `testExpiresInDefaultsToNull()`
- `testSettingExpiresInSetsIssuedAt()`
- `testSettingExpiresInSetsExpireAt()`
- `testIsNotExpiredByDefault()`
- `testIsNotExpiredIfExpiresAtIsOld()`
- `testFailsOnUnknownSigningAlgorithm()`
- `testAllowsKnownSigningAlgorithms()`
- `testFailsOnRelativeRedirectUri()`
- `testAllowsUrnRedirectUri()`
- `testFailsWithMissingAudience()`
- `testFailsWithMissingIssuer()`
- `testCanHaveNoScope()`
- `testFailsWithMissingSigningKey()`
- `testFailsWithMissingSigningAlgorithm()`
- `testCanHS256EncodeAValidPayload()`
- `testCanRS256EncodeAValidPayload()`
- `testCanHaveAdditionalClaims()`
- `jwtDecode()`
- `testFailsIfNoTokenCredentialUri()`
- `testFailsIfAuthorizationCodeIsMissing()`
- `testGeneratesAuthorizationCodeRequests()`
- `testGeneratesPasswordRequests()`
- `testGeneratesRefreshTokenRequests()`
- `testClientSecretAddedIfSetForAuthorizationCodeRequests()`
- `testClientSecretAddedIfSetForRefreshTokenRequests()`
- `testClientSecretAddedIfSetForPasswordRequests()`
- `testGeneratesAssertionRequests()`
- `testGeneratesExtendedRequests()`
- `testFailsOn400()`
- `testFailsOn500()`
- `testFailsOnNoContentTypeIfResponseIsNotJSON()`
- `testFetchesJsonResponseOnNoContentTypeOK()`
- `testFetchesFromFormEncodedResponseOK()`
- `testUpdatesTokenFieldsOnFetch()`
- `testUpdatesTokenFieldsOnFetchMissingRefreshToken()`
- `setUp()`
- `testFailsIfIdTokenIsInvalid()`
- `testFailsIfAudienceIsMissing()`
- `testFailsIfAudienceIsWrong()`
- `testShouldReturnAValidIdToken()`
- `jwtEncode()`

