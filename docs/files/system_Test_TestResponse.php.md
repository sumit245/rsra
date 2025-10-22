# system\Test\TestResponse.php

- Path: `system\Test\TestResponse.php`
- Type: PHP
- Size: 13833 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Test Response Class
Consolidated response processing
for test results.
@no-final
@internal

The request.
@var RequestInterface|null

The response.
@var ResponseInterface

DOM for the body.
@var DOMParser

Stores or the Response and parses the body in the DOM.

Sets the request.
@return $this

Sets the Response and updates the DOM.
@return $this

Request accessor.
@return RequestInterface|null

Response accessor.
@return ResponseInterface

Boils down the possible responses into a boolean valid/not-valid
response type.

Asserts that the status is a specific value.
@throws Exception

Asserts that the Response is considered OK.
@throws Exception

Asserts that the Response is considered OK.
@throws Exception

Returns whether or not the Response was a redirect or RedirectResponse

Assert that the given response was a redirect.
@throws Exception

Assert that a given response was a redirect
and it was redirect to a specific URI.
@throws Exception

Assert that the given response was not a redirect.
@throws Exception

Returns the URL set for redirection.

Asserts that an SESSION key has been set and, optionally, test it's value.
@param mixed $value
@throws Exception

Asserts the session is missing $key.
@throws Exception

Asserts that the Response contains a specific header.
@param string|null $value
@throws Exception

Asserts the Response headers does not contain the specified header.
@throws Exception

Asserts that the response has the specified cookie.
@param string|null $value
@throws Exception

Assert the Response does not have the specified cookie set.

Asserts that a cookie exists and has an expired time.
@throws Exception

Returns the response's body as JSON
@return false|mixed

Test that the response contains a matching JSON fragment.
@throws Exception

Asserts that the JSON exactly matches the passed in data.
If the value being passed in is a string, it must be a json_encoded string.
@param array|string $test
@throws Exception

Returns the response' body as XML
@return mixed|string

Assert that the desired text can be found in the result body.
@throws Exception

Asserts that we do not see the specified text.
@throws Exception

Assert that we see an element selected via a CSS selector.
@throws Exception

Assert that we do not see an element selected via a CSS selector.
@throws Exception

Assert that we see a link with the matching text and/or class.
@throws Exception

Assert that we see an input with name/value.
@throws Exception

Forward any unrecognized method calls to our DOMParser instance.
@param string $function Method name
@param mixed  $params   Any method parameters
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\TestResponse.php`

**Classes**:
- `CodeIgniter\Test\TestResponse extends TestCase`

**Functions/Methods**:
- `__construct(ResponseInterface $response)`
- `setRequest(RequestInterface $request)`
- `setResponse(ResponseInterface $response)`
- `request()`
- `response()`
- `isOK()`
- `assertStatus(int $code)`
- `assertOK()`
- `assertNotOK()`
- `isRedirect()`
- `assertRedirect()`
- `assertRedirectTo(string $uri)`
- `assertNotRedirect()`
- `getRedirectUrl()`
- `assertSessionHas(string $key, $value = null)`
- `assertSessionMissing(string $key)`
- `assertHeader(string $key, $value = null)`
- `assertHeaderMissing(string $key)`
- `assertCookie(string $key, $value = null, string $prefix = '')`
- `assertCookieMissing(string $key)`
- `assertCookieExpired(string $key, string $prefix = '')`
- `getJSON()`
- `assertJSONFragment(array $fragment, bool $strict = false)`
- `assertJSONExact($test)`
- `getXML()`
- `assertSee(?string $search = null, ?string $element = null)`
- `assertDontSee(?string $search = null, ?string $element = null)`
- `assertSeeElement(string $search)`
- `assertDontSeeElement(string $search)`
- `assertSeeLink(string $text, ?string $details = null)`
- `assertSeeInField(string $field, ?string $value = null)`
- `__call($function, $params)`

