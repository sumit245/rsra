# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Table.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Table.php`
- Type: PHP
- Size: 7168 bytes

## Summary (from docblocks)

Definition for tables.  The general idea is to extract out all of the
essential bits, and then reconstruct it later.
This is a bit confusing, because the DTDs and the W3C
validators seem to disagree on the appropriate definition. The
DTD claims:
     (CAPTION?, (COL*|COLGROUP*), THEAD?, TFOOT?, TBODY+)
But actually, the HTML4 spec then has this to say:
     The TBODY start tag is always required except when the table
     contains only one table body and no table head or foot sections.
     The TBODY end tag may always be safely omitted.
So the DTD is kind of wrong.  The validator is, unfortunately, kind
of on crack.
The definition changed again in XHTML1.1; and in my opinion, this
formulation makes the most sense.
     caption?, ( col* | colgroup* ), (( thead?, tfoot?, tbody+ ) | ( tr+ ))
Essentially, we have two modes: thead/tfoot/tbody mode, and tr mode.
If we encounter a thead, tfoot or tbody, we are placed in the former
mode, and we *must* wrap any stray tr segments with a tbody. But if
we don't run into any of them, just have tr tags is OK.

@type bool

@type string

@type array

@param array $children
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ChildDef\Table.php`

**Classes**:
- `HTMLPurifier_ChildDef_Table extends HTMLPurifier_ChildDef`

**Functions/Methods**:
- `__construct()`
- `validateChildren($children, $config, $context)`

