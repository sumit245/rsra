# system\HTTP\RedirectResponse.php

- Path: `system\HTTP\RedirectResponse.php`
- Type: PHP
- Size: 4498 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Handle a redirect response

Sets the URI to redirect to and, optionally, the HTTP status code to use.
If no code is provided it will be automatically determined.
@param string   $uri  The URI to redirect to
@param int|null $code HTTP status code
@return $this

Sets the URI to redirect to but as a reverse-routed or named route
instead of a raw URI.
@throws HTTPException
@return $this

Helper function to return to previous page.
Example:
 return redirect()->back();
@return $this

Specifies that the current $_GET and $_POST arrays should be
packaged up with the response.
It will then be available via the 'old()' helper function.
@return $this

Set validation errors in the session.
If the validation has any errors, transmit those back
so they can be displayed when the validation is handled
within a method different than displaying the form.
@TODO Make this method public when removing $this->withErrors() in withInput().
@return $this

Adds a key and message to the session as Flashdata.
@param array|string $message
@return $this

Copies any cookies from the global Response instance
into this RedirectResponse. Useful when you've just
set a cookie but need ensure that's actually sent
with the response instead of lost.
@return $this|RedirectResponse

Copies any headers from the global Response instance
into this RedirectResponse. Useful when you've just
set a header be need to ensure its actually sent
with the redirect response.
@return $this|RedirectResponse

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\RedirectResponse.php`

**Classes**:
- `CodeIgniter\HTTP\RedirectResponse extends Response`

**Functions/Methods**:
- `to(string $uri, ?int $code = null, string $method = 'auto')`
- `route(string $route, array $params = [], int $code = 302, string $method = 'auto')`
- `back(?int $code = null, string $method = 'auto')`
- `withInput()`
- `withErrors()`
- `with(string $key, $message)`
- `withCookies()`
- `withHeaders()`

