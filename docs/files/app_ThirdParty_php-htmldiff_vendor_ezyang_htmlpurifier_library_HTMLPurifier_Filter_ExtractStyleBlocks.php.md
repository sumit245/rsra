# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Filter\ExtractStyleBlocks.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Filter\ExtractStyleBlocks.php`
- Type: PHP
- Size: 13604 bytes

## Summary (from docblocks)

This filter extracts <style> blocks from input HTML, cleans them up
using CSSTidy, and then places them in $purifier->context->get('StyleBlocks')
so they can be used elsewhere in the document.
@note
     See tests/HTMLPurifier/Filter/ExtractStyleBlocksTest.php for
     sample usage.
@note
     This filter can also be used on stylesheets not included in the
     document--something purists would probably prefer. Just directly
     call HTMLPurifier_Filter_ExtractStyleBlocks->cleanCSS()

@type string

@type array

@type csstidy

@type HTMLPurifier_AttrDef_HTML_ID

@type HTMLPurifier_AttrDef_CSS_Ident

@type HTMLPurifier_AttrDef_Enum

Save the contents of CSS blocks to style matches
@param array $matches preg_replace style $matches array

Removes inline <style> tags from HTML, saves them for later use
@param string $html
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return string
@todo Extend to indicate non-text/css style blocks

Takes CSS (the stuff found in <style>) and cleans it.
@warning Requires CSSTidy <http://csstidy.sourceforge.net/>
@param string $css CSS styling to clean
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@throws HTMLPurifier_Exception
@return string Cleaned CSS

## References

**Database Tables (inferred)**
- `input`
- `HTML`
- `CSS`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Filter\ExtractStyleBlocks.php`

**Classes**:
- `HTMLPurifier_Filter_ExtractStyleBlocks extends HTMLPurifier_Filter`

**Functions/Methods**:
- `htmlpurifier_filter_extractstyleblocks_muteerrorhandler()`
- `__construct()`
- `styleCallback($matches)`
- `preFilter($html, $config, $context)`
- `cleanCSS($css, $config, $context)`

