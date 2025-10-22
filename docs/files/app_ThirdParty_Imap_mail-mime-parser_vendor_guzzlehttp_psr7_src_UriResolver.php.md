# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UriResolver.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UriResolver.php`
- Type: PHP
- Size: 8774 bytes

## Summary (from docblocks)

Resolves a URI reference in the context of a base URI and the opposite way.
@author Tobias Schultze
@link https://tools.ietf.org/html/rfc3986#section-5

Removes dot segments from a path and returns the new path.
@param string $path
@return string
@link http://tools.ietf.org/html/rfc3986#section-5.2.4

Converts the relative URI into a new URI that is resolved against the base URI.
@param UriInterface $base Base URI
@param UriInterface $rel  Relative URI
@return UriInterface
@link http://tools.ietf.org/html/rfc3986#section-5.2

Returns the target URI as a relative reference from the base URI.
This method is the counterpart to resolve():
   (string) $target === (string) UriResolver::resolve($base, UriResolver::relativize($base, $target))
One use-case is to use the current request URI as base URI and then generate relative links in your documents
to reduce the document size or offer self-contained downloadable document archives.
   $base = new Uri('http://example.com/a/b/');
   echo UriResolver::relativize($base, new Uri('http://example.com/a/b/c'));  // prints 'c'.
   echo UriResolver::relativize($base, new Uri('http://example.com/a/x/y'));  // prints '../x/y'.
   echo UriResolver::relativize($base, new Uri('http://example.com/a/b/?q')); // prints '?q'.
   echo UriResolver::relativize($base, new Uri('http://example.org/a/b/'));   // prints '//example.org/a/b/'.
This method also accepts a target that is already relative and will try to relativize it further. Only a
relative-path reference will be returned as-is.
   echo UriResolver::relativize($base, new Uri('/a/b/c'));  // prints 'c' as well
@param UriInterface $base   Base URI
@param UriInterface $target Target URI
@return UriInterface The relative URI reference

## References

**Database Tables (inferred)**
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\UriResolver.php`

**Classes**:
- `GuzzleHttp\Psr7\UriResolver`

**Functions/Methods**:
- `removeDotSegments($path)`
- `resolve(UriInterface $base, UriInterface $rel)`
- `relativize(UriInterface $base, UriInterface $target)`
- `getRelativePath(UriInterface $base, UriInterface $target)`
- `__construct()`

