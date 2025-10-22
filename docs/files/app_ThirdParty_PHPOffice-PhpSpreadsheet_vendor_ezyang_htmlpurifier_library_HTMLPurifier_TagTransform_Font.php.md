# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform\Font.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform\Font.php`
- Type: PHP
- Size: 3371 bytes

## Summary (from docblocks)

Transforms FONT tags to the proper form (SPAN with CSS styling)
This transformation takes the three proprietary attributes of FONT and
transforms them into their corresponding CSS attributes.  These are color,
face, and size.
@note Size is an interesting case because it doesn't map cleanly to CSS.
      Thanks to
      http://style.cleverchimp.com/font_size_intervals/altintervals.html
      for reasonable mappings.
@warning This doesn't work completely correctly; specifically, this
         TagTransform operates before well-formedness is enforced, so
         the "active formatting elements" algorithm doesn't get applied.

@type string

@type array

@param HTMLPurifier_Token_Tag $tag
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_Token_End|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TagTransform\Font.php`

**Classes**:
- `HTMLPurifier_TagTransform_Font extends HTMLPurifier_TagTransform`

**Functions/Methods**:
- `transform($tag, $config, $context)`

