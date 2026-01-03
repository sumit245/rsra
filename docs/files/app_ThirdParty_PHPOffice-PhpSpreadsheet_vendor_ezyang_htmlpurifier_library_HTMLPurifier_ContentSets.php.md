# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ContentSets.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ContentSets.php`
- Type: PHP
- Size: 5640 bytes

## Summary (from docblocks)

@todo Unit test

List of content set strings (pipe separators) indexed by name.
@type array

List of content set lookups (element => true) indexed by name.
@type array
@note This is in HTMLPurifier_HTMLDefinition->info_content_sets

Synchronized list of defined content sets (keys of info).
@type array

Synchronized list of defined content values (values of info).
@type array

Merges in module's content sets, expands identifiers in the content
sets and populates the keys, values and lookup member variables.
@param HTMLPurifier_HTMLModule[] $modules List of HTMLPurifier_HTMLModule

Accepts a definition; generates and assigns a ChildDef for it
@param HTMLPurifier_ElementDef $def HTMLPurifier_ElementDef reference
@param HTMLPurifier_HTMLModule $module Module that defined the ElementDef

Instantiates a ChildDef based on content_model and content_model_type
member variables in HTMLPurifier_ElementDef
@note This will also defer to modules for custom HTMLPurifier_ChildDef
      subclasses that need content set expansion
@param HTMLPurifier_ElementDef $def HTMLPurifier_ElementDef to have ChildDef extracted
@param HTMLPurifier_HTMLModule $module Module that defined the ElementDef
@return HTMLPurifier_ChildDef corresponding to ElementDef

Converts a string list of elements separated by pipes into
a lookup array.
@param string $string List of elements
@return array Lookup array of elements

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ContentSets.php`

**Classes**:
- `HTMLPurifier_ContentSets`
- `to`

**Functions/Methods**:
- `__construct($modules)`
- `generateChildDef(&$def, $module)`
- `generateChildDefCallback($matches)`
- `getChildDef($def, $module)`
- `convertToLookup($string)`

