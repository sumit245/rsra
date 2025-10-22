# system\HTTP\ResponseInterface.php

- Path: `system\HTTP\ResponseInterface.php`
- Type: PHP
- Size: 13210 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Representation of an outgoing, getServer-side response.
Most of these methods are supplied by ResponseTrait.
Per the HTTP specification, this interface includes properties for
each of the following:
- Protocol version
- Status code and reason phrase
- Headers
- Message body
@mixin RedirectResponse

Constants for status codes.
From  https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

Gets the response status code.
The status code is a 3-digit integer result code of the getServer's attempt
to understand and satisfy the request.
@return int Status code.
@deprecated To be replaced by the PSR-7 version (compatible)

Return an instance with the specified status code and, optionally, reason phrase.
If no reason phrase is specified, will default recommended reason phrase for
the response's status code.
@see http://tools.ietf.org/html/rfc7231#section-6
@see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
@param int    $code   The 3-digit integer result code to set.
@param string $reason The reason phrase to use with the
                      provided status code; if none is provided, will
                      default to the IANA name.
@throws InvalidArgumentException For invalid status code arguments.
@return self

Gets the response response phrase associated with the status code.
@see http://tools.ietf.org/html/rfc7231#section-6
@see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
@deprecated Use getReasonPhrase()

Sets the date header
@return ResponseInterface

Sets the Last-Modified date header.
$date can be either a string representation of the date or,
preferably, an instance of DateTime.
@param DateTime|string $date

Set the Link Header
@see http://tools.ietf.org/html/rfc5988
@return Response
@todo Recommend moving to Pager

Sets the Content Type header for this response with the mime type
and, optionally, the charset.
@return ResponseInterface

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

Sets the appropriate headers to ensure this response
is not cached by the browsers.

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
@return ResponseInterface

Sends the output to the browser.
@return ResponseInterface

Sends the headers of this HTTP request to the browser.
@return Response

Sends the Body of the message to the browser.
@return Response

Set a cookie
Accepts an arbitrary number of binds (up to 7) or an associative
array in the first parameter containing all the values.
@param array|string $name     Cookie name or array containing binds
@param string       $value    Cookie value
@param string       $expire   Cookie expiration time in seconds
@param string       $domain   Cookie domain (e.g.: '.yourdomain.com')
@param string       $path     Cookie path (default: '/')
@param string       $prefix   Cookie name prefix
@param bool         $secure   Whether to only transfer cookies via SSL
@param bool         $httponly Whether only make the cookie accessible via HTTP (no javascript)
@param string|null  $samesite
@return $this

Checks to see if the Response has a specified cookie or not.

Returns the cookie
@return Cookie|Cookie[]|null

Sets a cookie to be deleted when the response is sent.
@return $this

Returns all cookies currently set.
@return Cookie[]

Perform a redirect to a new URL, in two flavors: header or location.
@param string $uri  The URI to redirect to
@param int    $code The type of redirection, defaults to 302
@throws HTTPException For invalid status code.
@return $this

Force a download.
Generates the headers that force a download to happen. And
sends the file to the browser.
@param string      $filename The path to the file to send
@param string|null $data     The data to be downloaded
@param bool        $setMime  Whether to try and send the actual MIME type
@return DownloadResponse|null

## References

**Database Tables (inferred)**
- `https`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\ResponseInterface.php`

**Functions/Methods**:
- `getStatusCode()`
- `setStatusCode(int $code, string $reason = '')`
- `getReason()`
- `setDate(DateTime $date)`
- `setLastModified($date)`
- `setLink(PagerInterface $pager)`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `setJSON($body, bool $unencoded = false)`
- `getJSON()`
- `setXML($body)`
- `getXML()`
- `noCache()`
- `setCache(array $options = [])`
- `send()`
- `sendHeaders()`
- `sendBody()`
- `setCookie($name,
        $value = '',
        $expire = '',
        $domain = '',
        $path = '/',
        $prefix = '',
        $secure = false,
        $httponly = false,
        $samesite = null)`
- `hasCookie(string $name, ?string $value = null, string $prefix = '')`
- `getCookie(?string $name = null, string $prefix = '')`
- `deleteCookie(string $name = '', string $domain = '', string $path = '/', string $prefix = '')`
- `getCookies()`
- `redirect(string $uri, string $method = 'auto', ?int $code = null)`
- `download(string $filename = '', $data = '', bool $setMime = false)`

