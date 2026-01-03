# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\DirectLex.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\DirectLex.php`
- Type: PHP
- Size: 20498 bytes

## Summary (from docblocks)

Our in-house implementation of a parser.
A pure PHP parser, DirectLex has absolutely no dependencies, making
it a reasonably good default for PHP4.  Written with efficiency in mind,
it can be four times faster than HTMLPurifier_Lexer_PEARSax3, although it
pales in comparison to HTMLPurifier_Lexer_DOMLex.
@todo Reread XML spec and document differences.

@type bool

Whitespace characters for str(c)spn.
@type string

Callback function for script CDATA fudge
@param array $matches, in form of array(opening tag, contents, closing tag)
@return string

@param String $html
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array|HTMLPurifier_Token[]

PHP 5.0.x compatible substr_count that implements offset and length
@param string $haystack
@param string $needle
@param int $offset
@param int $length
@return int

Takes the inside of an HTML tag and makes an assoc array of attributes.
@param string $string Inside of tag excluding name.
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array Assoc array of attributes.

## References

**Database Tables (inferred)**
- `our`
- `StartTags`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\DirectLex.php`

**Classes**:
- `HTMLPurifier_Lexer_DirectLex extends HTMLPurifier_Lexer`

**Functions/Methods**:
- `scriptCallback($matches)`
- `tokenizeHTML($html, $config, $context)`
- `substrCount($haystack, $needle, $offset, $length)`
- `parseAttributeString($string, $config, $context)`

