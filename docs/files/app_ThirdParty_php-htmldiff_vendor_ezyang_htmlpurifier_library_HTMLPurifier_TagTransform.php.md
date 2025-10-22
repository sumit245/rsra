# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform.php`
- Type: PHP
- Size: 1098 bytes

## Summary (from docblocks)

Defines a mutation of an obsolete tag into a valid tag.

Tag name to transform the tag to.
@type string

Transforms the obsolete tag into the valid tag.
@param HTMLPurifier_Token_Tag $tag Tag to be transformed.
@param HTMLPurifier_Config $config Mandatory HTMLPurifier_Config object
@param HTMLPurifier_Context $context Mandatory HTMLPurifier_Context object

Prepends CSS properties to the style attribute, creating the
attribute if it doesn't exist.
@warning Copied over from AttrTransform, be sure to keep in sync
@param array $attr Attribute array to process (passed by reference)
@param string $css CSS to prepend

## References

**Database Tables (inferred)**
- `AttrTransform`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform.php`

**Classes**:
- `HTMLPurifier_TagTransform`

**Functions/Methods**:
- `transform($tag, $config, $context)`
- `prependCSS(&$attr, $css)`

