# system\Helpers\url_helper.php

- Path: `system\Helpers\url_helper.php`
- Type: PHP
- Size: 18592 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Used by the other URL functions to build a
framework-specific URI based on the App config.
@internal Outside of the framework this should not be used directly.
@param string $relativePath May include queries or fragments
@throws InvalidArgumentException For invalid paths or config

Returns a site URL as defined by the App config.
@param mixed    $relativePath URI string or array of URI segments
@param App|null $config       Alternate configuration to use

Returns the base URL as defined by the App config.
Base URLs are trimmed site URLs without the index page.
@param mixed  $relativePath URI string or array of URI segments
@param string $scheme

Returns the current full URL based on the Config\App settings and IncomingRequest.
String returns ignore query and fragment parts.
@param bool                 $returnObject True to return an object instead of a string
@param IncomingRequest|null $request      A request to use when retrieving the path
@return string|URI

Returns the previous URL the current visitor was on. For security reasons
we first check in a saved session variable, if it exists, and use that.
If that's not available, however, we'll use a sanitized url from $_SERVER['HTTP_REFERER']
which can be set by the user so is untrusted and not set by certain browsers/servers.
@return mixed|string|URI

URL String
Returns the path part of the current URL
@param bool $relative Whether the resulting path should be relative to baseURL

Index page
Returns the "index_page" from your config file
@param App|null $altConfig Alternate configuration to use

Anchor Link
Creates an anchor based on the local URL.
@param mixed    $uri        URI string or array of URI segments
@param string   $title      The link title
@param mixed    $attributes Any attributes
@param App|null $altConfig  Alternate configuration to use

Anchor Link - Pop-up version
Creates an anchor based on the local URL. The link
opens a new window based on the attributes specified.
@param string   $uri        the URL
@param string   $title      the link title
@param mixed    $attributes any attributes
@param App|null $altConfig  Alternate configuration to use

Mailto Link
@param string $email      the email address
@param string $title      the link title
@param mixed  $attributes any attributes

Encoded Mailto Link
Create a spam-protected mailto link written in Javascript
@param string $email      the email address
@param string $title      the link title
@param mixed  $attributes any attributes

Auto-linker
Automatically links URL and Email addresses.
Note: There's a bit of extra code here to deal with
URLs or emails that end in a period. We'll strip these
off and add them after the link.
@param string $str   the string
@param string $type  the type: email, url, or both
@param bool   $popup whether to create pop-up links

Prep URL - Simply adds the http:// or https:// part if no scheme is included.
Formerly used URI, but that does not play nicely with URIs missing
the scheme.
@param string $str    the URL
@param bool   $secure set true if you want to force https://

Create URL Title
Takes a "title" string as input and creates a
human-friendly URL string with a "separator" string
as the word separator.
@param string $str       Input string
@param string $separator Word separator (usually '-' or '_')
@param bool   $lowercase Whether to transform the output string to lowercase

Create URL Title that takes into account accented characters
Takes a "title" string as input and creates a
human-friendly URL string with a "separator" string
as the word separator.
@param string $str       Input string
@param string $separator Word separator (usually '-' or '_')
@param bool   $lowercase Whether to transform the output string to lowercase

Get the full, absolute URL to a controller method
(with additional arguments)
NOTE: This requires the controller/method to
have a route defined in the routes Config file.
@param mixed ...$args
@throws RouterException

Determines if current url path contains
the given path. It may contain a wildcard (*)
which will allow any valid character.
Example:
  if (url_is('admin*)) ...

## References

**Database Tables (inferred)**
- `the`
- `your`
- `preg_match_all`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\url_helper.php`

**Functions/Methods**:
- `_get_uri(string $relativePath = '', ?App $config = null)`
- `site_url($relativePath = '', ?string $scheme = null, ?App $config = null)`
- `base_url($relativePath = '', ?string $scheme = null)`
- `current_url(bool $returnObject = false, ?IncomingRequest $request = null)`
- `previous_url(bool $returnObject = false)`
- `uri_string(bool $relative = false)`
- `index_page(?App $altConfig = null)`
- `anchor($uri = '', string $title = '', $attributes = '', ?App $altConfig = null)`
- `anchor_popup($uri = '', string $title = '', $attributes = false, ?App $altConfig = null)`
- `mailto(string $email, string $title = '', $attributes = '')`
- `safe_mailto(string $email, string $title = '', $attributes = '')`
- `auto_link(string $str, string $type = 'both', bool $popup = false)`
- `prep_url(string $str = '', bool $secure = false)`
- `url_title(string $str, string $separator = '-', bool $lowercase = false)`
- `mb_url_title(string $str, string $separator = '-', bool $lowercase = false)`
- `url_to(string $controller, ...$args)`
- `url_is(string $path)`

