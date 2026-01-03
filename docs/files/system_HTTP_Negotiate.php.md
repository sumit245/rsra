# system\HTTP\Negotiate.php

- Path: `system\HTTP\Negotiate.php`
- Type: PHP
- Size: 10981 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Negotiate
Provides methods to negotiate with the HTTP headers to determine the best
type match between what the application supports and what the requesting
getServer wants.
@see http://tools.ietf.org/html/rfc7231#section-5.3

Request
@var IncomingRequest|RequestInterface

Constructor

Stores the request instance to grab the headers from.
@return $this

Determines the best content-type to use based on the $supported
types the application says it supports, and the types requested
by the client.
If no match is found, the first, highest-ranking client requested
type is returned.
@param bool $strictMatch If TRUE, will return an empty string when no match found.
                         If FALSE, will return the first supported element.

Determines the best charset to use based on the $supported
types the application says it supports, and the types requested
by the client.
If no match is found, the first, highest-ranking client requested
type is returned.

Determines the best encoding type to use based on the $supported
types the application says it supports, and the types requested
by the client.
If no match is found, the first, highest-ranking client requested
type is returned.

Determines the best language to use based on the $supported
types the application says it supports, and the types requested
by the client.
If no match is found, the first, highest-ranking client requested
type is returned.

Does the grunt work of comparing any of the app-supported values
against a given Accept* header string.
Portions of this code base on Aura.Accept library.
@param array  $supported    App-supported values
@param string $header       header string
@param bool   $enforceTypes If TRUE, will compare media types and sub-types.
@param bool   $strictMatch  If TRUE, will return empty string on no match.
                            If FALSE, will return the first supported element.
@param bool   $matchLocales If TRUE, will match locale sub-types to a broad type (fr-FR = fr)
@return string Best match

Parses an Accept* header into it's multiple values.
This is based on code from Aura.Accept library.

Match-maker
@param bool $matchLocales

Checks two Accept values with matching 'values' to see if their
'params' are the same.

Compares the types/subtypes of an acceptable Media type and
the supported string.

Will match locales against their broader pairs, so that fr-FR would
match a supported localed of fr

## References

**Database Tables (inferred)**
- `Aura`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\Negotiate.php`

**Classes**:
- `CodeIgniter\HTTP\Negotiate`

**Functions/Methods**:
- `__construct(?RequestInterface $request = null)`
- `setRequest(RequestInterface $request)`
- `media(array $supported, bool $strictMatch = false)`
- `charset(array $supported)`
- `encoding(array $supported = [])`
- `language(array $supported)`
- `getBestMatch(array $supported, ?string $header = null, bool $enforceTypes = false, bool $strictMatch = false, bool $matchLocales = false)`
- `parseHeader(string $header)`
- `match(array $acceptable, string $supported, bool $enforceTypes = false, $matchLocales = false)`
- `matchParameters(array $acceptable, array $supported)`
- `matchTypes(array $acceptable, array $supported)`
- `matchLocales(array $acceptable, array $supported)`

