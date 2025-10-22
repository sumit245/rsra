# system\Security\SecurityInterface.php

- Path: `system\Security\SecurityInterface.php`
- Type: PHP
- Size: 1895 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of a Security.

CSRF Verify
@throws SecurityException
@return $this|false

Returns the CSRF Hash.

Returns the CSRF Token Name.

Returns the CSRF Header Name.

Returns the CSRF Cookie Name.

Check if CSRF cookie is expired.
@deprecated

Check if request should be redirect on failure.

Sanitize Filename
Tries to sanitize filenames in order to prevent directory traversal attempts
and other security threats, which is particularly useful for files that
were supplied via user input.
If it is acceptable for the user input to include relative paths,
e.g. file/in/some/approved/folder.txt, you can set the second optional
parameter, $relative_path to TRUE.
@param string $str          Input file name
@param bool   $relativePath Whether to preserve paths

## Symbols

# Symbols

**Files documented**: 1

## `system\Security\SecurityInterface.php`

**Functions/Methods**:
- `verify(RequestInterface $request)`
- `getHash()`
- `getTokenName()`
- `getHeaderName()`
- `getCookieName()`
- `isExpired()`
- `shouldRedirect()`
- `sanitizeFilename(string $str, bool $relativePath = false)`

