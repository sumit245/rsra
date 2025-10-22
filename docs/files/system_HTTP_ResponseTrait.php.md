# system\HTTP\ResponseTrait.php

- Path: `system\HTTP\ResponseTrait.php`
- Type: PHP
- Size: 21700 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Response Trait
Additional methods to make a PSR-7 Response class
compliant with the framework's own ResponseInterface.
@property array $statusCodes
@see https://github.com/php-fig/http-message/blob/master/src/ResponseInterface.php

Whether Content Security Policy is being enforced.
@var bool
@deprecated Use $this->CSP->enabled() instead.

Content security policy handler
@var ContentSecurityPolicy

CookieStore instance.
@var CookieStore

Set a cookie name prefix if you need to avoid collisions
@var string
@deprecated Use the dedicated Cookie class instead.

Set to .your-domain.com for site-wide cookies
@var string
@deprecated Use the dedicated Cookie class instead.

Typically will be a forward slash
@var string
@deprecated Use the dedicated Cookie class instead.

Cookie will only be set if a secure HTTPS connection exists.
@var bool
@deprecated Use the dedicated Cookie class instead.

Cookie will only be accessible via HTTP(S) (no javascript)
@var bool
@deprecated Use the dedicated Cookie class instead.

Cookie SameSite setting
@var string
@deprecated Use the dedicated Cookie class instead.

Stores all cookies that were set in the response.
@var array
@deprecated Use the dedicated Cookie class instead.

Type of format the body is in.
Valid: html, json, xml
@var string

Return an instance with the specified status code and, optionally, reason phrase.
If no reason phrase is specified, will default recommended reason phrase for
the response's status code.
@see http://tools.ietf.org/html/rfc7231#section-6
@see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
@param int    $code   The 3-digit integer result code to set.
@param string $reason The reason phrase to use with the
                      provided status code; if none is provided, will
                      default to the IANA name.
@throws HTTPException For invalid status code arguments.
@return $this

Sets the date header
@return Response

Set the Link Header
@see http://tools.ietf.org/html/rfc5988
@return Response
@todo Recommend moving to Pager

Sets the Content Type header for this response with the mime type
and, optionally, the charset.
@return Response

Converts the $body into JSON and sets the Content Type header.
@param array|string $body
@return $this

Returns the current body, converted to JSON is it isn't already.
@throws InvalidArgumentException If the body property is not array.
@return mixed|string

Converts $body into XML, and sets the correct Content-Type.
@param array|string $body
@return $this

Retrieves the current body into XML and returns it.
@throws InvalidArgumentException If the body property is not array.
@return mixed|string

Handles conversion of the of the data into the appropriate format,
and sets the correct Content-Type header for our response.
@param array|string $body
@param string       $format Valid: json, xml
@throws InvalidArgumentException If the body property is not string or array.
@return mixed

Sets the appropriate headers to ensure this response
is not cached by the browsers.
@return Response
@todo Recommend researching these directives, might need: 'private', 'no-transform', 'no-store', 'must-revalidate'
@see DownloadResponse::noCache()

A shortcut method that allows the developer to set all of the
cache-control headers in one method call.
The options array is used to provide the cache-control directives
for the header. It might look something like:
     $options = [
         'max-age'  => 300,
         's-maxage' => 900
         'etag'     => 'abcde',
     ];
Typical options are:
 - etag
 - last-modified
 - max-age
 - s-maxage
 - private
 - public
 - must-revalidate
 - proxy-revalidate
 - no-transform
@return Response

Sets the Last-Modified date header.
$date can be either a string representation of the date or,
preferably, an instance of DateTime.
@param DateTime|string $date
@return Response

Sends the output to the browser.
@return Response

Sends the headers of this HTTP response to the browser.
@return Response

Sends the Body of the message to the browser.
@return Response

Perform a redirect to a new URL, in two flavors: header or location.
@param string $uri  The URI to redirect to
@param int    $code The type of redirection, defaults to 302
@throws HTTPException For invalid status code.
@return $this

Set a cookie
Accepts an arbitrary number of binds (up to 7) or an associative
array in the first parameter containing all the values.
@param array|Cookie|string $name     Cookie name / array containing binds / Cookie object
@param string              $value    Cookie value
@param string              $expire   Cookie expiration time in seconds
@param string              $domain   Cookie domain (e.g.: '.yourdomain.com')
@param string              $path     Cookie path (default: '/')
@param string              $prefix   Cookie name prefix ('': the default prefix)
@param bool                $secure   Whether to only transfer cookies via SSL
@param bool                $httponly Whether only make the cookie accessible via HTTP (no javascript)
@param string|null         $samesite
@return $this

Returns the `CookieStore` instance.
@return CookieStore

Checks to see if the Response has a specified cookie or not.

Returns the cookie
@param string $prefix Cookie prefix.
                      '': the default prefix
@return Cookie|Cookie[]|null

Sets a cookie to be deleted when the response is sent.
@return $this

Returns all cookies currently set.
@return Cookie[]

Actually sets the cookies.

@var IncomingRequest $request

Extracted call to `setrawcookie()` in order to run unit tests on it.
@codeCoverageIgnore

Extracted call to `setcookie()` in order to run unit tests on it.
@codeCoverageIgnore

Force a download.
Generates the headers that force a download to happen. And
sends the file to the browser.
@param string      $filename The path to the file to send
@param string|null $data     The data to be downloaded
@param bool        $setMime  Whether to try and send the actual MIME type
@return DownloadResponse|null

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\ResponseTrait.php`

**Classes**:
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`

**Functions/Methods**:
- `setStatusCode(int $code, string $reason = '')`
- `setDate(DateTime $date)`
- `setLink(PagerInterface $pager)`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `setJSON($body, bool $unencoded = false)`
- `getJSON()`
- `setXML($body)`
- `getXML()`
- `formatBody($body, string $format)`
- `noCache()`
- `setCache(array $options = [])`
- `setLastModified($date)`
- `send()`
- `sendHeaders()`
- `sendBody()`
- `redirect(string $uri, string $method = 'auto', ?int $code = null)`
- `setCookie($name,
        $value = '',
        $expire = '',
        $domain = '',
        $path = '/',
        $prefix = '',
        $secure = false,
        $httponly = false,
        $samesite = null)`
- `getCookieStore()`
- `hasCookie(string $name, ?string $value = null, string $prefix = '')`
- `getCookie(?string $name = null, string $prefix = '')`
- `deleteCookie(string $name = '', string $domain = '', string $path = '/', string $prefix = '')`
- `getCookies()`
- `sendCookies()`
- `dispatchCookies()`
- `doSetRawCookie(string $name, string $value, array $options)`
- `doSetCookie(string $name, string $value, array $options)`
- `download(string $filename = '', $data = '', bool $setMime = false)`

