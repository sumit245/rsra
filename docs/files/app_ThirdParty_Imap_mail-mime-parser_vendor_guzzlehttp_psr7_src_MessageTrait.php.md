# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MessageTrait.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MessageTrait.php`
- Type: PHP
- Size: 5917 bytes

## Summary (from docblocks)

Trait implementing functionality common to requests and responses.

@var array Map of all registered headers, as original name => array of values

@var array Map of lowercase header name => original name at registration

@var string

@var StreamInterface

Trims whitespace from the header values.
Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.
header-field = field-name ":" OWS field-value OWS
OWS          = *( SP / HTAB )
@param string[] $values Header values
@return string[] Trimmed header values
@see https://tools.ietf.org/html/rfc7230#section-3.2.4

## References

**Database Tables (inferred)**
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\MessageTrait.php`

**Functions/Methods**:
- `getProtocolVersion()`
- `withProtocolVersion($version)`
- `getHeaders()`
- `hasHeader($header)`
- `getHeader($header)`
- `getHeaderLine($header)`
- `withHeader($header, $value)`
- `withAddedHeader($header, $value)`
- `withoutHeader($header)`
- `getBody()`
- `withBody(StreamInterface $body)`
- `setHeaders(array $headers)`
- `normalizeHeaderValue($value)`
- `trimHeaderValues(array $values)`
- `assertHeader($header)`

