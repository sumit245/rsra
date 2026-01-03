# system\ThirdParty\Escaper\Escaper.php

- Path: `system\ThirdParty\Escaper\Escaper.php`
- Type: PHP
- Size: 11998 bytes

## Summary (from docblocks)

Context specific methods for use in secure output escaping

Entity Map mapping Unicode codepoints to any available named HTML entities.
While HTML supports far more named entities, the lowest common denominator
has become HTML5's XML Serialisation which is restricted to the those named
entities that XML supports. Using HTML entities would result in this error:
    XML Parsing Error: undefined entity
@var array<int, string>

Current encoding for escaping. If not UTF-8, we convert strings from this encoding
pre-escaping and back to this encoding post-escaping.
@var string

Holds the value of the special flags passed as second parameter to
htmlspecialchars().
@var int

Static Matcher which escapes characters for HTML Attribute contexts
@var callable
@psalm-var callable(array<array-key, string>):string

Static Matcher which escapes characters for Javascript contexts
@var callable
@psalm-var callable(array<array-key, string>):string

Static Matcher which escapes characters for CSS Attribute contexts
@var callable
@psalm-var callable(array<array-key, string>):string

List of all encoding supported by this class
@var array

Constructor: Single parameter allows setting of global encoding for use by
the current object.
@throws Exception\InvalidArgumentException

Return the encoding that all output/input is expected to be encoded in.
@return string

Escape a string for the HTML Body context where there are very few characters
of special meaning. Internally this will use htmlspecialchars().
@return string

Escape a string for the HTML Attribute context. We use an extended set of characters
to escape that are not covered by htmlspecialchars() to cover cases where an attribute
might be unquoted or quoted illegally (e.g. backticks are valid quotes for IE).
@return string

Escape a string for the Javascript context. This does not use json_encode(). An extended
set of characters are escaped beyond ECMAScript's rules for Javascript literal string
escaping in order to prevent misinterpretation of Javascript as HTML leading to the
injection of special characters and entities. The escaping used should be tolerant
of cases where HTML escaping was not applied on top of Javascript escaping correctly.
Backslash escaping is not used as it still leaves the escaped character as-is and so
is not useful in a HTML context.
@return string

Escape a string for the URI or Parameter contexts. This should not be used to escape
an entire URI - only a subcomponent being inserted. The function is a simple proxy
to rawurlencode() which now implements RFC 3986 since PHP 5.3 completely.
@return string

Escape a string for the CSS context. CSS escaping can be applied to any string being
inserted into CSS and escapes everything except alphanumerics.
@return string

Callback function for preg_replace_callback that applies HTML Attribute
escaping to all matches.
@param array<array-key, string> $matches
@return string

The following replaces characters undefined in HTML with the
hex entity for the Unicode replacement character.

Check if the current character to escape has a name entity we should
replace it with while grabbing the integer value of the character.

Per OWASP recommendations, we'll use upper hex entities
for any other characters where a named entity does not exist.

Callback function for preg_replace_callback that applies Javascript
escaping to all matches.
@param array<array-key, string> $matches
@return string

Callback function for preg_replace_callback that applies CSS
escaping to all matches.
@param array<array-key, string> $matches
@return string

Converts a string to UTF-8 from the base encoding. The base encoding is set via this
@param string $string
@throws Exception\RuntimeException
@return string

Converts a string from UTF-8 to the base encoding. The base encoding is set via this
@param string $string
@return string

Checks if a given string appears to be valid UTF-8 or not.
@param string $string
@return bool

Encoding conversion helper which wraps mb_convert_encoding
@param string $string
@param string $to
@param array|string $from
@return string

## References

**Database Tables (inferred)**
- `this`
- `the`
- `UTF`
- `users`

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Escaper\Escaper.php`

**Classes**:
- `Laminas\Escaper\Escaper`

**Functions/Methods**:
- `__construct(?string $encoding = null)`
- `getEncoding()`
- `escapeHtml(string $string)`
- `escapeHtmlAttr(string $string)`
- `escapeJs(string $string)`
- `escapeUrl(string $string)`
- `escapeCss(string $string)`
- `htmlAttrMatcher($matches)`
- `jsMatcher($matches)`
- `cssMatcher($matches)`
- `toUtf8($string)`
- `fromUtf8($string)`
- `isUtf8($string)`
- `convertEncoding($string, $to, $from)`

